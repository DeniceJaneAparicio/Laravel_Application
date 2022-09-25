<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainee extends Model
{
    public function trainor() {
        return $this->belongsTo('App/Trainor');
    }
    public function course() {
        return $this->belongsTo('App/Course');
    }

}
