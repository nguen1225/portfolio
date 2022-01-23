<?php

namespace App\Models\Repositories;

use App\Models\User;
use App\Http\Requests\User\SignUpRequest;

class UserRepository
{
    public function signUp(SignUpRequest $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $validated = $request->validated();

        if($request->input('password') === $request->input('reconfirmation_password')){
            $user->password = password_hash($validated["password"], PASSWORD_BCRYPT);
            $user->save();
            return view('sign_up.completed');
        }

        session()->flash('flash_message', '入力されたパスワードに相違があります。<br> 再度入力してください。');
        return redirect('sign_up');
    }
}
