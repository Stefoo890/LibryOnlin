<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\book;
use app\Models\LibraryMember;
use app\Models\requestbookRenta;
use app\Models\bookRenta;
use app\Models\ReservationBook;

class Librarian extends Model
{
    use HasFactory;

    const DEFAULT = 1;
    const Librarian = 3;


    public function Librarian(): bool
    {
        return $this->type() === self::Librarian;
    }



public function book()
{ 

    return $this->belongToMany(book::class);

    }

public function LibraryMember() 
{
    return $this->hasMany(LibraryMember::class);
}

public function requestbookRenta()
{
    return $this->hasMany(requestbookRenta::class);
}

public function RentaBook()
{
    return $this->hasMany(bookRenta::class);
}

public function ReservationBook()
{
    return $this->hasMany(ReservationBook::class);
}

}