<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LibraryMember;
use App\Models\Library;

class requestbookRenta extends Model
{
    use HasFactory;


    public function Library()
    {
        return $this->belongTo(requetbookRenta::class);
    }

}
