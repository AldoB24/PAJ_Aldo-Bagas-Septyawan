<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Voter::factory(5)->create();

        \App\Models\Voter::factory()->create([
            'name' => 'Aldo',
            'email' => 'test@example.com',
            'address' => 'mastrip 163',
        ]);
    }
}
