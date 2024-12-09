<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'date_of_birth' => '2016-05-12',
                'parent_phone' => '0123456789',
                'class_id' => 1, // Liên kết với lớp Pre-K
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'date_of_birth' => '2015-09-20',
                'parent_phone' => '0987654321',
                'class_id' => 2, // Liên kết với lớp Kindergarten
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
