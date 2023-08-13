<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
  <link rel="icon" href="/images/logo.png">
  <title>Masuk</title>
</head>
<body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-5 text-black mt-5">
          @if (session()->has('auth_error'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{session('auth_error')}}</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          <div class="mt-3 mb-3 text-center">
            <img src="/images/logo.png" alt="" style="width: 60px">
            <h1 class="fw-bold">Kelurahan</h1>
            <h1 class="fw-bold">Gayamdompo</h1>
          </div>
          <div class="d-flex justify-content-center mt-5">
            <form style="width: 23rem;" method="POST" action="/masuk">
              @csrf
              <div class="form-outline mb-4">
                <input name="email" type="email" id="form2Example18" class="form-control form-control-lg" placeholder="Email" />
              </div>
              <div class="form-outline mb-4">
                <input name="password" type="password" id="form2Example28" class="form-control form-control-lg" placeholder="Password" />
              </div>
              <div class="pt-1">
                <button class="btn btn-lg btn-block w-100 text-light shadow" type="submit" style="background-color: #F55315">Masuk</button>
              </div>
  
            </form>
  
          </div>
  
        </div>
        <div class="col-sm-7 px-0 d-none d-sm-block">
          <img src="{{asset('images/Auth.jpg')}}"
            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>