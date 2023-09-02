<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $book = Book::all();
        $abc = "ABCS123";

        return view('book', compact(
            'book',
            'abc',
        ));
    }
}
