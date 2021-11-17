<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\LibraryMember;
use app\Models\book;

class bookRenta extends Model
{
    use HasFactory;

    public function LibraryMember()
    {
        return $this->belongTo(LibraryMember::class);
    }

public function Library()
{
    return $this->belongTo(Library::class);
}

public function book()
{
    return $this->hasMany(book::class);
}
}
