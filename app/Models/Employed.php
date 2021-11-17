<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employed extends Model
{
    use HasFactory;

    public function Employed()
    {
        return $this->belongTo(Employed::class);
    }
}
