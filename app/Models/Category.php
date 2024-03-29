<?php

namespace App\Models;

use App\Models\App;
use App\Models\Icon;
use App\Models\Arround;
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

    public function arrounds(){
        return $this->hasMany(Arround::class);
    }

    public function icon(){
        return $this->hasOne(Icon::class,'id','icon_id');
    }
}