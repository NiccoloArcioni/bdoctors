@extends('layouts.app')

@section('content')
<div class="login">
    <div class="container login-form login-container">
        <div class="row align-items-center">
             
            <div class="reset-left text-center col-md-6 col-sm-12">
                <h2>Password dimenticata?</h2>
                <img src="{{asset('images/forgot_password_img.svg')}}" alt="">
        
            </div>
            <div class="reset-right col-md-6 col-sm-12">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card reset-psw-card">
                            <h5>Inserisci la tua e-mail per richiedere un reset della password</h5>
            
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
            
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
            
                                    <div class="form-group row">
                            
            
                                        <div class="col-md-12">
                                            <input id="email" type="email" placeholder="inserisci email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Invia il link per il reset della password') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
