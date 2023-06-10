<?php

namespace App\Helpers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Str;

class Users
{
    function generateUniqueCode($length = 5)
    {
        $member_code = Str::random($length);

        while (User::where('user_code', $member_code)->exists()) {
            $member_code = Str::random($length);
        }

        return $member_code;
    }
}