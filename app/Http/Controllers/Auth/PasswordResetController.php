<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pengimpor;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
    {
    public function indexForgot()
        {
        return view('auth.forgot-password');
        }
    public function indexReset( Request $request, string $token )
        {
        return view('auth.reset-password', ['token' => $token, 'email' => $request->email]);
        }
    public function storeForgot( Request $request )
        {
        $request->validate(['email' => 'required|email']);
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
        }

    public function storeReset( Request $request )
        {
        $request->validate([
            'token'    => 'required',
            'email'    => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (Pengimpor $pengimpor, string $password) {
                $pengimpor->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $pengimpor->save();

                event(new PasswordReset($pengimpor));
                }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('auth')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
        }
    }
