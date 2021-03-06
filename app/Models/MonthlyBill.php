<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyBill extends Model
{
    use HasFactory;
    protected $table='monthly_bills';
    protected $fillable=['title','type','amount'];
}
