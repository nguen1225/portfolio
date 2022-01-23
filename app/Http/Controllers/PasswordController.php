<?php

namespace App\Http\Controllers;

use App\Http\Requests\Password\ChangePasswordRequest;
use Illuminate\Http\Request;
use App\UseCases\Password\PasswordEditUseCase;
use App\UseCases\Password\PasswordGenerateUrlUseCase;
use App\UseCases\Password\PasswordUpdateUseCase;

class PasswordController extends Controller
{
    private PasswordGenerateUrlUseCase $passwordGenerateUrlUseCase;
    private PasswordEditUseCase $passwordEditUseCase;
    private PasswordUpdateUseCase $passwordUpdateUseCase;

    public function __construct(
        PasswordGenerateUrlUseCase $passwordGenerateUrlUseCase,
        PasswordEditUseCase $passwordEditUseCase,
        PasswordUpdateUseCase $passwordUpdateUseCase
    )
    {
        $this->passwordGenerateUrlUseCase = $passwordGenerateUrlUseCase;
        $this->passwordEditUseCase = $passwordEditUseCase;
        $this->passwordUpdateUseCase = $passwordUpdateUseCase;
    }

    public function sendEmailForm()
    {
        return view('password.send-email');
    }

    public function generateUrl(Request $request)
    {
        return $this->passwordGenerateUrlUseCase->execute($request);
    }

    public function sendCompletely()
    {
        return view('password.send-completely');
    }

    public function edit(Request $request)
    {
        return $this->passwordEditUseCase->execute($request);
    }

    public function update(ChangePasswordRequest $request)
    {
        return $this->passwordUpdateUseCase->execute($request);
    }

    public function completed()
    {
        return view('password.completed');
    }
}
