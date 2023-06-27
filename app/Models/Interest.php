<?php

namespace App\Models;

use App\Models\Arround;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Interest extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function arrounds(){
        return $this->hasMany(Arround::class);
    }
}