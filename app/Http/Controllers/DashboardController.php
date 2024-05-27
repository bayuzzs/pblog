<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
    {
    public function index() : View
        {
        if ( Auth::guard('petugas')->check() ) {
            // Thats mean petugas logged in
            return view('dashboard-petugas');
            }

        // not petugas, so pengimpor view returned
        return view('dashboard-pengimpor');
        }
    public function settings() : View
        {

        return view('settings');
        }
    }
