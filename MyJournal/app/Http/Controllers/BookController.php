<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index(Request $request)
{
    $status = $request->get('status');
    $keyword = $request->get('keyword');

    // query untuk mengambil data buku
    $query = Book::query();

    // Filtering
    if ($status && $status != 'all') {
        $query->where('status', $status);
    }

    // Mencari judul
    if ($keyword) {
        $query->where('title', 'like', "%$keyword%");
    }

    $books = $query->get();

    // Statistik tetap ada (Soal 4)
    $totalBooks   = Book::count();
    $totalWishlist = Book::where('status', 'wishlist')->count();
    $totalReading  = Book::where('status', 'reading')->count();
    $totalFinished = Book::where('status', 'finished')->count();
    $maxRating     = Book::max('rating');
    $minRating     = Book::min('rating');
    $avgRating     = Book::avg('rating');

    return view('books.index', compact(
        'books', 'status', 'keyword',
        'totalBooks', 'totalWishlist', 'totalReading', 'totalFinished',
        'maxRating', 'minRating', 'avgRating'
    ));
}

}


