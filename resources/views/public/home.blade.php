@extends('layout/public')

@section('content')
    <div class="container p-3">
      <div class="row mb-3">
        <div class="col-lg-1">
          <img src="/images/logo.png" alt="" class="img-fluid" style="height: 100px; object-fit: contain;">
        </div>
        <div class="col-lg-5">
          <p class="text-uppercase" style="margin-bottom: 0; margin-top:1rem">selamat datang di website resmi</p>
          <h3 class="text-uppercase">kelurahan gayamdompo</h3>
        </div>
        <div class="col-lg-6">
          <p style="margin-bottom: 0; margin-top:1rem"><i class='bx bx-user me-2'></i>Contact Person : +62-8139-3721-999</p>
          <p><i class='bx bx-map me-2'></i>Kecamatan Karanganyar, Kabupaten Karanganyar, Jawa Tengah</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-8">
          @if (!count($foto))
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner rounded">
              <div class="carousel-item active">
                <img src="{{asset('images/Home1.jpeg')}}" class="d-block w-100 h-50 img-fluid" alt="..." style="border-radius: 10px">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/Home2.jpeg')}}" class="d-block w-100" alt="..." style="border-radius: 10px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          @else
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              @foreach ($foto as $fo)
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$loop->index}}" @if($loop->index === 0) class="active" aria-current="true" @endif aria-label="Slide 1"></button>
              @endforeach
            </div>
            <div class="carousel-inner">
              @foreach ($foto as $item)
              <div class="carousel-item @if($loop->index === 0) active @endif">
                <img src="{{asset('storage/'.$item->gambar)}}" class="d-block w-100" alt="..." style="object-fit: contain" height="400">
                <div class="carousel-caption d-none d-md-block">
                  <h5>{{$item->judul}}</h5>
                </div>
              </div>
              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          @endif
        </div>
        <div class="col-lg-4">
          <div class="card-body" style="width: 18rem;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15818.441615911039!2d111.0074635!3d-7.617301!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a21f254ae887d%3A0x5027a76e356c140!2sGayamdompo%2C%20Kec.%20Karanganyar%2C%20Kabupaten%20Karanganyar%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1690129708172!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="card-body">
              <h6 class="card-title">Kelurahan Gayamdompo</h6>
              <q>{{$visi[0]->visi}}</q>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Lurah: {{$kades? $kades->nama: ''}}</li>
              <li class="list-group-item">Sekretaris: {{$sekdes? $sekdes->nama: ''}}</li>
              <li class="list-group-item">Bendahara: {{$bendes? $bendes->nama: '' }}</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-11">
          @foreach ($artikel as $item)
          <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="@if($item->gambar) {{asset('storage/'.$item->gambar)}} @else https://source.unsplash.com/1600x900/?{{$item->judul}} @endif" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$item->judul}}</h5>
                  <p class="card-text">{{$item->preview}}</p>
                  <p class="card-text"><small class="text-muted">{{$item->created_at->diffForHumans()}}</small></p>
                  <a href="/artikel/{{$item->uri}}" class="text-decoration-none btn btn-sm" style="background-color: #F88154">Baca selengkapnya <i class='bx bx-chevron-right'></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <div class="text-center">
            <a href="/artikel" class="text-decoration-none">Lihat artikel lainnya <i class='bx bx-right-arrow-alt'></i></a>
          </div>
        </div>
      </div>
    </div>
@endsection