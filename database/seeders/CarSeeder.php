<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Car::create([
        //     'make' => 'Toyota',
        //     'model' => 'Corolla',
        //     'year' => 2020,
        //     'miles' => 15000,
        // ]);

        // Car::create([
        //     'make' => 'Honda',
        //     'model' => 'Civic',
        //     'year' => 2019,
        //     'miles' => 20000,
        // ]);

        Car::factory()->count(50)->create();
    }
}
