<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProfileController extends Controller
{
    // Fungsi untuk menampilkan profil
    public function showProfile()
    {
        // Ambil data pengguna yang sedang login
        $user = auth()->user();

        // Kirim data profil pengguna ke halaman Vue menggunakan Inertia
        return Inertia::render('ProfilePage', [
            'userProfile' => $user,
        ]);
    }
}

