<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request )
    {
        $jadwal_nampon = \App\Admin::all();
        return view('user.home.index' ,compact('jadwal_nampon'));
    }

    public function Sejarah()
    {
        return view('user..home.sejarah');
    }

    public function Galeri()
    {

        $gambar = \App\Image::all();
        return view('user.home.galeri',compact('gambar'));
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

    public function Manfaat()
    {
        return view ('user.home.manfaat');
    }

    public function Tujuan()
    {
        return view ('user.home.tujuan');
    }
}
