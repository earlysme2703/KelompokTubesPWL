<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|confirmed|min:8',
        'role' => 'required|in:Admin,Kasir,Supervisor,Manajer,Gudang', // Validasi role
    ]);

    // Simpan user ke database
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'role' => $request->role, 
        'password' => Hash::make($request->password),

    ]);

    // Login otomatis setelah registrasi
    Auth::login($user);

    // Redirect berdasarkan role
    return $this->redirectByRole($user);
}

protected function redirectByRole($user)
{
    if ($user->role === 'Admin') {
        return redirect()->route('dashboard.admin');
    } elseif ($user->role === 'Kasir') {
        return redirect()->route('dashboard.kasir');
    } elseif ($user->role === 'Supervisor') {
        return redirect()->route('dashboard.supervisor');
    } elseif ($user->role === 'Manajer') {
        return redirect()->route('dashboard.manajer');
    } elseif ($user->role === 'Gudang') {
        return redirect()->route('dashboard.gudang');
    }

    // Default redirect jika role tidak ditemukan
    return redirect()->route('dashboard');
}

}
