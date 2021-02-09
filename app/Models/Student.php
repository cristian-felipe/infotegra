<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function member(){
        return $this->hasOne(Member::class);
    }
    public function area(){
        return $this->hasMany(Area::class);
    }
    public function place(){
        return $this->hasMany(Place::class);
    }

    public function program(){
        return $this->hasMany(Program::class);
    }

}
