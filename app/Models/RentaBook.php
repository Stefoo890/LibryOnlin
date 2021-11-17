<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LibraryMember;

class RentaBook extends Model
{
    use HasFactory;

    public function LibraryMember()
    { 
        return $this->belongTo(RentaBook::class);
    }
}
