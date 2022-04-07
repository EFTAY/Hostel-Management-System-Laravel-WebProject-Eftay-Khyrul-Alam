<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mealbill extends Model
{
    protected $table = 'meal_bills';
    protected $guarded = ['id'];
    protected $appends = ['total'];

    public function getTotalAttribute(){
        return $this->breakfast_price+$this->lunch_price+$this->dinner_price;
    }
}
