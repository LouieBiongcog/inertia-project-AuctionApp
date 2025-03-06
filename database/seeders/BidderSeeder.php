<?php

namespace Database\Seeders;

use App\Models\Bidder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BidderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Bidder::create([
        //     'first_name' => 'John',
        //     'last_name' => 'Doe',
        //     'email' => 'john@example.com',
        //     'address' => '123 Main St',
        // ]);

        // Bidder::create([
        //     'first_name' => 'Jane',
        //     'last_name' => 'Smith',
        //     'email' => 'jane@example.com',
        //     'address' => '456 Elm St',
        // ]);

        Bidder::factory()->count(50)->create();
    }
}
