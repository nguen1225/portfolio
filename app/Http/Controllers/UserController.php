<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\SignUpRequest;
use App\UseCases\User\UserSignUseCase;

class UserController extends Controller
{
    private UserSignUseCase $userSignUseCase;

    public function __construct(UserSignUseCase $userSignUseCase)
    {
        $this->userSignUseCase = $userSignUseCase;
    }

    public function form()
    {
        return view('sign_up.form');
    }

    public function signUp(SignUpRequest $request)
    {
        return $this->userSignUseCase->execute($request);
    }
}
