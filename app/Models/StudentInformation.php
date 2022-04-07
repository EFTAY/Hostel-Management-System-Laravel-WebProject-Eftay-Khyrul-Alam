<?php

namespace App\Models;
use App\Models\HostleSeats;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentInformation extends Model
{
    use HasFactory;
    protected $table='student_information';
    protected $guarded=['id'];
    

    public function hostelseat(){
        return $this->belongsTo(HostleSeats::class,'seatNumber','id');
    }

    public function hostel_meals(){
        return $this->hasMany(Mealbill::class,'student_id','studentID');
    }
}
