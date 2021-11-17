<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEmployedRequest;
use App\Http\Resources\CreateEmployedResponse;
use App\Models\Employed;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;
use App\Http\Middleware\Administrator;
class Employed extends Controller


//Employed create Administrator

{       public function __construct()
    {
        $this->middleware([Administrator::class]);
    }


    //create Employed,has administrator access


     //Construktor
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
        $employed = new employed();
        $employed->name = $request->name;
        $employed->username = $request->username;
        $employed->email = $request->email;
        $emloyed->password = $request->password;
        $employed->save();
 
        return response()->json(['status' => 'Success', 'message' => 'employed Saved']);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return RentaBookResource::collection();
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
        $employed = new employed();
        $employed->name = $request->name;
        $employed->username = $request->username;
        $employed->email = $request->email;
        $emloyed->password = $request->password;
        $employed->save();
 
        return response()->json(['status' => 'Success', 'message' => 'employed Saved']);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Employed::find($id);
        $book->delete();
        return response()->json(['status' => 'Success', 'Message' => 'employed Deleted']);
    }
}