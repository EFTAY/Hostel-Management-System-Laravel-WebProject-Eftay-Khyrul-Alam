<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\StudentInformation;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentInformationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentInformation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'studentID'=>$this->faker->postcode(),
            'name'=>$this->faker->name(),
            'department'=>Str::random(3),
            'email'=>$this->faker->unique()->safeemail(),
            'gender'=>Str::random(4),
            'phone'=>Str::random(11),
            'guardianPhone'=>Str::random(11),
            'nationality'=>Str::random(11),
            'address'=>$this->faker->address(),
            'seatNumber'=>Str::random(6),
            'paymentStatus'=>Str::random(5),
            'status'=>Str::random(8)
        ];
    }
}
