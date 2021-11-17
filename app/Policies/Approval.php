<?php

namespace App\Policies;

use app\Models\User;
use app\Models\Librarian;

final class UserPolicy
{
    const ADMIN = 'librarian';
    const LibraryMember = 'LibraryMember';
    const BAN = 'ban';
    const DELETE = 'delete';

    public function admin(User $user): bool
    {
        return $user->Librarian() || $user->LibraryMember();
    }

    public function ban(Library $librarian, User $User): bool
    {
        return ($user->Librarian() && ! $subject->user()) ||
            ($user->Librarian() && ! $subject->user() );
    }

}