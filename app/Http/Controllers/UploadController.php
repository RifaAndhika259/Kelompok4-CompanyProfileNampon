<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use \App\Image;
class UploadController extends Controller
{
    public function upload(){
        $gambar = Image::get();
        return view('admin.galeri',compact('gambar'));
    }

	public function proses_upload(Request $request){
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required',
            'tbt' => 'required',
        ]);

        $imageName = $request->file->getClientOriginalName() . '-' . time() . '.' . $request->file->extension();
        // menyimpan data file yang diupload ke variabel $file
        $request->file->move(public_path('data_file'), $imageName);

        Image::create([
            'file' => $imageName,
            'keterangan' => $request->keterangan,
            'tbt' => $request->tbt,
        ]);
        Alert::success('Berhasil', 'Gambar Berhasil Ditambah');

        return redirect()->back();
    }



    public function delete($id)

    {
        $delete = \App\Image::find($id);
        $delete->delete();
        Alert::success('Berhasil', 'Gambar Berhasil Dihapus');
        return redirect('/admin/upload');

}

}
