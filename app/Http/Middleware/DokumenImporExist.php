<?php

namespace App\Http\Middleware;

use App\Models\DokumenImpor\DokumenImpor;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class DokumenImporExist
    {
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle( Request $request, Closure $next ) : Response
        {
        $nomorAju     = $request->route('nomorAju');
        $dokumenImpor = DokumenImpor::where('nomorAju', $nomorAju)->first();

        // Jika data tidak ditemukan, redirect ke route('dokumen-impor')
        if ( ! $dokumenImpor ) {
            return redirect(route('dokumen-impor'))->with('error', 'Dokumen Impor Tidak Ditemukan');
            }

        if ( $dokumenImpor->npwp != auth()->user()->npwp ) {
            return redirect(route('dokumen-impor'))->with('error', 'Terjadi Kesalahan');
            }

        return $next($request);
        }
    }
