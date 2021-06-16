<section id="jumbo">
    <div class="jumbo_content">
        <img src="{{asset('images/dottori.png')}}" alt="">
            {{-- <div class="ms-text">
                <h1>Prenota la tua visita con un click!</h1>
                <p>Trova lo specialista più adatto a te</p>
                <input type="ms-text" placeholder="Inserisci specializzazione">
                <button class="register-btn"><a href="">Cerca</a></button>
            </div>    --}}
        <div class="form-wrapper">
            <h2>Trova lo specialista più adatto alle tue esigenze attraverso una ricerca approfondita.</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate.</p>
            <form action="{{ Route('guest.search') }}" method="POST">
                @csrf
                @method('POST')
                {{-- @dd($specializations) --}}
                <select name="search" id="search">
                @foreach ($specializations as $specialization)
                    <option value='{{$specialization->id}}'>{{$specialization->specialization}}</option>
                @endforeach
                </select>
                <input type="submit" value="Cerca">
            </form>
        </div>
    </div>
</section>