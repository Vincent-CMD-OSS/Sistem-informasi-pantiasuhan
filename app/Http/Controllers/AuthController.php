<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('admin.login.login');
    }
     // INI AKHIR DARI LOGIN

     public function login(Request $request)
     {
         $credentials = $request->validate([
             'email' => ['required', 'email'],
             'password' => ['required']
         ]);
 
         if (Auth::attempt($credentials)) {
             $request->session()->regenerate();
 
             return redirect()->intended('/dashboard'); // atau redirect sesuai role
         }
 
         return back()->with('error', 'Email atau password salah.');
     }


    public function dashboard()
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }
        return view('admin.pages.dashboard'); // atau sesuaikan path view-nya
    }



    // INI UNTUK REGISTER
    public function showRegisterForm()
    {
        return view('admin.register.register');
    }
    // INI AKHIR DARI REGISTER

    public function index() 
    {
        return view('user.pages.index');
    }

    public function organisation() 
    {
        return view('user.pages.organisation');
    }

    public function sejarah() 
    {
        return view('user.pages.sejarah');
    }

    public function pengenalan()
    {
        return view('user.pages.pengenalan');
    }



    public function kegiatan() {
        return view('admin.pages.kegiatan');
    }

    public function beranda() {
        return view('admin.pages.beranda');
    }
    
    public function profile() {
        return view('admin.pages.profile');
    }
    
    public function notifikasi() {
        return view('admin.pages.notifikasi');
    }

    public function kebutuhanPanti() {
        return view('admin.pages.kebutuhanPanti');
    }

    public function operasional() {
        return view('admin.pages.operasional');
    }
}
