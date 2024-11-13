<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;

class CustomAuthenticationController extends Controller {

    public function index() {
        return view('auth.login');
    }

    public function login() {

        if (Auth::check()) {
            return redirect(route('User.home.index'));
        }
        return view("authentication::auth.login");
    }

    public function authenticate(Request $request) {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $user = User::where('email', $request->email)->first();
  

        if ($user) {
            if ($user->hasRole('Inactive Employee')) {
                return back()->withErrors([
                            'email' => 'You have been marked as an inactive employee. Please contact administrator to activate it.',
                        ])->onlyInput('email');
            }
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('dashboard-analytics');
//                Route::get('/', [Analytics::class, 'index'])->name('');
            }
        }
        return back()->withErrors(['password_invalid' => 'The provided credentials do not match our records.'])->onlyInput('email');
    }

    public function user() {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }

    public function userlogout() {
        Auth::logout();
        Session::flush();
        return redirect(route('login'));
    }
}
