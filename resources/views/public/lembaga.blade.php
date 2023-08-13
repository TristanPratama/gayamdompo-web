@extends('layout.public')

@section('content')
    <div class=" card shadow mt-3 mb-3 p-3">
      <div class="row mb-3">
        <h4 class="text-uppercase text-center"><i class="bx bx-group me-1"></i>{{$data->nama}}</h4>
        <hr>
        <div class="col-lg-12 m-2">
          {!!$data->keterangan!!}
        </div>
      </div>
    </div>
@endsection