<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function roll()
    {
        return $this->hasMany(Roll::class);
    }
    use HasFactory;
}
