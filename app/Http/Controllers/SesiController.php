<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    //
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email Wajib Diisi.',
                'password.required' => 'Password Wajib Diisi.'
            ]
        );

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infoLogin)) {
            if (Auth::user()->role == 'operator') {
                return redirect('admin/operator');
            } else if (Auth::user()->role == 'keuangan') {
                return redirect('admin/keuangan');
            } else if (Auth::user()->role == 'marketing') {
                return redirect('admin/marketing');
            }
        } else {
            return redirect('login')->withErrors('Kredensial tidak ditemukan')->withInput();
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
