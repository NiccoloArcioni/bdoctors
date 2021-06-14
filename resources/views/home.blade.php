@extends('layouts.app')

@section('content')
    @php
    $user = Auth::user();
    @endphp
    <div class="dashboard">
        <div class="hor-nav-dash">
            <div class="profile">
                <img class="profile-pic" src="{{asset('storage/default.png')}}" alt="Card image cap">
                @php
                    $firstname = $user->firstname;
                    $lastname = $user->lastname;
                    $firstname = ucfirst($firstname);
                    $lastname = ucfirst($lastname);
                @endphp
                <h6>{{$firstname . ' ' . $lastname}}</h6>
            </div>
            <ul>
                <li><i class="icofont-ui-settings"></i> Modifica profilo</li>
                <li><i class="icofont-ui-message"></i> Messaggi ricevuti</li>
                <li><i class="icofont-comment"></i> Recensioni</li>
                <li><i class="icofont-shopping-cart"></i> Sponsorizza il tuo profilo</li>
                <li><i class="icofont-chart-bar-graph"></i> Statistiche</li>
            </ul>
        </div>
        <div class="active-section">
            <div class="section-heading">
                <h6>Impostazioni del profilo</h6>
            </div>
            <div class="section-body">
                {{-- <div class="card" style="width: 18rem;">
                    <img src="{{asset('storage/default.png')}}" class="card-img-top" alt="profile pic">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div> --}}
                {{-- <div class="card" style="width: 18rem;">
                    <img src="{{asset('storage/default.png')}}" class="card-img-top" alt="profile pic">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
