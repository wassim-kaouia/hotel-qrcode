<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}

