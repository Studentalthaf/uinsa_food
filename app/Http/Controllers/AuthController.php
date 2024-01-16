<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\AuthMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;



class AuthController extends Controller
{
    function index(){
        return view('account/login');
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'wajib di isi',
            'password.required' => 'wajib di isi',
        ]);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->email_verified_at != null){
                if(Auth::user()->role ==='admin'){
                    return redirect()->route('admin')->with('success', 'Halo Admin', 'Anda berhasil Login');
                }else if(Auth::user()->role ==='user'){
                    return redirect()->route('user')->with('success', 'Anda berhasil Login');
                }
                
            }else {
                Auth::logout();
                return redirect()->route('auth')->withErrors('Akun Belum Aktif');

            }
        }else{ 
            return redirect()->route('auth')->withErrors('Email atau Sandi salah');
        }
    }
    function create(){
        return view('account/reg');
    }
    
    function register(Request $request){

        $str = Str::random(100);

        $request->validate([
            'nama_lengkap' => 'required|min:5',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6',
            'no_tlp' => 'required|min:11',
            'unit_kerja' => 'required|min:2',
        ], [
            'nama_lengkap.required' => 'Nama Lengkap wajib diisi',
            'nama_lengkap.min' => 'Nama Lengkap minimal harus 5 karakter',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal harus 6 karakter',
            'no_tlp.required' => 'Nomor Telepon wajib diisi',
            'no_tlp.min' => 'Nomor Telepon minimal harus 11 digit',
            'unit_kerja.required' => 'Unit Kerja wajib diisi',
            'unit_kerja.min' => 'Unit Kerja minimal harus 2 karakter',
        ]);
        $inforegister = [
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => $request->password,
            'no_tlp' => $request->no_tlp,
            'unit_kerja' => $request->unit_kerja,
            'verify_key' => $str
        ];

        User::create($inforegister);

        $details = [
            'nama_lengkap' => $inforegister['nama_lengkap'],
            'role' => 'user',
            'datetime'=> date('Y-m-d H:i:s'),
            'website' => 'register UINSA FOOD', 
            'url' => 'http://' . request()->getHttpHost() . "/" . "verify/" . $inforegister['verify_key'],
        ];
        
        Mail::to($inforegister['email'])->send(new AuthMail($details));

        return redirect()->route('auth')->with('success','Link Verification di Email');
    }
    function verify($verify_key) {
        $keyCheck = User::select('verify_key')
        ->where('verify_key', $verify_key)
        ->exists();

        if($keyCheck){
            $user = User::where('verify_key', $verify_key)->update(['email_verified_at' => date('Y-m-d H:i:s')]);
            return redirect()->route('auth')->with('success','Verified');
        }else{
            return redirect()->route('auth')->withErrors('gagal','Verified pastikan melakukan register')->withInput();
        }
    }
    function logout(){
        Auth::logout();
        return redirect('/');
    }

}

