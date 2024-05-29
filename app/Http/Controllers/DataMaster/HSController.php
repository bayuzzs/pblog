<?php

namespace App\Http\Controllers\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\DataMaster\HS;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class HSController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request ) : View
        {
        $search = $request->query('search');
        $HSs    = HS::when($search, function ($query) use ($search) {
            return $query->where('kodeHS', 'like', '%' . $search . '%');
            })->orderBy('kodeHS', 'asc')->paginate(10);
        return view('data-master.hs', compact('HSs'));
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
    public function store( Request $request )
        {
        //
        }

    /**
     * Display the specified resource.
     */
    public function show( HS $hS )
        {
        //
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( HS $hS )
        {
        //
        }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, HS $hS )
        {
        //
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request )
        {
        $kodeHS = $request->kodeHS;

        if ( ! $kodeHS ) {
            return redirect()->back()->withErrors(['kodeHS', 'Gagal Hapus Data HS']);
            }

        HS::destroy($kodeHS);
        return redirect(route('data-master.hs'))->with('success', 'Data HS berhasil di hapus');
        }
    }
