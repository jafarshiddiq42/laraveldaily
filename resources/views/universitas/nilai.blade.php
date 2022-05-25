<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container text-center mt-2">
<div class="p-3 mb-2 bg-info text-dark d-inline-block">{{$nama}}</div>
{{-- <div class="p-2 mb-2 bg-secondary text-dark d-inline-block">{{$nilai}}</div> --}}
<br>
{{-- @if($nilai >= 50 and $nilai <= 100)
<div class="p-2 mb-2 bg-success text-dark d-inline-block">lulus</div>
@elseif($nilai >= 0 and $nilai < 50)
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">tidak lulus</div>
@else
<div class="p-2 mb-2 bg-warning text-dark d-inline-block">nilai tidak valid</div>
@endif --}}
{{-- @for ($i = $nilai_awal; $i <= $nilai_batas; $i++)
<div class="p-3 mb-2 bg-primary text-dark d-inline-block">{{$i}}</div>
    
@endfor
<br> --}}
{{-- @foreach ($nilai as $data)
@if ($data >=50 and $data <=100)
<div class="p-2 mb-2 bg-success text-dark d-inline-block">{{$data}}</div> 
@elseif($data >=0 and $data <50)
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">{{$data}}</div>
@endif
    
@endforeach --}}
{{-- @foreach ($nilai as $data)
@if ($data <=50 )
@continue
@endif
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">{{$data}}</div>
    
@endforeach --}}
@forelse ($nilai as $data)
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">{{$data}}</div>
@empty
<div class="p-2 mb-2 bg-secondary text-dark d-inline-block">tidak ada data</div>
@endforelse<br>

@if ($rata >=0 and $rata <40)
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">E</div>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">{{$rata}}</div>
<br> <div class="p-2 mb-2 bg-danger text-dark d-inline-block">tidak lulus</div>
@elseif($rata >=40 and $rata <55)
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">D</div>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">{{$rata}}</div>
<br> <div class="p-2 mb-2 bg-danger text-dark d-inline-block">tidak lulus</div>
@elseif($rata >=55 and $rata <70)
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">c</div>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">{{$rata}}</div>
<br> <div class="p-2 mb-2 bg-danger text-dark d-inline-block">tidak lulus</div>
@elseif($rata >=70 and $rata <85)
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">B</div>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">{{$rata}}</div>
<br> <div class="p-2 mb-2 bg-danger text-dark d-inline-block">lulus</div>
@elseif($rata >=85 and $rata <=100)
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">A</div>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">{{$rata}}</div>
<br> <div class="p-2 mb-2 bg-danger text-dark d-inline-block">lulus</div> 
@endif
</div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>
