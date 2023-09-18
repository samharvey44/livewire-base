<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        // Allow GET logouts for testing purposes, but not in production.
        abort_if($request->isMethod('GET') && App::isProduction(), 405);

        app(AuthService::class)->logout();

        return redirect()->route('login');
    }
}
