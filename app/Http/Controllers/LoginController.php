<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function logincheck(Request $request)
    {
        $inputName = $request->input('name');
        $inputPassword = $request->input('password');
        $user = User::where('name', $inputName)->first();

        if ($user === null) {
            session()->flash('flash_message', '入力されたIDやパスワードが正しくありません。確認してからやりなおしてください。');
            return redirect()->route('login');
        }

        if (password_verify($inputPassword, $user->password)) {
            session()->put('id', $user->id);
            return redirect('home');
        }

        session()->flash('flash_message', '入力されたIDやパスワードが正しくありません。確認してからやりなおしてください。');
        return redirect()->route('login');
    }

    public function logout()
    {
        session()->forget('id');
        session()->flash('logout', 'ログアウトしました。');
        return redirect()->route('login');
    }
}
