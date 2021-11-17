<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Librarian;
use app\Models\Employed;

class administrator extends Model
{   use HasFactory;

    const DEFAULT = 1;
   const administrator = 2;


   public function Administrator(): bool
   {
       return $this->type() === self::Administrator;
   }
    use HasFactory;

    public function librarian()
     {
        return $this->hasMany(librarian::class);
    }

    public function Employed()
{
    return $this->hasMany(Employed::class);
}


}
