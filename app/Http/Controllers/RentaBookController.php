<?php

namespace App\Http\Controllers;

use App\Models\RentaBook;

use App\Http\Controllers\Controller;
use App\Http\Requests\RentaBookRequest;
use App\Http\Resources\RentaBookResponse;
use App\Models\RentaABook;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;
use App\Http\Middleware\Approval;
use App\Http\Middleware\Administrator;

//the functionality of the controller is to create a book rental help form


class RentaBookController extends Controller
{

    public function __construct()
    {
        $this->middleware([Approval::class, Administrator::class]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RentaBookResource::collection();
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
        $RentaBook = new RentaBook();
        $rentaBook ->title = $request->title;
        $RentaBook->terms = $request->terms;
        $book->save();
 
        return response()->json(['status' => 'Success', 'message' => 'Book renta']);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RentaBook  $rentaBook
     * @return \Illuminate\Http\Response
     */
    public function show(RentaBook $rentaBook)
    {
        $book = RentaBook::find($id);
        return response()->json(['status' => 'Success', 'data' => $RentaBook]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RentaBook  $rentaBook
     * @return \Illuminate\Http\Response
     */
    public function edit(RentaBook $rentaBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RentaBook  $rentaBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RentaBook $rentaBook)
    {
        $RentaBook = new RentaBook();
        $RentaBook->terms = $request->terms;
        $RentaBook->status = $request->status;
        $book->save();
 
        return response()->json(['status' => 'Success', 'message' => 'Book update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RentaBook  $rentaBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(RentaBook $rentaBook)
    {
        $RentaBook = RentaBook::find($id);
        $RentaBook->delete();
        return response()->json(['status' => 'Success', 'Message' => 'Renta Deleted']);
    }
}
