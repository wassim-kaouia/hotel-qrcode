<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imageapp extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function app(){
        return $this->belongsTo(App::class);
    }

}
