<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterValidationRequest;
use App\Models\Pengimpor;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengimporAuthController extends Controller
    {
    public function indexAuth()
        {
        return view('auth.auth-pengimpor');
        }

    public function storeRegister( RegisterValidationRequest $request )
        {
        $validatedRequest = $request->validated();

        Pengimpor::create([
            'password' => Hash::make($request->password),
            ...$validatedRequest
        ]);

        return redirect('auth')->with('status', 'Berhasil Daftar! silahkan login.');
        }

    public function storeLogin( Request $request )
        {
        $credentials = $request->validate(['username' => 'required|exists:pengimpor', 'password' => 'required']);

        if ( ! Auth::guard('pengimpor')->attempt($credentials) ) {
            return back()->withErrors([
                'username' => 'Kredensial yang diberikan tidak cocok.',
            ])->onlyInput('username');
            }

        $request->session()->regenerate();
        return redirect()->intended('dashboard');
        }

    public function logout( Request $request )
        {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('auth');
        }
    }
