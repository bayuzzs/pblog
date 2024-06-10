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
            $search                       = $request->query('search');
            $sortOption                   = $request->query('sortOption', 'nama_asc');
            list($filter, $sortDirection) = explode('_', $sortOption);

            $pengimpors = Pengimpor::query()
                ->when($search, function ($query) use ($search) {
                    $query->where('nama', 'like', '%' . $search . '%');
                    })
                ->orderBy($filter, $sortDirection)
                ->paginate(10);
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
