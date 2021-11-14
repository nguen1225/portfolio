<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function form()
    {
        return view('sign_up.form');
    }

    public function signUp(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if($request->input('password') === $request->input('reconfirmation_password')){
            $user->password = password_hash($request->input('password'), PASSWORD_BCRYPT);
            $user->save();
            return view('sign_up.completed');
        }
        session()->flash('flash_message', '入力されたパスワードに相違があります。再度入力してください。');
        return redirect('sign_up');
    }
}
