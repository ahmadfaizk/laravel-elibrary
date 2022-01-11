<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bookCount = Book::count();
        $categoryCount = Category::count();
        return view('pages.home', [
            'bookCount' => $bookCount,
            'categoryCount' => $categoryCount
        ]);
    }
}
