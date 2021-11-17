<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Model\Book;
use App\Http\Middleware\Approval;
use App\Http\Middleware\Administrator;

class SearchBook extends Controller
{
    public function __construct()
    {
        $this->middleware([Approval::class, Administrator::class]);
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $books = Book::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('status', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('search', compact('books'));
    }
}
