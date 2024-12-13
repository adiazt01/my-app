<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}