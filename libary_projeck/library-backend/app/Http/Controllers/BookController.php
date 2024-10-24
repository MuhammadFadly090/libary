<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua buku dari database
        $books = Book::all();
        return response()->json($books);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer',
        ]);

        // Menyimpan buku baru ke database
        $book = new Book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->year = $request->input('year');
        $book->save();

        return response()->json($book, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Menampilkan buku berdasarkan ID
        $book = Book::find($id);

        if ($book) {
            return response()->json($book);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'author' => 'sometimes|required|string|max:255',
            'year' => 'sometimes|required|integer',
        ]);

        // Mencari buku berdasarkan ID dan memperbarui
        $book = Book::find($id);

        if ($book) {
            $book->title = $request->input('title', $book->title);
            $book->author = $request->input('author', $book->author);
            $book->year = $request->input('year', $book->year);
            $book->save();

            return response()->json($book);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Menghapus buku berdasarkan ID
        $book = Book::find($id);

        if ($book) {
            $book->delete();
            return response()->json(['message' => 'Book deleted successfully']);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }
}
