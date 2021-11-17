<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Librarian;
use Illuminate\Auth\Access\HandlesAuthorization;

class Library
{
    const Librarian = 'librarian';
    const BAN = 'ban';


    public function admin(User $user): bool
    {
        return $user->Librarian();
    }

    public function ban(Library $librarian, User $User): bool
    {
        return ($user->Librarian() && ! $subject->user()) || $subject->LibraryMember;
            
    }

}

