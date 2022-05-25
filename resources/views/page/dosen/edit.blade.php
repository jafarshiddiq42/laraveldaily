@extends('layout.master')
@section('title','edit data dosen')
@section('navjur','active')
@section('content')

<div class="container  mt-3 p-4" >
    
    <div class="card">
        <div class="card-header">
           form edit data dosen
        </div>
        <div class="card-body">
            <form method="post" action="/dosen/{{$dosen->id}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">nidn</label>
                  <input type="text" name="nidn" value="{{$dosen->nidn}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">dosen</label>
                  <input type="text" name="dosen" value="{{$dosen->nama_dosen}}" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">tanggal bergabung</label>
                  <input type="date" name="tanggal" value="{{$dosen->tgl_bergabung}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">golongan</label>
                  <input type="text" name="gol" value="{{$dosen->golongan}}" class="form-control" id="exampleInputPassword1">
                </div>
                
                
                <button type="submit" class="btn btn-primary">edit data</button>
                <a href="/dosen" class="btn btn-warning">batal</a>
              </form>
        </div>
      </div>
</div>

      @endsection