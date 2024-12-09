<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Issue::create([
            'computer_id' => 1,
            'reported_by' => 'User A',
            'reported_date' => now(),
            'description' => 'Example issue description.',
            'urgency' => 'Medium',
            'status' => 'Open',
        ]);
    }
}
