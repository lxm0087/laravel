<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Userpolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $currentUser, User $user){
        return $currentUser->id === $user->id;
    }

    public function delete(User $currentUser, User $user){
        return $currentUser->is_admin = 1 && $currentUser->id !== $user->id;
    }
}
