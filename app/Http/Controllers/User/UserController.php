<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('User.Profile');
    }

    public function logout()
    {
        dd('logout');
    }
}
