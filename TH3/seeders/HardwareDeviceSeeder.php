<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HardwareDeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hardware_devices')->insert([
            ['device_name' => 'Logitech G502', 'type' => 'Mouse', 'status' => true, 'center_id' => 1],
        ]);
    }
}
