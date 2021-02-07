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

    public function minutes()
    {
        return $this->hasMany(Minute::class);
    }

    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    public function companies()
    {
        return $this->BelongsToMany(Company::class);
    }
}
