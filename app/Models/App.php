<?php

namespace App\Models;

use App\Models\Emergency;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class App extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setting(){
        return $this->hasOne(Setting::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function images(){
        return $this->hasMany(Imageapp::class);
    }

    public function wifis(){
        return $this->hasMany(Wifi::class);
    }

    public function digicodes(){
        return $this->hasMany(Digicode::class);
    }

    public function alentours(){
        return $this->hasMany(Arround::class);
    }

    public function livres(){
        return $this->hasMany(Livre::class);
    }

    public function numeros(){
        return $this->hasMany(Num::class);
    }

    public function infos(){
        return $this->hasMany(Info::class);
    }

    public function emergencies(){
        return $this->hasMany(Emergency::class);
    }
}