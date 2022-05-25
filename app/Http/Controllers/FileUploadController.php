<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index()
    {
        return view('upload.form');
    }
    public function prosesUpload(Request $request)
    {
        // dd($request->berkas);

    //   if ($request->hasFile('berkas')) {
    //     echo "Nama File :", $request->berkas->getClientOriginalName();
    //     echo "<br>";
    //     echo "Tipe File :",$request->berkas->getMimeType();
    //     echo "<br>";
    //     echo "Ekstensi  :",$request->berkas->extension();
    //     echo "<br>";
    //     echo "Ekstensiasli  :",$request->berkas->getClientOriginalExtension();
    //     echo "<br>";
    //     echo "Ukuran Asli   :",$request->berkas->getSize();
    //     echo "<br>";
    //     echo "Path / tmp  :",$request->berkas->path();
    //   }else{
    //       echo'pilih file dulu anj';
    //   }

        $validatedata=$request->validate(
            [
                'nama' =>'required',
                'berkas' => 'required|file|image'
            ]
        );

        // echo $request->berkas->getClientOriginalName()," lolos validasi";
        $ext=$request->berkas->extension();
        $namaFile=$request->nama.time().$ext;
        $simpan = $request->berkas->move('image',$namaFile);
        echo "file berhasil diupload, lokasi di $simpan" ;

        $lokasi = asset("image/$namaFile");
        echo "<img src='".$lokasi."'>";

      

    }
}
