@extends('layout.master')
@section('title','Upload Data')
@section('navber','active')
@section('content')

<div class="container  mt-3 p-4" >
    
    <div class="card">
        <div class="card-header">
           form tambah data jurusan
        </div>
        <div class="card-body">
            <form method="POST" action="/proses-upload" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">nama</label>
                    <input type="nama" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('nama')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">berkas</label>
                  <input type="file" name="berkas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('berkas')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <button type="submit" class="btn btn-primary">upload</button>
                <a href="/mahasiswa" class="btn btn-warning">batal</a>
              </form>
        </div>
      </div>
</div>

      @endsection