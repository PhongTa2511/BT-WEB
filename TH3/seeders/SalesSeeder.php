<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            DB::table('sales')->insert([
                [
                    'medicine_id' => 1, // Liên kết đến ID thuốc trong bảng `medicines`
                    'quantity' => 2,
                    'sale_date' => Carbon::now()->subDays(2),
                    'customer_phone' => '0123456789',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'medicine_id' => 2, // Liên kết đến ID thuốc trong bảng `medicines`
                    'quantity' => 5,
                    'sale_date' => Carbon::now()->subDays(1),
                    'customer_phone' => '0987654321',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // Thêm các giao dịch khác nếu cần
            ]);
        }
    }
}
