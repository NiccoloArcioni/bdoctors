<section id="jumbo">
    <div class="ms-container">
        <div class="jumbo_content">
            <img src="{{asset('images/dottori.png')}}" alt="">
            <div class="ms-text">
                <h1>Prenota la tua visita con un click!</h1>
                <p>Trova lo specialista più adatto a te</p>
                <form action="{{ route('guest.search') }}" method="post">
                    @csrf
                    @method('POST')
                    <input type="ms-text" name="search" placeholder="Inserisci specializzazione">
                    <button class="register-btn" type="submit">Cerca</a></button>
                </form>
            </div>   
        </div>
    </div>
</section>