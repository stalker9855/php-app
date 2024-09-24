<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 DB::table('books')->insert([
            [
                'title' => 'Lord of the Rings',
                'author' => 'J.R.R. Tolkien',
                'description' => 'A fantasy epic.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'description' => 'A prequel to Lord of the Rings.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'author' => 'J.K. Rowling',
                'description' => 'A fantasy novel about a young wizard.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
