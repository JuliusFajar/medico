@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MEDICO') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('MEDICO') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('MEDICO') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Lupa password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

  
  <div id="main-wrapper" class="oxyy-login-register">
    
      <div class="hero-content d-flex min-vh-100">
        <div class="container my-auto">
          <div class="row">
            <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
              <div class="hero-wrap rounded shadow-lg p-4 py-sm-5 px-sm-5 my-4">
                <div class="hero-mask opacity-9 bg-dark"></div>
                <div class="hero-content">
                  <div class="logo mb-4"> 
                    <a class="d-flex justify-content-center" href="#" title="">
                        {{-- <img src="images/logo-lg-light.png" alt="Oxyy"> --}}
                        <h2 class="text-light">{{ __('MEDICO') }}</h2>
                    </a> 
                    @include('inc.flash')
                </div>
                  <form id="loginForm" class="form-dark" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group icon-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus>
                      <span class="icon-inside"><i class="fas fa-envelope"></i></span> 
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    </div>
                    <div class="form-group icon-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                      <span class="icon-inside"><i class="fas fa-lock"></i></span> 
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                        @enderror
                    </div>
                    
                    <div class="row text-2 mt-4">
                      
                        <div class="col-sm">
                            @if (Route::has('password.request'))
                          <a class="btn-link text-light" href="{{ route('password.request') }}">{{ __('Lupa password?') }}
                          </a>
                            @endif
                    
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block shadow-none mt-4 mb-3" type="submit"> {{ __('Login') }}</button>
                  </form>
                
                 
                  <p class="text-2 text-muted text-center mb-0"> <span class="text-light text-3">Belum punya akun? </span><a class="btn-link text-light text-3" href="{{route('register')}}">Daftar</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
@endsection
