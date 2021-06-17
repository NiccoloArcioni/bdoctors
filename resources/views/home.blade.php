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
                <li id="settings"><i class="icofont-ui-settings"></i><span> Modifica profilo</span></li>
                <li id="messages"><i class="icofont-ui-message"></i><span> Messaggi ricevuti</span></li>
                <li id="reviews"><i class="icofont-comment"></i><span> Recensioni</span></li>
                <li id="sponsor"><i class="icofont-shopping-cart"></i><span> Sponsorizza il tuo profilo</span></li>
                <li id="stats"><i class="icofont-chart-bar-graph"></i><span> Statistiche</span></li>
            </ul>
        </div>
        <div id="section-wrapper" class="active-section">
            <div class="section-heading">
                <h6 id="section-title">Impostazioni del profilo</h6>
            </div>
            <div id="col-2-dashboard" class="section-body">
                <div id="general-wrap"></div>
                <div class="profile-settings">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                                <form style="padding-bottom: 1rem"  action="{{route('update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="row mt-5 align-items-center">
                                        <div class="col-md-3 text-center mb-5">
                                            <div class="avatar avatar-xl">
                                                <img id="avatarPic" style="margin: 16px; height: 110px; object-fit: cover" src="{{asset('storage/' . $user->photo)}}" alt="avatar" class="avatar-img rounded-circle" />
                                                <script>
                                                    function uploaded() {
                                                        document.getElementById('avatarPic').src = URL.createObjectURL(event.target.files[0]);
                                                    }
                                                </script>
                                                <input onchange="uploaded()" style="position: fixed;visibility: hidden" type="file" id="profile_picture" name="profile_picture" accept=".jpg, .jpeg, .png"><br>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <h4 class="mb-1">{{$firstname . ' ' . $lastname}}</h4>
                                                    <p class="small mb-3"><span class="badge badge-dark">{{ucfirst($user->city)}}</span></p>
                                                    <div>
                                                        <button type="button" id="triggerUpload" style="width:110px; margin-top: 16px" class="btn btn-primary">Carica foto</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4" />
                                    <div class="form-group">
                                        <label for="city">Città</label>
                                        <input type="text" class="form-control" name="city" id="city" value="{{$user->city}}" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Indirizzo</label>
                                        <input type="text" class="form-control" name="address" id="address" value="{{$user->address}}" required/>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="telephone">Numero di telefono</label>
                                            <input type="number" minlength="10" maxlength="10" class="form-control" name="telephone" id="telephone" value="{{$user->telephone}}"  placeholder='+39'/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="cv">Curriculum Vitae</label>
                                            <textarea id="cv" name="cv" rows="4" cols="35" value="$user->cv" placeholder='Descrivi brevemente quelle che sono le tue esperienze lavorative'></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="select-multiple">Aggiungi specializzazione</label>
                                            <select id="select-multiple" class="form-control" name="specializations[]" multiple="multiple">
                                                @foreach ($specializations as $specialization)
                                                    <option value="{{$specialization->id}}" {{$user->specializations->contains($specialization) ? 'selected' : ''}}>{{$specialization->specialization}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="performance">Seleziona il tipo di prestazioni che sei disposto a fornire</label>
                                            <select id="performance" class="form-control" name="performance">
                                                <option value="In studio" {{$user->performance == 'In studio' ? 'selected' : ''}}>In studio</option>
                                                <option value="Da remoto" {{$user->performance == 'Da remoto' ? 'selected' : ''}}>Da remoto</option>
                                                <option value="Sia in studio che da remoto" {{$user->performance == 'Sia in studio che da remoto' ? 'selected' : ''}}>Sia in studio che da remoto</option>
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
