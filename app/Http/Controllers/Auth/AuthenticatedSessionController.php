<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        if(Auth::user()->getRoleNames()->first() == 'admin'){

            return redirect()->route('dashboard');
        }elseif(Auth::user()->getRoleNames()->first() == 'manager'){
            return redirect()->route('dashboard');
            
        }elseif(Auth::user()->getRoleNames()->first() == 'editor'){
            return redirect()->route('dashboard');
            
        }elseif(Auth::user()->getRoleNames()->first() == 'seller'){
            return redirect()->route('dashboard');
            
        }else{
            return redirect()->route('profile.create');

        }
        // return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
