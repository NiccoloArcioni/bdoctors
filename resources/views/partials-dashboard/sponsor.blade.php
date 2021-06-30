<div id="advertises_container">
    {{-- @dump($doctor_advertise); --}}
    @if (empty($doctor_ad))
        @foreach ($advertises as $ad)
        <div class="advertise_card {{$ad->type}}">
            <h2>{{$ad->type}}</h2>
            <p>Durata: {{$ad->hours}}h</p>
            <p class="bg_p">{{$ad->id}}</p>
            <h3>€{{$ad->price}}</h3>
            <a href="{{route('checkout', ['id' => $ad->id])}}" class="buybtn">Acquista</a>
        </div>
        @endforeach
    @else 
        <h2>Hai una sponsorizzazione già attiva:</h2>
        <div class="advertise_card {{$doctor_ad->type}}">
            <h2>{{$doctor_ad->type}}</h2>
            <p>Durata: {{$doctor_ad->hours}}h</p>
            <p class="bg_p">{{$doctor_ad->id}}</p>
            <h3>€{{$doctor_ad->price}}</h3>
            <span class="buybtn">Scadenza: {{$doctor_advertise->end_ads_date}}</span>
        </div>
    @endif
</div>