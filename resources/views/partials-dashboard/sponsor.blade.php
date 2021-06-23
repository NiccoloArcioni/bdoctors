<div id="advertises_container">
    @foreach ($advertises as $ad)
    <div class="advertise_card {{$ad->type}}">
        <h2>{{$ad->type}}</h2>
        <p>Durata: {{$ad->hours}}h</p>
        <p class="bg_p">{{$ad->id}}</p>
        <h3>{{$ad->price}}$</h3>
        <a href="{{route('checkout', ['id' => $ad->id])}}" class="buybtn">Acquista</a>
    </div>
    @endforeach
</div>