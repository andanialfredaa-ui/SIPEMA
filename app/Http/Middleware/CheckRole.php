<?php
namespace App\Http\Middleware;
use Closure;
class CheckRole {public function handle($request, Closure $next, ...$roles){abort_unless($request->user() && $request->user()->status_akun==='aktif' && in_array($request->user()->role->nama,$roles),403);return $next($request);}}
