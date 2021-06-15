@extends('layouts.app')

@section('content')
<div class="login">
    <div class="login-container row">
        <div class="login-form-left col-md-6">
            <div class="login-form-text col-sm-12">
                <div class="row justify-content-center">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-body">
                              <h3>Accedi</h3>
                              <form method="POST" action="{{ route('login') }}">
                                  @csrf
                                  <div class="form-group row">
                                      <div class="col-md-12">
                                          <input id="email" type="email" placeholder="indirizzo e-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          
                                          @error('email')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>
          
                                  <div class="form-group row">
          
                                      <div class="col-md-12">
                                          <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          
                                          @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>
          
                                  <div class="form-group row">
                                      <div class="col-md-12">
                                          <div class="form-check">
                                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          
                                              <label class="form-check-label" for="remember">
                                                  {{ __('Ricorda i miei dati di accesso') }}
                                              </label>
                                          </div>
                                      </div>
                                  </div>
          
                                  <div class="form-group row mb-0">
                                      <div class="col-md-12">
                                          <button type="submit" class="btn btn-primary">
                                              {{ __('Login') }}
                                          </button>
          
                                        </div>
                                        <div class="col-md-12">
                                          @if (Route::has('password.request'))
                                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                                  {{ __('Hai dimenticato la tua password?') }}
                                              </a>
                                          @endif

                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
                </div>
            </div>  
        </div>
        <div class="login-form-right col-md-6 col-sm-12">
            <div class="login-img">
                <h1>Bentornato</h1>
                <img src="{{asset('images/online-doctor.jpg')}}" alt="">

            </div>
        </div>
    </div>
</div>
@endsection
