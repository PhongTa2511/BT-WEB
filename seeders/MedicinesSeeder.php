<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            DB::table('medicines')->insert([
                [
                    'name' => 'Paracetamol',
                    'brand' => 'ABC Pharma',
                    'dosage' => '500mg tablets',
                    'form' => 'tablet',
                    'price' => 5.99,
                    'stock' => 100,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Ibuprofen',
                    'brand' => 'XYZ Pharma',
                    'dosage' => '200mg tablets',
                    'form' => 'tablet',
                    'price' => 7.99,
                    'stock' => 150,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // Thêm các thuốc khác nếu cần
            ]);
        }
    
    }
}
