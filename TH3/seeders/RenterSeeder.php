<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('renters')->insert([
            ['name' => 'Nguyễn Văn A', 'phone_number' => '0987654321', 'email' => 'nva@gmail.com'],
        ]);
    }
}
