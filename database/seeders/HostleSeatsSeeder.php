<?php

namespace Database\Seeders;

use App\Models\HostleSeats;
use Illuminate\Database\Seeder;

class HostleSeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HostleSeats::factory(100)->create();
    }
}
