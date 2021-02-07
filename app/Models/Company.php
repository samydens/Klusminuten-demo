<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->BelongsToMany(User::class);
    }

    public function jobs()
    {
        return $this->BelongsToMany(Job::class);
    }
}
