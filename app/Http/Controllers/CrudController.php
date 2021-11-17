<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Librarian;
use app\Models\book;
use app\Models\LibraryMember;
use app\Models\administrator;
use App\Request\CrudRequest;
use App\Http\Middleware\libeary;
use App\Http\Middleware\Administrator;


class CrudController extends Controller
{
    public function __construct()
    {
        $this->middleware([Library::class,Administrator::class]);
    }
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //crud conteoller has crud functionality,can use Library and Administrator


    public function index()
    {
        $book = book::all();
        return response()->json(['status' => 'Success', 'data' => $book]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new book();
        $book->NameAuthor = $request->NameAuthor;
        $book->published = $request->published;
        $book->category = $request->category;
        $book->status = $request->status;
        $book->save();
 
        return response()->json(['status' => 'Success', 'message' => 'Book Saved']);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = book::find($id);
        return response()->json(['status' => 'Success', 'data' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {      
        $book = new book();
        $book->NameAuthor = $request->NameAuthor;
        $book->published = $request->published;
        $book->category = $request->category;
        $book->status = $request->status;
        $book->save();
 
        return response()->json(['status' => 'Success', 'message' => 'Book Updated']);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = book::find($id);
        $book->delete();
        return response()->json(['status' => 'Success', 'Message' => 'book Deleted']);
    }
}
