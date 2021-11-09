<?php

namespace App\Http\Controllers;

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
            $generete_url = URL::temporarySignedRoute(
                'password.edit', now()->addMinutes(60), ['id' => $get_user->id]
            );
            Mail::to($get_email)->send(new ChangePasswordEmail($generete_url));

            return redirect('password/send-completely');
        }

        session()->flash('flash_message', '入力に誤り、もしくは登録されていないメールアドレスです。');
        return view('password.send-email');
    }

    public function sendCompletely()
    {
        return view('password.send-completely');
    }
}
