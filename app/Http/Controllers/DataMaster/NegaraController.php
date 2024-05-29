<?php

namespace App\Http\Controllers\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\DataMaster\Negara;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NegaraController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index() : View
        {
        return view('data-master.negara');
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
    public function show( Negara $negara )
        {
        //
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Negara $negara )
        {
        //
        }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, Negara $negara )
        {
        //
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Negara $negara )
        {
        //
        }
    }
