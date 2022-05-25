@extends('layout.master')
@section('title','tambah data jurusan')
@section('navjur','active')
@section('content')

<div class="container  mt-3 p-4" >
    
    <div class="card">
        <div class="card-header">
           form tambah data jurusan
        </div>
        <div class="card-body">
            <form method="POST" action="/jurusan/store">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">kode jurusan</label>
                  <input type="text" name="kd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">jurusan</label>
                  <input type="text" name="jur" class="form-control" id="exampleInputPassword1">
                </div>
                
                
                <button type="submit" class="btn btn-primary">tambah data</button>
                <a href="/jurusan" class="btn btn-warning">batal</a>
              </form>
        </div>
      </div>
</div>

      @endsection