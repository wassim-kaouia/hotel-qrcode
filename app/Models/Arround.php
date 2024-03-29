<?php

namespace App\Models;

use App\Models\App;
use App\Models\Interest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Arround extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function app(){
        return $this->belongsTo(App::class);
    }

    public function interest(){
        return $this->belongsTo(Interest::class);
    }
}