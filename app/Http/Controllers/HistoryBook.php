<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Resources\RequestRentABookResource;
use App\Models\LibraryMember;
use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;
use App\Http\Middleware\libeary;
use App\Http\Middleware\Administrator;

class HistoryBook extends Controller
{
    public function __construct()
    {
        $this->middleware([Approval::class, Administrator::class]);
    }

//History Book

    public function viewHistory()
    {
        return RequestRentABookResource::collection()->paginate($request->input('limit', 20));
    
    }
}
