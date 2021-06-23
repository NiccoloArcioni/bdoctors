@extends('layouts.app')


@section('content')
    <div id="bg">
        <div class="container-single">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="header-doc">
                        <div class="foto">
                            <img src=" {{asset('storage/' . $doctor->photo)}}" alt="">
                        </div>
                        <div class="col-doc">
                            <h1>{{$doctor->firstname}} {{$doctor->lastname}}</h1>
                            
                            @foreach ($doctor->specializations as $specialization)
                                <h2> {{$specialization->specialization}} </h2>
                            @endforeach
                        </div>
                    </div>

                    <div class="cv">
                        {{-- provvisorio --}}
                        <h3>Esperienza</h3>
                        <p> {{$doctor->cv}} </p>
                        <a class="btn btn-info" href="#disponibilita">Contatta il medico {{$doctor->lastname}} </a>
                    </div>
                </div>

                {{-- INFO --}}
                <div style="align-self: center" class="col-lg-4 col-sm-12">
                    <div class="info">
                        <h2>Informazioni generali</h2>
                        <p> Telefono: {{$doctor->telephone}}</p>
                        <p> Indirizzo: {{$doctor->address}} - {{$doctor->city}}</p>
                    {{--<p>Prestazione:{{$doctor->performance}}</p> --}}

        
        
                        {{-- RECENSIONI  --}}
                        <h2>Recensioni</h2>
                        <p>Bravo il dottore</p>
                    {{-- @foreach ($revs as $rev)
                        @for ($i = 0; $i < $revs->vote_user; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                            <p> {{$revs->name_user}} {{$revs->surname_user}}: {{$revs->review_user}}</p>
                    @endforeach --}}
        
                        <h2> <i class="fas fa-angle-down"></i> Lascia una recensione </h2>
                            <form action="{{url('/home/reviews')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <input type="text" class="d-none" value="" name="doctor_id" required>
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
                                    <label for="voto">Voto</label>
                                    <select class="form-control" id="voto" name="vote_user">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="recensione" class="d-block">Recensione</label>
                                    <textarea style="width: 100%"  id="recensione" name="review_user" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Invia</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            {{-- FORM MESSAGGIO  --}}
        <div class="container-form-message"> 
            <div  class=" mex-container">
                <div class="col-md-8">
                    <h2>Per informazioni e prenotazioni scrivi direttamente al Dott. {{$doctor->lastname}}</h2>
                    <form action="{{url('/home/messages')}}" method="">
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
                        <button type="submit" class="btn btn-info">Invia</button>
                    </form>
                </div>
                <img src=" {{ asset('images/doc-message.png') }} " alt="">
            </div>
        </div>
    </div>           
@endsection
