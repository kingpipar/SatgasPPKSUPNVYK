<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SimpleAdminAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->get('admin_authenticated', false)) {
            return redirect()->route('admin.login')
                ->with('warning', 'Silakan masukkan kata sandi administrator untuk mengakses halaman kelola galeri.');
        }

        return $next($request);
    }
}
