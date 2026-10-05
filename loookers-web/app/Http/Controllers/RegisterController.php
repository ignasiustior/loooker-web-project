<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pelamar;
use App\Models\ProfilKandidat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => [
                'required',
                'string',
                'max:255',
                'unique:user,username',
            ],

            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
            ],

            'email' => [
                'required',
                'email',
                'max:100',
                'unique:pelamar,email',
            ],

            'bidang_kerja' => [
                'required',
                'string',
                'max:255',
            ],

            'nama_lengkap' => [
                'required',
                'string',
                'max:100',
            ],

            'nomor_telepon' => [
                'nullable',
                'string',
                'max:20',
            ],

            'url_github' => [
                'required',
                'url',
                'max:255',
            ],

            'username_github' => [
                'required',
                'string',
                'max:50',
                'unique:profil_kandidat,username_github',
            ],
        ], [
            'username.required' => 'Username wajib diisi.',
            'username.unique' => 'Username sudah digunakan.',

            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',

            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',

            'bidang_kerja.required' => 'Bidang kerja wajib diisi.',

            'nama_lengkap.required' => 'Nama lengkap wajib diisi.',

            'url_github.required' => 'URL GitHub wajib diisi.',
            'url_github.url' => 'URL GitHub tidak valid.',

            'username_github.required' => 'Username GitHub wajib diisi.',
            'username_github.unique' => 'Username GitHub sudah digunakan.',
        ]);

        DB::transaction(function () use ($validated) {

            // 1. Membuat data pelamar
            $pelamar = Pelamar::create([
                'email' => $validated['email'],
                'bidang_kerja' => $validated['bidang_kerja'],
            ]);

            // 2. Membuat profil kandidat
            ProfilKandidat::create([
                'id_pelamar' => $pelamar->id_pelamar,

                // Sementara karena kolom ini NOT NULL
                'photo_kandidat' => '',

                'nama_lengkap' => $validated['nama_lengkap'],
                'nomor_telepon' => $validated['nomor_telepon'] ?? null,
                'url_github' => $validated['url_github'],
                'username_github' => $validated['username_github'],
            ]);

            // 3. Membuat akun user
            User::create([
                'username' => $validated['username'],

                // Password di-hash menggunakan algoritma hashing Laravel
                'password' => Hash::make($validated['password']),

                // Pelamar bukan HR/Admin
                'id_admin' => 0,

                // ID dari tabel pelamar yang baru dibuat
                'id_pelamar' => $pelamar->id_pelamar,
            ]);
        });

        return redirect()
            ->route('login')
            ->with(
                'success',
                'Registrasi berhasil. Silakan login menggunakan akun Anda.'
            );
    }
}
