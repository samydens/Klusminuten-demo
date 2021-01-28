<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'photo',
        'location',
        'user_id',
        'client_id',
        'agr_minutes',
        'agr_material'
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}
