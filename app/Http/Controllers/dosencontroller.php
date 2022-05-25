<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dosen;

class dosencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $dosen = dosen::all();
        return view('page.dosen.index', compact('dosen','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.dosen.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosen = new dosen();

        $dosen->nidn = $request->nidn;
        $dosen->nama_dosen = $request->dosen;
        $dosen->tgl_bergabung = $request->tanggal;
        $dosen->golongan = $request->gol;
        $dosen->save();

        return redirect('/dosen');
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
        $dosen = dosen::find($id);
        return view('page.dosen.edit',compact('dosen'));
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
        $dosen = dosen::find($id);

        $dosen->nidn = $request->nidn;
        $dosen->nama_dosen = $request->dosen;
        $dosen->tgl_bergabung = $request->tanggal;
        $dosen->golongan = $request->gol;
        $dosen->save();

        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = dosen::find($id);
        $dosen->delete();

        return redirect('dosen');
    }
}
