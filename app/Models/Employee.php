<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'vakman_id',
        'phone_number'
    ];

    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }
}
