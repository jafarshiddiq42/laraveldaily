@extends('layout.master')
@section('title','data jurusan')
@section('navjur','active')
@section('content')

<div class="container  mt-3 p-4" >
    <a href="/jurusan/form" style="float: right" class="btn btn-primary btn-sm">tambah data</a>
<br>
<br>
    <div class="card">
        <div class="card-header">
            data jurusan
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">kode jurusan</th>
                    <th scope="col">jurusan</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($jurusan as $item)
                    <tr>
                        <th scope="row">{{$nomor++}}</th>
                        <td>{{$item->kode_jur}}</td>
                        <td>{{$item->jurusan}}</td>
                        <td>
                            <a href="/jurusan/edit/{{$item->id}}" class="btn btn-success btn-sm">edit</a>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#a{{$item->id}}">
                                hapus
                              </button>
                              <!-- Modal -->
<div class="modal fade" id="a{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">peringatan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          apakah data dengan kode {{$item->kode_jur}} ingin dihapus ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>
          <form method="POST" action="/jurusan/{{$item->id}}">
            @csrf
            @method('DELETE')
          <button type="submit" class="btn btn-primary">ok</button>
        </form>
        </div>
      </div>
    </div>
  </div>
                        </td>
                      </tr>
                    @empty
                        <tr>
                            <td colspan="4">tidak ada data</td>
                        </tr>
                    @endforelse
                  
                </tbody>
              </table>
        </div>
      </div>
</div>

      @endsection