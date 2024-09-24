<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get()->makeHidden('author_id');
        return response()->json($books);
    }
    public function show($id)
    {
        $book = Book::with('author')->findOrFail($id)->makeHidden('author_id');
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
            'author_id' => 'required|exists:authors,id',
            'description' => 'nullable',
        ]);


        Book::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'author_id' => $data['author_id'],
        ]);

        return response()->json(['message' => 'Book and author created successfully'], 201);
    }
    public function update(Request $request, $id)
    {
       $data = $request->validate([
            'title' => 'required|max:255',
            'author_id' => 'required|exists:authors,id',
            'description' => 'nullable',
        ]);

        $book = Book::findOrFail($id);

        if ($book) {
            $book->update([
                'title' => $data['title'],
                'author_id' => $data['author_id'],
                'description' => $data['description'],
            ]);

            return response()->json(['message' => 'Book updated successfully', 'book' => $book]);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        if ($book) {
            $book->delete();
            return response()->json(['message' => 'Book has been deleted']);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }
}
