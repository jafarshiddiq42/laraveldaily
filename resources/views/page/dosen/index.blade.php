@extends('layout.master')
@section('title','data dosen')
@section('navdos','active')
@section('content')

<div class="container  mt-3 p-4" >
    <a href="/dosen/form" style="float: right" class="btn btn-primary btn-sm ">tambah data</a>
<br>
<br>
    <div class="card">
        <div class="card-header">
            data dosen
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">nidn</th>
                    <th scope="col">dosen</th>
                    <th scope="col">tanggal bergabung</th>
                    <th scope="col">golongan</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($dosen as $item)
                    <tr>
                        <th scope="row">{{$nomor++}}</th>
                        <td>{{$item->nidn}}</td>
                        <td>{{$item->nama_dosen}}</td>
                        <td>{{$item->tgl_bergabung}}</td>
                        <td>{{$item->golongan}}</td>
                        <td>
                            <a href="/dosen/edit/{{$item->id}}" class="btn btn-success btn-sm">edit</a>
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
          apakah data dengan nidn {{$item->nidn}} ingin dihapus ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>
          <form method="POST" action="/dosen/{{$item->id}}">
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