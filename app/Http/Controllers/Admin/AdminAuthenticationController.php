<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HandleLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticationController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }//end method
    public function handleLogin(HandleLoginRequest $request)
    {
        $request->authenticate();

        return redirect()->route('admin.dashboard');
    }//end method

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
