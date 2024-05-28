<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DataMaster\DataMasterController;
use App\Models\HS;
use App\Models\Negara;
use App\Models\Pengimpor;
use App\Models\Valuta;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
    {
    public function index( Request $request ) : View
        {
        if ( Auth::guard('petugas')->check() ) {
            $search     = $request->query('search');
            $pengimpors = Pengimpor::when($search, function ($query) use ($search) {
                return $query->where('nama', 'like', '%' . $search . '%');
                })->orderBy('nama', 'asc')->paginate(10);
            return view('dashboard-petugas', compact('pengimpors'));
            }

        // not petugas, so pengimpor view returned
        return view('dashboard-pengimpor');
        }
    public function settingsIndex() : View
        {

        return view('settings');
        }

    public function dataMasterIndex() : View
        {
        $dataMasters = DataMasterController::getAllDataMasterCount();
        return view('data-master', compact('dataMasters'));
        }

    }
