<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model {

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}