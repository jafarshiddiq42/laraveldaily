@extends('layout.master')
@section('title','tambah data mahasiswa')
@section('navmhs','active')
@section('content')

<div class="container  mt-3 p-4" >
    
    <div class="card">
        <div class="card-header">
           form tambah data mahasiswa
        </div>
        <div class="card-body">
            <form method="POST" action="/mahasiswa/store">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">nim</label>
                  <input type="text" name="nim" value="{{ old('nim') }}" class="form-control  @error('nim') is-invalid @enderror ">
                  @error('nim')
                    <div class="text-danger">{{ $message }}</div>  
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">nama lengkap</label>
                  <input type="text" name="nama" value="{{ old('nama') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">tempat lahir</label>
                  <input type="text" name="tempat"  class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">tanggal lahir</label>
                  <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">jenis kelamin</label>
                  <input type="radio" name="jk" value="L">laki-laki
                  <input type="radio" name="jk" value="P">perempuan
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">jurusan</label>
                  <select name="jurusan" class="form-control">
                    <option value="">-pilih jurusan-</option>
                    @foreach ($jurusan as $item)
                        <option value="{{$item->id}}">{{$item->jurusan}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">agama</label>
                  <select name="agama" class="form-control">
                    <option value="islam">=pilih agama-</option>
                    <option value="islam">islam</option>
                    <option value="kristen">kristen</option>
                    <option value="hindu">hindu</option>
                    <option value="buddha">buddha</option>
                    <option value="katolik">katolik</option>
                    <option value="konghucu">konghucu</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">foto</label>
                  <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
                
                </div>
                <button type="submit" class="btn btn-primary">tambah data</button>
                <a href="/mahasiswa" class="btn btn-warning">batal</a>
              </form>
        </div>
      </div>
</div>

      @endsection