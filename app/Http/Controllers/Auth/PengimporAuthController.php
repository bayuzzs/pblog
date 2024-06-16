<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterValidationRequest;
use App\Models\Pengimpor;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PengimporAuthController extends Controller
    {
    public function indexAuth()
        {
        return view('auth.auth-pengimpor');
        }

    public function storeRegister( RegisterValidationRequest $request )
        {
        $validatedRequest = $request->validated();

        try {
            Pengimpor::create([
                'password' => Hash::make($request->password),
                ...$validatedRequest
            ]);

            return redirect('auth')->with('status', 'Berhasil Daftar! silahkan login.');

            } catch (\Exception $th) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan: ' . $th->getMessage());
            }

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
        return redirect()->intended(route('dashboard'));
        }
    public function storeChangePassword( Request $request )
        {
        $request->validate(
            [
                'oldPassword' => 'required|current_password',
                'newPassword' => 'required|confirmed|min:8'
            ],
            [
                'oldPassword.required'         => 'Sandi lama harus diisi.',
                'newPassword.required'         => 'Sandi baru harus diisi.',
                'oldPassword.current_password' => 'Sandi lama yang diberikan tidak cocok.',
                'newPassword.confirmed'        => 'Konfirmasi Sandi tidak cocok.',
                'newPassword.min'              => 'Sandi minimal 8 karakter.'
            ]
        );
        $user = Pengimpor::where('npwp', Auth::guard('pengimpor')->user()->npwp)->first();

        if ( ! Hash::check($request->oldPassword, $user->password) ) {
            return back()->withErrors([
                'oldPassword' => 'Password lama yang diberikan tidak cocok.',
            ]);
            }

        $user->update(['password' => Hash::make($request->newPassword)]);
        return redirect(route('settings'))->with('success-reset-password', 'Kata Sandi Berhasil Diubah');
        }
    public function updateProfile( Request $request )
        {
        $request->validate(['userProfile' => 'required|image|mimes:jpeg,jpg,png|max:1024'], [
            'userProfile.required' => 'Profil harus diisi.',
            'userProfile.image'    => 'Profil harus berupa gambar.',
            'userProfile.mimes'    => 'Profil harus berupa format jpeg, jpg, png.',
            'userProfile.max'      => 'Profil maksimal 1 MB.',
        ]);

        if ( ! empty(Auth::guard('pengimpor')->user()->urlProfile) && Storage::exists('public/avatars/' . Auth::guard('pengimpor')->user()->urlProfile) ) {
            Storage::delete('public/avatars/' . Auth::guard('pengimpor')->user()->urlProfile);
            }

        $stored_file = $request->file('userProfile')->store('public/avatars');
        $nama        = pathinfo($stored_file)['basename'];

        $user = Auth::guard('pengimpor')->user();
        $user->update(['urlProfile' => $nama]);
        return redirect(route('settings'))->with('success-update-profile', 'Profil Berhasil Diubah');
        }

    public function logout( Request $request )
        {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('auth');
        }
    }
