<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function specialty()
    {
        return $this->belongsTo(Speciality::class);
    }
}