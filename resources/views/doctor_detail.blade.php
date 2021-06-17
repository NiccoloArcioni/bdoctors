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
                <a class="btn register-btn" href="#disponibilita">Contatta il medico {{$doctor->lastname}} </a>
            </div>
        </div>

            {{-- INFO --}}
            <div style="align-self: center" class="col-lg-4">
                <div class="info">
                    <h2>Info</h2>
                    <p> Prestazione .....</p>
    
    
                {{-- RECENSIONI  --}}
                <h2>Recensioni</h2>
                    <p>Bravo il dottore</p>
                {{-- @foreach ($rev as $revs)
                    @for ($i = 0; $i < $revs->vote_user; $i++)
                        <i class="fas fa-star"></i>
                    @endfor
                        <p> {{$revs->name_user}} {{$revs->surname_user}}: {{$revs->review_user}}</p>
                @endforeach --}}
    
                    <h2> <i class="fas fa-angle-down"></i> Lascia una recensione </h2>
                        <form v-if="lasciaRecensione" action="" method="post">
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
                        <button type="submit" class="btn register-btn">Invia</button>
                        </form>
                </div>
            </div>
        </div>
    </div>

            {{-- FORM MESSAGGIO  --}}
            <div  class=" mex-container">
                <div class="col-md-8">
                    <h2>Qui puoi inviare un messaggio direttamente al Dott. {{$doctor->lastname}}</h2>
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
                        <button type="submit" class="btn register-btn">Invia</button>
                    </form>
                </div>
                <img src=" {{ asset('images/doc-message.png') }} " alt="">
            </div>
@endsection
