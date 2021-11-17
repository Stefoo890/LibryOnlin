<?php

namespace App\Policies;

use app\Models\administrator;

use  app\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Library
{
    const Librarian = 'administrator';
    const BAN = 'ban';


    public function admin(User $user): bool
    {
        return $user->administrator();
    }

    public function ban(Library $librarian, User $User): bool
    {
        return ($user->administrator() && ! $subject->user()) ||
         $subject->administrator ;
            
    }

}
