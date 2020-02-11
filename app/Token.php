<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Token extends Model
{
    /**
     * Return a unique personnal access token.
     */
    public static function generate(): string
    {
        do {
            $api_token = Str::random(10);
        } while (User::where('api_token', $api_token)->exists());

        return $api_token;
    }
}
