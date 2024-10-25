<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Menampilkan daftar semua buku
    public function index()
    {
        return response()->json([
            'code' => 200,
            'data' => Book::all()
        ]);
    }

    // Menyimpan buku baru
    public function store(Request $request)
{
    \Log::info('Data received for adding book:', $request->all());
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'year' => 'required|integer',
        'category' => 'required|string|max:255',
        'publisher' => 'required|string|max:255',
    ]);

    $book = Book::create($validatedData);
    return response()->json(['code' => 201, 'data' => $book]);
    \Log::info('Data received for adding book:', $request->all());

}

    // Menampilkan buku berdasarkan ID
    public function show($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'code' => 404,
                'message' => 'Book not found.'
            ]);
        }

        return response()->json([
            'code' => 200,
            'data' => $book
        ]);
    }

    // Memperbarui buku berdasarkan ID
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'author' => 'sometimes|required|string|max:255',
            'year' => 'sometimes|required|integer',
            'category' => 'nullable|string|max:255',
            'publisher' => 'sometimes|string|max:255',
        ]);

        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'code' => 404,
                'message' => 'Book not found.'
            ]);
        }

        $book->update($request->all());

        return response()->json([
            'code' => 200,
            'data' => $book,
            'message' => 'Book updated successfully.'
        ]);
    }

    // Menghapus buku berdasarkan ID
    public function destroy($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'code' => 404,
                'message' => 'Book not found.'
            ]);
        }

        $book->delete();

        return response()->json([
            'code' => 200,
            'message' => 'Book deleted successfully.'
        ]);
    }
}
