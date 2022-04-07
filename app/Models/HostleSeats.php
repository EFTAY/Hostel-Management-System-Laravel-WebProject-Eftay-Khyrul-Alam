<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostleSeats extends Model
{
    use HasFactory;
    protected $table='hostle_seats';
    protected $fillable=['floor','flat','seatNumber','status'];
}
