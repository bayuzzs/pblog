<?php

namespace App\Http\Middleware;

use App\Models\DokumenImpor\DokumenImpor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DokumenBerwujud
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
        if ( ! $dokumenImpor->isBerwujud ) {
            return redirect(route('dokumen-impor'));
            }
        return $next($request);
        }
    }
