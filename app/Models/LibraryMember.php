<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Model\requestbookRenta;
use App\Models\Librarian;
use App\Models\bookRenta;
use app\Models\ReservationBook;


class LibraryMember extends Model
{
    use HasFactory;

     const DEFAULT = 1;
    const LibraryMember = 2;


    public function LibraryMember(): bool
    {
        return $this->type() === self::LibraryMember;
    }

    public function user()
    {
        return $this->hasMany(LibraryMember::class);
    }

    public function Book() 
    {
        return $this->belongToMany(Book::class);
    }



    public function bookRenta()
    {
        return $this->hasMany(bookRenta::class);
    }

    public function Librarian()
{
    return $this->belongTo(Librarian::class);
}

public function RentaBook() {
    return $this->hasMany(RentaBook::class);
}

public function reservationBook()
{
    return $this->hasMany(ReservationBook::class);
}


}
