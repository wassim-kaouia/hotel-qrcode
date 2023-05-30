<?php

namespace App\Models;

use App\Models\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Emergency extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function app(){
        return $this->belongsTo(App::class);
    }
}