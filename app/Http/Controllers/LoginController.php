<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\UseCases\Login\LoginCheckUseCase;

class LoginController extends Controller
{
    private LoginCheckUseCase $loginCheckUseCase;

    public function __construct(LoginCheckUseCase $loginCheckUseCase)
    {
        $this->loginCheckUseCase = $loginCheckUseCase;
    }

    public function login()
    {
        return view('login');
    }

    public function loginCheck(Request $request)
    {
        return $this->loginCheckUseCase->execute($request);
    }

    public function logout()
    {
        session()->forget('id');
        session()->flash('logout', 'ログアウトしました。');
        return redirect()->route('login');
    }
}
