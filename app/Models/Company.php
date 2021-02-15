<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
