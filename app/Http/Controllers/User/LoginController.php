<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $remember_me = $request->input('remember_me');

        if (!auth()->attempt(['email' => $email, 'password' => $password], $remember_me)) {
            return redirect()->back()->with('invalid', 'Неверный логин или пароль');
        }

        return redirect()->route('home')->with(['success' => 'Успешный вход']);
    }
}
