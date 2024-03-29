<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use http\Client\Curl\User;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('admin.register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required', 'string'],
            'email'=>['required', 'string', 'email', 'unique:users'],
            'password'=>['required', 'confirmed', 'min:8']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        Auth::login($user);

        return redirect()->route('posts.index');
    }
}
