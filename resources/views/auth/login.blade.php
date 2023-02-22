<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RAB Kegiatan</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/main.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aguafina+Script&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5e28bc552a.js" crossorigin="anonymous"></script>
    <script src="{{asset('template/js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('template/js/popper.min.js')}}"></script>
    <script src="{{asset('template/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template/js/app.js')}}"></script>
    <style>
        .logo{
            font-size:60px;
            text-align: center;
            font-family: 'Aguafina Script', cursive;
        }

        .logo1{
            font-size:20px;
            margin-bottom:0px;
            text-align: center;
            margin-top:-27px;
            font-family: 'Aguafina Script', cursive;
        }

        .formulir{
            margin: auto;
        }
        body{
            overflow: hidden;
        }
    </style>
</head>
<body style="background-color: #000000;">
   <div class="container">
    <br><br>
    <div class="mt-8 card login-card" style="background-color: #FFB002;">
        <div class="card-header text-center fw-bold">{{ __('Selamat Datang Silahkan Login') }}</div>
        <div class="row no-gutters">
            <h1 class="mt-4 logo">Karta</h1>
            <h3 class="logo1">Jaya Haji Gopur</h3>
            <div class="col-md-7 formulir">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-4">
                            <label class="mb-2 fw-bold" for="email">{{ __('Alamat E-Mail atau Username') }}</label>
                            <input id="" type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @if ($errors->has('email'))
                            <input type="hidden" value="{{ $errors->first('email') }}" id="email_error">                    
                            @endif
                        </div>

                        <div class="form-group mb-2">
                            <label class="mb-2 fw-bold" for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label fw-bold" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="mb-4 form-control btn btn-dark">{{ __('Login') }}
                        </button>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div> 
</body>
</html>