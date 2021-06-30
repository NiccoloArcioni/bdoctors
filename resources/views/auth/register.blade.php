@extends('layouts.app')

@section('content')
<div class="login">
    <div class="container login-container login-form">
        <div class="row justify-content-center">
            <div class="register-form-right col-md-6 col-sm-12">
                <h3>Registrati e mettiti in contatto con i tuoi pazienti</h3>
                <div class="register-img">
                    <img src="{{asset('images/doctor_with_phone.svg')}}" alt="">
    
                </div>
    
            </div>
            <div class="register-form-left col-md-6 col-sm-12">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>Iscriviti</h3>
                            <p>É semplice e gratuito</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                              
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="firstname" type="text" placeholder="Nome" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
        
                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="lastname" type="text" placeholder="Cognome" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
        
                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="address" type="text" placeholder="Indirizzo" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
        
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="city" type="text" placeholder="Città" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
        
                                        @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>       
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="email" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        Specializzazione:
                                        <select id="select-multiple" class="form-control" name="specializations" >
                                            @foreach ($specializations as $specialization)
                                                <option value="{{$specialization->id}}">{{$specialization->specialization}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" placeholder="Conferma password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Registrati') }}
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
@endsection
