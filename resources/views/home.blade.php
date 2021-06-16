@extends('layouts.app')

@section('content')
    @php
    $user = Auth::user();
    $firstname = $user->firstname;
    $lastname = $user->lastname;
    $firstname = ucfirst($firstname);
    $lastname = ucfirst($lastname);
    @endphp
    <div class="dashboard">
        <div class="hor-nav-dash">
            <div class="profile">
                <img class="profile-pic" src="{{asset('storage/' . $user->photo)}}" alt="Card image cap">
                <h6>{{$firstname . ' ' . $lastname}}</h6>
            </div>
            <ul id="col-1-dashboard">
                <li><i class="icofont-ui-settings"></i><span> Modifica profilo</span></li>
                <li><i class="icofont-ui-message"></i><span> Messaggi ricevuti</span></li>
                <li><i class="icofont-comment"></i><span> Recensioni</span></li>
                <li><i class="icofont-shopping-cart"></i><span> Sponsorizza il tuo profilo</span></li>
                <li><i class="icofont-chart-bar-graph"></i><span> Statistiche</span></li>
            </ul>
        </div>
        <div class="active-section">
            <div class="section-heading">
                <h6>Impostazioni del profilo</h6>
            </div>
            <div id="col-2-dashboard" class="section-body">
                <div class="profile-settings">
                    {{-- <img src="{{asset('storage/' . $user->photo)}}" alt="profile picture">
                    <form action="{{route('update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <label for="profile_picture">Seleziona una nuova immagine del profilo :</label><br>
                        <input type="file" id="profile_picture" name="profile_picture"><br>
                        <input type="submit">
                      </form> --}}
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                                <form style="padding-bottom: 1rem">
                                    <div class="row mt-5 align-items-center">
                                        <div class="col-md-3 text-center mb-5">
                                            <div class="avatar avatar-xl">
                                                <img style="margin: 16px" src="{{asset('storage/' . $user->photo)}}" alt="avatar" class="avatar-img rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <h4 class="mb-1">{{$firstname . ' ' . $lastname}}</h4>
                                                    <p class="small mb-3"><span class="badge badge-dark">{{ucfirst($user->city)}}</span></p>
                                                    <div>
                                                        <button style="width:110px; margin-top: 16px" type="submit" class="btn btn-primary">Carica foto</button>
                                                        <button style="width:110px; margin-top: 16px" type="submit" class="btn btn-danger">Carica cv</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4" />
                                    <div class="form-group">
                                        <label for="address">Indirizzo</label>
                                        <input type="text" class="form-control" id="address" placeholder="{{$user->address}}" />
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="number">Numero di telefono</label>
                                            <input type="number" class="form-control" id="number" placeholder="+39" />
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputState5">Aggiungi specializzazione</label>
                                            <select id="inputState5" class="form-control" name="specializations[]" multiple="multiple">
                                                <option>Urologo</option>
                                                <option>Chirurgo</option>
                                                <option>Odontoiatra</option>
                                                <option>Dottore</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr class="my-4" />
                                    <button type="submit" class="btn btn-primary">Aggiorna</button>
                                </form>
                            </div>
                        </div>
                    </div>   
                </div>             
            </div>
        </div>
    </div>
@endsection
