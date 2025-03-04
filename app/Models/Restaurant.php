<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'image',
        'rating',
    ];

    public function chefs()
    {
        return $this->hasMany(Chef::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
