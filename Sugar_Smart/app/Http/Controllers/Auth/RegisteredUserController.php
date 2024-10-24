<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Email; // Import model Email
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Cek apakah email terdaftar di tabel emails
        $emailExists = Email::where('email', $request->email)->exists();

        if (!$emailExists) {
            // Jika email tidak terdaftar di tabel emails, kirim pesan error
            return back()->withErrors(['email' => 'Email is not registered. Please register the email first.'])->withInput();
        }

        // Cek apakah email sudah ada di tabel users
        $userExists = User::where('email', $request->email)->exists();

        if ($userExists) {
            // Jika email sudah ada di tabel users, kirim pesan error bahwa email sudah memiliki akun
            return back()->withErrors(['email' => 'This email already has an account.'])->withInput();
        }

        // Jika email ada di tabel emails tapi belum ada di tabel users, lanjutkan untuk mendaftar
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        //Alihkan pengguna ke halaman login 
        return redirect()->route('login')->with('status', 'Registration successful! Please log in.');
    }


}
