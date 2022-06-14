<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller
{


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function index()
    {

        if (Auth::check()) {
            return redirect()->route('dashboard.index');
        }
        return view('auth.login');
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }else{
            $user = User::where('username',$request->get('username'))->first();
            if($user){
                // cek
                if(Hash::check($request->get('password'), $user->password)){
                    Auth::login($user);

                    return redirect()->route('dashboard.index');
                }else{
                    return redirect()->back()->withErrors("username atau password salah");
                }
            }else{
                return redirect()->back()->withErrors("username atau password salah");
            }
        }
    }


    public function logout(Request $request)
    {

        Auth::guard('web')->logout();
        session()->flush();

        return redirect('/login')
        ->with('alert-info', 'Anda telah keluar, Sampai ketemu lagi!');
    }
}
