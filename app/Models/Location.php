<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
    ];
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
    public function drivers()
    {
        return $this->hasMany(Driver::class);
    }
}
