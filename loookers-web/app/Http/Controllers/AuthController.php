<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     /**
     * Menampilkan halaman login.
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Proses login.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => [
                'required',
                'string',
            ],

            'password' => [
                'required',
                'string',
            ],
        ], [
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Coba Login
        |--------------------------------------------------------------------------
        */

        if (!Auth::attempt($credentials, $request->boolean('remember'))) {

            return back()
                ->withErrors([
                    'username' => 'Username atau password salah.',
                ])
                ->withInput(
                    $request->only('username')
                );
        }


        /*
        |--------------------------------------------------------------------------
        | Regenerate Session
        |--------------------------------------------------------------------------
        |
        | Menghindari session fixation setelah login berhasil.
        |
        */

        $request->session()->regenerate();


        /*
        |--------------------------------------------------------------------------
        | Ambil User yang sedang login
        |--------------------------------------------------------------------------
        */

        $user = Auth::user();


        /*
        |--------------------------------------------------------------------------
        | Cek Role HR
        |--------------------------------------------------------------------------
        */

        if ((int) $user->id_admin > 0) {

            return redirect()->intended(
                route('hr.dashboard')
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Cek Role Pelamar
        |--------------------------------------------------------------------------
        */

        if ((int) $user->id_pelamar > 0) {

            return redirect()->intended(
                route('pelamar.dashboard')
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Role Tidak Valid
        |--------------------------------------------------------------------------
        */

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->withErrors([
                'username' => 'Akun belum memiliki role yang valid.',
            ]);
    }


    /**
     * Proses logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with(
                'success',
                'Anda berhasil logout.'
            );
    }

}
