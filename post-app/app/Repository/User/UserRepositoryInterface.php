<?php

namespace App\Repository\User;

interface UserRepositoryInterface
{
    public function getByUsername(string $username);
}
