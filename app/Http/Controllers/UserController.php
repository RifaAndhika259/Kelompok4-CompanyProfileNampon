<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index()
    {
        return view('user.home.index');
    }

    public function Sejarah()
    {
        return view('user..home.sejarah');
    }

    public function Galeri()
    {
        return view('user.home.galeri');
    }

    public function Page()
    {
        return view('user.page.welcome');
    }
    public function VM()
    {
        return view('user.page.vm');
    }
    public function Jurus()
    {
        return view('user.home.jurus');
    }
}
