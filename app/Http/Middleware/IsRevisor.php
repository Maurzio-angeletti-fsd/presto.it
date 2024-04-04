<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsRevisor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->is_revisor){
            return $next($request);

        }
        return redirect('inserisci_annuncio')->with('access.denied', 'Attenzione! Solo i revisori possono accedere a questa sezione');
    }
    // ['message' => 'Attenzione! Solo i revisori possono accedere a questa sezione']

    // 'access.denied', 'Attenzione! Solo i revisori possono accedere a questa sezione'

}
