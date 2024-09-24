<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::table('books')->get();
        return response()->json($books);
    }
    public function show($id)
    {
        $book = DB::table('books')->where('id', $id)->first();
        if ($book) {
        return response()->json($book);
            } else {
        return response()->json(['message' => 'Book not found'], 404);
            }
    }

    public function store(Request $request)
    {
        $data = $request->validate([
                    'title' => 'required|max:255',
                    'author' => 'required|max:255',
                    'description' => 'nullable',
                    ]);
        DB::table('books')->insert([
                    'title' => $data['title'],
                    'author' => $data['author'],
                    'description' => $data['description'],
                    'created_at' => now(),
                    'updated_at' => now(),
                        ]);
        return response()->json(['message' => 'Book has been created'], 201);
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $book = DB::table('books')->where('id', $id)->first();

        if ($book) {
            DB::table('books')
                ->where('id', $id)
                ->update([
                    'title' => $validatedData['title'],
                    'author' => $validatedData['author'],
                    'description' => $validatedData['description'],
                    'updated_at' => now(),
                ]);

            return response()->json(['message' => 'Books has been updated']);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }

    public function destroy($id)
    {
        $book = DB::table('books')->where('id', $id)->first();

        if ($book) {
            DB::table('books')->where('id', $id)->delete();
            return response()->json(['message' => 'Book has been deleted']);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }
}
