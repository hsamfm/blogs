<?php

namespace App\Observers;

use App\Token;
use App\User;

class UserObserver
{
    /**
     * Listen to the User creating event.
     */
    public function creating(User $user): void
    {
        $user->registered_at = now();
        $user->api_token = Token::generate();
    }
}
