<?php

namespace App\Models\Repositories;

use App\Models\User;

class UserLoginRepository
{
    public function loginCheck($request)
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
}
