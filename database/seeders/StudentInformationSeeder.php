<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentInformation;

class StudentInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentInformation::factory(88)->create();
    }
}
