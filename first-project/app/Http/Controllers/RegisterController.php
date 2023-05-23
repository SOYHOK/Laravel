<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
            'repassword' => 'required|same:password',
        ]);

        return view('register');
    }
}
