<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jurusan;
use App\Models\mahasiswa;

class mahasiswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $mahasiswa = mahasiswa::all();
        return view('page.mahasiswa.index', compact('mahasiswa','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = jurusan::all();
        return view('page.mahasiswa.form', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate(
            [
                'nim' => 'required|numeric|unique:App\Models\mahasiswa,nim',
                'nama' => 'required'
            ],
            ['nim.required' => "nim diisi!",
            'nim.min' => "nim minimal 10 karakter",
            'nim.numeric' => "nim itu angka!",
            'nim.unique' => "nim sudah ada",
            'nama.required' => "nama diisi!",

            ]
        );
        $mahasiswa = new mahasiswa;

        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->tempat = $request->tempat;
        $mahasiswa->tanggal = $request->tanggal;
        $mahasiswa->jk = $request->jk;
        $mahasiswa->jurusan_id = $request->jurusan;
        $mahasiswa->agama = $request->agama;
        $mahasiswa->email = $request->email;
        $mahasiswa->save();

        return redirect('/mahasiswa');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
