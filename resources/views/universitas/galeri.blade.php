@extends('layout.master')
@section('title','galeri')
@section('navgal','active')
    

    
@section('content')
<div class="container text-center mt-3 p-4" >
    <h1>galeri</h1>
    <div class="row">
        <div class="col-md-4 m-auto">
    <ul class="list-group">
      {{-- @forelse ($mhs as $item)
          <li class="list-group-item">{{$item}}</li>
      @empty
          
      @endforelse --}}
    </ul>
        </div>
  </div>
</div>
@endsection