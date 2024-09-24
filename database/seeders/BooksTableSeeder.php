<?php

namespace Database\Seeders;

use App\Models\Author;
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
    $author1 = Author::create(['name' => 'J.R.R. Tolkien']);
    $author2 = Author::create(['name' => 'J.K. Rowling']);
 DB::table('books')->insert([
            [
                'title' => 'Lord of the Rings',
                'author_id' => $author1->id,
                'description' => 'A fantasy epic.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Hobbit',
                'author_id' => $author1->id,
                'description' => 'A prequel to Lord of the Rings.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'author_id' => $author2->id,
                'description' => 'A fantasy novel about a young wizard.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
