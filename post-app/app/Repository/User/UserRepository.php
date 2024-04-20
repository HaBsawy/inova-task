<?php

namespace App\Repository\User;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{

    public function getByUsername(string $username)
    {
        return User::query()->where('username', $username)->first();
    }
}
