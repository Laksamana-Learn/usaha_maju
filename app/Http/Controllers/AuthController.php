<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function viewLogin() {
        return view('login');
    }

    function submitLogin(Request $request) {
        $data = $request->only('username', 'password');

        if(Auth::guard('pengguna')->attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('home');
        }else {
            return redirect()->back()->with('gagal', 'Username atau Password salah');
        };
    }



    // REGISTRATION PAGE
    function viewRegister() {
        return view('register');
    }

    function submitRegister(Request $request) {
        $user = new Pengguna();

        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->wa = $request->whatsapp;
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect()->route('login');
    }


    // LOGOUT
    function logout() {
        Auth::guard('pengguna')->logout();
        return redirect()->route('login');
    }


    // SHOPPING
    function shop(Request $request) {
        $products = Product::all();

    return view('shop', ['products'=>$products]);
    }
}
