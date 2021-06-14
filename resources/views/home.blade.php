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
            <ul>
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
            <div class="section-body">
                <div class="profile-settings">
                    <img src="{{asset('storage/' . $user->photo)}}" alt="profile picture">
                    <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <label for="profile_picture">Seleziona una nuova immagine del profilo :</label><br>
                        <input type="file" id="profile_picture" name="profile_picture"><br>
                        <input type="submit">
                      </form>     
                </div>             
            </div>
        </div>
    </div>
@endsection
