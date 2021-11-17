<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Librarian;
use App\Models\bookRenta;
use App\Models\LibraryMember;
use App\Models\requestbookRenta;
use app\Models\ReservationBook;

class book extends Model
{
    use HasFactory;


    public function Librarian()
    { 

    return $this->belongToMany(Librarian::class);

    }

    public function bookRenta()
    {
        return $this->belongToMany(bookRenta::class);
    }

    public function LibraryMember() 
    {
        return $this->belongToMany(LibraryMember::class);
    }

    public function requestbookRenta()
    {
        return $this->belongToMany(requsetbookRenta::class);
    }

    public function book()
    {
        return $this->belongTo(book::class);
    }

    public function ReservationBook()
    {
        return  $this->belongToMany(ReservationBook::class);
    }
}
