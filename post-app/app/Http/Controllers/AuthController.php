<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Http\Requests\LoginRequest;
use App\Repository\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(LoginRequest $request)
    {
        $user = $this->userRepository->getByUsername($request->get('username'));
        if ($user) {
            if (Hash::check($request->get('password'), $user->password)) {
                auth()->login($user);
                return ResponseHelper::make($user, 'login successfully');
            }
        }

        return ResponseHelper::notAuthenticated();
    }

    public function logout()
    {
        auth()->logout();
        return ResponseHelper::make(null, 'logout successfully');
    }
}
