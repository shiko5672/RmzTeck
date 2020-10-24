@extends('layouts.app')

@section('content')

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="{{URL('signup/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

        <!-- Main css -->
        <link rel="stylesheet" href="{{URL('signup/css/style.css')}}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    </head>
    <body>
<dev class="main">
    <section class="signup">
<div class="container col-sm-5" >
    <div class="signup-content ">


        <form method="POST" id="signup-form" class="signup-form" action="{{ route('register') }}">
            @csrf
            <h4 class="form-title col-sm-6">Create account</h4>
            <div class="form-group">


                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your Name">

                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="form-group ">

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="your Email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="form-group ">


                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="form-group ">


                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="password-confirm">
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-12 offset-md-0">
                    <a href="{{URL('/index.html')}}"  class="btn btn-primary "  >
                        Back
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
    </section>
</dev>
    </body>
@endsection
