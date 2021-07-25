<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.index');
    }

    public function logincheck(Request $request)
    {
        $inputName = $request->input('name');
        $inputPassword = $request->input('password');
        $user = User::where('name', $inputName)->first();
        // dd($user);
        
        if ($user === null) {
            session()->flash('flash_message', '入力されたIDやパスワードが正しくありません。確認してからやりなおしてください。');
            return redirect('login');
        }

        if (password_verify($inputPassword, $user->password)) {
            session()->put('id', $user->id);
            return redirect()->route('home');
        }

        session()->flash('flash_message', '入力されたIDやパスワードが正しくありません。確認してからやりなおしてください。');
        return redirect('login');

    }
}
