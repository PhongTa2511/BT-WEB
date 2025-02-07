<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            MedicinesSeeder::class,
            SalesSeeder::class,
            ClassesSeeder::class,
            StudentsSeeder::class,
            IssuesTableSeeder::class,
            ComputersTableSeeder::class,
        ]);
        
    }
}
