<?php

namespace App\Http\Controllers;
use \App\Admin;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }


    public function jadwal(Request $request )
    {
        $jadwal_nampon = \App\Admin::all();
        return view('admin.jadwal' ,compact('jadwal_nampon'));
    }

    public function create(Request $request)
    {
        Admin::Create($request->all());
        Alert::success('Berhasil', 'Jadwal Sudah Ditambahkan');
        return redirect('/admin/jadwal');

}
    public function edit($id)
    {
        $jadwal = \App\Admin::find($id);

        return view('admin.edit', compact('jadwal'));
    }

    public function update(Request $request, $id)

    {
        $update = \App\Admin::find($id);
        $update->update($request->all());
        Alert::success('Berhasil', 'Jadwal Sudah Diubah');
        return redirect('/admin/jadwal');

    }

    public function delete($id)

    {
        $delete = \App\Admin::find($id);
        $delete->delete();
        Alert::success('Berhasil', 'Jadwal Sudah Dihapus');
        return redirect('/admin/jadwal');

}





}
