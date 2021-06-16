@extends('layouts.app')


@section('content')
    <div class="container-single">
        <div class="col-lg-8">
            <div class="header-doc">
                <div class="foto">
                    <img src=" {{asset('storage/' . $doctor->photo)}}" alt="">
                </div>
                <div class="col-doc">
                    <h1>{{$doctor->firstname}} {{$doctor->lastname}}</h1>
                    
                    {{-- <h2> {{$specialization->specialization}} </h2> --}}
                </div>
            </div>

            <div class="cv">
                {{-- provvisorio --}}
                <h3>Esperienza</h3>
                <p> {{$doctor->cv}} </p>
                <a class="btn blu" href="#disponibilita">Contatta il medico {{$doctor->lastname}} </a>
            </div>

            {{-- RECENSIONE --}}



            {{-- FORM MESSAGGIO  --}}
            <div  class=" mex-container">
                <div class="col-md-8">
                    <h2>Qui puoi inviare un messaggio direttamente al dott {{$doctor->lastname}}</h2>
                    <form action="{{url('/message')}}" method="">
                        @csrf
                        @method('')
                        <div class="form-group">
                            <input type="text" class="d-none" value="{{$doctor->id}}" name="doctor_id" required>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                                <label for="nameUser">Nome</label>
                                <input type="text" class="form-control" id="nameUser" name="name_user" required>
                            </div>
                            <div class="col">
                                <label for="surnameUser">Cognome</label>
                                <input type="text" class="form-control" id="surnameUser" name="surname_user" required>
                            </div>
                            <div class="col">
                                <label for="mailUser">Email</label>
                                <input type="email" class="form-control" id="mailUser" name="mail_user" required>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="d-block">Messaggio</label>
                            <textarea id="message" style="width: 100%; min-height: 300px" name="message_user" required></textarea>
                        </div>
                        <button type="submit" class="btn blu">Invia</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
