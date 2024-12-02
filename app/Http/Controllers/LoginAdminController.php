<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    //
    public function index()
    {
        if (Auth::check() && Auth::user()->level === 'admin') {
            return redirect()->route('dashboard_admin');
        }
        
        return view('Auth.Admin.login');
    }

    //
    public function authenticate(Request $request)
    {
        //
        $aturan = [
            'email' => 'required',
            'password' => 'required'
        ];

        $dataLogin = $request->validate($aturan);

        if (Auth::attempt($dataLogin)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->route('dashboard_admin');
            }
            return redirect()->intended('/');
        }

        return back()->with('gagal', 'Login gagal, periksa Email dan Password Anda');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect(route('login-form'));
    }
}
