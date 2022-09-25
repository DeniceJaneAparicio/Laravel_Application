<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainor extends Model
{
    public function trainees() {
        return $this->hasMany('App/Trainee')
    }
}
