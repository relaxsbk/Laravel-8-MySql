<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

//Если смотрят по комитам, то это пока заглушка :)
    public function products()
    {
        dd('no');
    }
}
