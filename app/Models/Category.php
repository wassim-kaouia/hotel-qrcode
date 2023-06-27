<?php

namespace App\Models;

use App\Models\App;
use App\Models\Interest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function app(){
        return $this->belongsTo(App::class);
    }

    public function interests(){
        return $this->hasMany(Interest::class);
    }
}