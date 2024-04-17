<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengimporAuthController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function indexAuth()
        {
        return view('auth.auth-pengimpor');
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
        {
        //
        }

    /**
     * Store a newly created resource in storage.
     */
    public function storeLogin( Request $request )
        {
        $credentials = $request->validate(['username' => 'required|exists:pengimpor', 'password' => 'required']);

        if ( ! Auth::guard('pengimpor')->attempt($credentials) ) {
            return back()->withErrors([
                'username' => 'Kredensial yang diberikan tidak cocok.',
            ])->onlyInput('email');
            }
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
        }

    /**
     * Display the specified resource.
     */
    public function show( string $id )
        {
        //
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id )
        {
        //
        }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id )
        {
        //
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id )
        {
        //
        }
    }
