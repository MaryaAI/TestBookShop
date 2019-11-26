<?php

namespace App\Http\Controllers;

use App\Book;
use App\Author;
use App\Category;
use App\Publisher;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $books = Book::count();
        $authors = Author::count();
        $categories = Category::count();
        $publishers = Publisher::count();
        return view('admin.index', compact(['books', 'authors', 'categories', 'publishers']));
    }
}
