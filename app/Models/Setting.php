<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $casts = [
        'app_theme' => 'array',
        'modules_state' => 'array',
        'app_setting' => 'arrray',
    ];


    protected $guarded = ['id'];

    public function app(){
        return $this->belongsTo(App::class);
    }
}
