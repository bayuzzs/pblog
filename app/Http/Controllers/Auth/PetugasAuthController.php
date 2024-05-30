<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class PetugasAuthController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function indexAuth()
        {
        return view('auth.auth-petugas');
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
        $credentials = $request->validate(['username' => 'required|exists:petugas', 'password' => 'required']);

        if ( ! Auth::guard('petugas')->attempt($credentials) ) {
            return back()->withErrors([
                'username' => 'Kredensial yang diberikan tidak cocok.',
            ])->onlyInput('username');
            }

        $request->session()->regenerate();
        return redirect()->intended(route('dashboard'));
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
