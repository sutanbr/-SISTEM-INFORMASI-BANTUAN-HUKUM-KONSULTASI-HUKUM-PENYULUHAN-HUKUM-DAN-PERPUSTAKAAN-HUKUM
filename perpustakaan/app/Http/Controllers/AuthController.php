<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('dashboard.login');
        
    }

    public function authenticate(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Mencari user berdasarkan email dan memeriksa apakah admin
    $user = User::where('email', $request->email)->first();

    if ($user && $user->role_id == 1 && Hash::check($request->password, $user->password)) {
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->route('admin/dashboard');
    }
    if ($user && $user->role_id == 3 && Hash::check($request->password, $user->password)) {
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->route('admin/superadmin');
    }

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('home');
    }

    return back()->withErrors([
        'email' => 'EMAIL ATAU PASSWORD SALAH.',
    ]);
}


    public function daftar()
    {
        return view('dashboard.daftar');
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'nik' => 'required|string|unique:users',
                'tanggal_lahir' => [
                'required',
                'date',
                'before_or_equal:' . date('Y-m-d'), 
            ],
                'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            ]);
    
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'nik' => $request->nik,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
            ]);
    
            return redirect()->route('login')->with('success', 'registrasi berhasil. silahkan untuk login dengan akun yang telah didaftarkan.');
    
        } catch (\Exception $e) {
            // Menampilkan pesan kesalahan di browser untuk debugging
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('home'); // Redirect ke halaman utama
    }
    public function showResetPasswordForm()
{
    return view('dashboard.reset-password');
}

public function resetPassword(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users,email',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = User::where('email', $request->email)->first();

    if ($user) {
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'Password berhasil direset. Silakan login dengan password baru.');
    }

    return back()->withErrors(['email' => 'Email tidak ditemukan.']);
}

}    

