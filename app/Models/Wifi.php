<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wifi extends Model
{
    use HasFactory;

    protected $guarded= [];
    
    public function app(){
        return $this->belongsTo(App::class);
    }
}