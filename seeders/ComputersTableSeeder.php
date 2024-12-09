<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
        {
        Computer::create([
            'computer_name' => 'Lab1-PC01',
            'model' => 'Dell Optiplex 7090',
            'operating_system' => 'Windows 10 Pro',
            'processor' => 'Intel Core i5-11400',
            'memory' => 16,
            'available' => true,
        ]);
    }
}

