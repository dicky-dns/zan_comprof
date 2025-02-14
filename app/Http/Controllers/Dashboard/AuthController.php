<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard_pesan');
        } else {
            return view('auth.login');
        }
    }

    public function processlogin(Request $request)
    {
        if (
            isset(
                ($m_user = (object) config(
                    'security.adminuser.'.$request->email,
                ))->email,
            )
        ) {
            if (Hash::check($request->password, $m_user->password)) {
                session(['authenticated' => true]);
                session(['user' => $m_user]);

                return redirect()->route('dashboard_pesan');
            }

            return redirect(route('login'))->with('error', 'Email atau password salah');
        } else {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    session(['authenticated' => true]);
                    session(['user' => $user]);

                    return redirect()->route('dashboard_pesan');
                }

                return redirect(route('login'))->with('error', 'Email atau password salah');
            } else {
                return redirect(route('login'))->with('error', 'Email atau password salah');
            }
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect()->route('login');
    }
}
