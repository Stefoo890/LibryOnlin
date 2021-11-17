<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Http\Resources\ReservationBookResponse;
use App\Models\Library;
use App\Models\libraryMember;
use App\Models\ReservationBook;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;
use App\Http\Middleware\libeary;
use App\Http\Middleware\Administrator;


//create ReservationBook  (LibraryMember,Librarary and Administrator help form )

class ReservationBookController extends Controller
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
        return ReservationBook::collection();   //view collection ReservationBook
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
    public function store(Request $request)     //create $request for reservationBok
    {
        $ReservationBook = new ReservationBook();
        $RentaBook->terms = $request->terms;
        $book->save();
 
        return response()->json(['status' => 'Success', 'message' => 'Book Renta']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReservationBook  $reservationBook
     * @return \Illuminate\Http\Response
     */
    public function show(ReservationBook $reservationBook)   //show $reservaationBook
    {
        $ReservationBook= ReservationBook::find($id);
        return response()->json(['status' => 'Success', 'data' => $ReservationBook]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReservationBook  $reservationBook
     * @return \Illuminate\Http\Response
     */
    public function edit(ReservationBook $reservationBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReservationBook  $reservationBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReservationBook $reservationBook)   //update Reservation
    {
        $ReservationBook = new ReservationBook();
        $RentaBook->terms = $request->terms;
        $book->save();
 
        return response()->json(['status' => 'Success', 'message' => 'reservation update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReservationBook  $reservationBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReservationBook $reservationBook)    //delete request
    {
        $ReservationBook = ReservationBook::find($id);
        $ReservationBook->delete();
        return response()->json(['status' => 'Success', 'Message' => 'reservation Deleted']);
    }
    }
