<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'adres',
        'zip',
        'city',
        'phone_number',
        'mail',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
