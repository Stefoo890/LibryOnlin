<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\ReservationBook;
use app\Models\book;
use app\Models\LibraryMember;
use app\Models\Library;

class ReservationBook extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->belongtoMany(Book::class);
    }

    public function LibraryMember()
    {
        return $this->belongTo(LibraryMember::class);
    }

    public function Library()
    {
        return $this->belongTo(Library::class);
    }
}


