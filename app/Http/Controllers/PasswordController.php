<?php

namespace App\Http\Controllers;

use App\Http\Requests\Password\ChangePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ChangePasswordEmail;
use Illuminate\Support\Facades\URL;

class PasswordController extends Controller
{
    public function sendEmailForm()
    {
        return view('password.send-email');
    }

    public function generateUrl(Request $request)
    {
        $get_email = $request->input('email');
        $get_user = User::query()->where('email', $get_email)->first();

        if ($get_user) {
            $generate_url = URL::temporarySignedRoute(
                'password.edit', now()->addMinutes(60), ['id' => $get_user->id]
            );
            Mail::to($get_email)->send(new ChangePasswordEmail($generate_url));

            return redirect('password/send-completely');
        }

        session()->flash('flash_message', '入力に誤り、もしくは登録されていないメールアドレスです。');
        return view('password.send-email');
    }

    public function sendCompletely()
    {
        return view('password.send-completely');
    }

    public function edit(Request $request)
    {
        $get_user = User::query()->find($request->id);
        if (!$request->hasValidSignature()) {
            return redirect()->route('login');
        }

        session()->put('current_url', $request->getUri());
        return view('password.edit')->with('get_user', $get_user);
    }

    public function update(ChangePasswordRequest $request)
    {
        $user = User::query()->find($request->id);
        $new_password = $request->input('change_password');
        $reconfirmation_password = $request->input('reconfirmation_password');

        $validated = $request->validated();

        if ($new_password === $reconfirmation_password) {
            $user->password = password_hash($validated["change_password"], PASSWORD_BCRYPT);
            $user->save();

            return view('password.completed');
        }

        session()->flash('flash_message', '入力されたパスワードに相違があります。<br>再度入力してください。');
        return redirect()->to(session()->get('current_url'))->with('get_user', $user);
    }

    public function completed()
    {
        return view('password.completed');
    }
}
