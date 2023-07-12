<?php

namespace App\Actions\Fortify;

use App\Models\App;
use App\Models\User;
use App\Models\Setting;
use App\Models\Category;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'user_name' => $input['user_name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        //instanciate app for the created user 
        $app = new App();
        $app->title = '';
        $app->description = '';
        $app->avatar = '';
        $app->user_id = $user->id;
        $app->urlName = '';
        $app->save();
        
        //instanciate empty setting
        $setting = new Setting();
        $setting->modules_state = json_decode('{}');
        $setting->app_theme = json_decode('{}');
        // $setting->app_setting = json_decode('{}');
        $setting->app_id = $app->id;
        $setting->save();
        // // dd(App::first());
        // //get first set model of category
        // $firstCategory = Category::where('app_id','=',App::first()->id)->get();
       
        // foreach($firstCategory as $firstcat){
        //     //instanciate pre-set category with current app id
        //     $category = new Category();
        //     $category->title = $firstcat->title;
        //     $category->app_id = $user->app->id;
        //     $category->icon_id = $firstcat->icon_id;
        //     $category->save();
        // }

        return $user;
    }
}