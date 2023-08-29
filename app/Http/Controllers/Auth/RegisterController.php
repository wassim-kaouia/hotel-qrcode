<?php

namespace App\Http\Controllers\Auth;

use App\Models\App;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
 
    use RegistersUsers;


    // protected $redirectTo = RouteServicseProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest');
    }

 
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'user_name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }




    protected function create(array $data)
    { 
        return User::create([
            'name' => $data['name'],
            'user_name' => $data['user_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function redirectTo()
    {
        return '/manage/modules';
    }

    
}