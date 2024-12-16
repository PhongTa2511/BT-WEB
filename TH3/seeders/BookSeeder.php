<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'Clean Code', 'author' => 'Robert C. Martin', 'publication_year' => 2008, 'genre' => 'Programming', 'library_id' => 1],
        ]);
    }
}
