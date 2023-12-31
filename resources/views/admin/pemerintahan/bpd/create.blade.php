@extends('layout/admin')

@section('content')
    <div class="container card shadow mt-3 mb-3 p-3">
      <div class="row justify-content-center mb-3">
        <div class="col-lg-10">
          <form action="/admin/bpd" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" value="{{old('nama')}}" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Juniar Budiarto">
              @error('nama')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar</label>
              <input class="form-control @error('gambar') is-invalid @enderror" type="file" name="gambar">
              @error('gambar')
                <div class="invalid-feedback">
                  {{$message}}
                </div>                
              @enderror
            </div>
            <div class="mb-3">
              <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
              <select class="form-select" name="jenis_kelamin">
                <option>Pilih jenis kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
              </select>
              @error('jenis_kelamin')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>                   
              @enderror
            </div>
            <div class="mb-3">
              <label for="jabatan" class="form-label">Pangkat/Jabatan</label>
              <input type="text" value="{{old('jabatan')}}"class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" placeholder="Kepala Bagian Hubungan Masyarakat">
              @error('jabatan')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <button class="btn w-100 text-light" style="background-color: #F88154" type="submit"><i class="bi bi-cloud me-2"></i>Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection