<h1>reviews</h1>
<ul id="review_list">
    @foreach ($reviews as $review)
    <li>
        <div>
            <h2>{{ $review->name_user . ' ' . $review->surname_user}} </h2>
            <h4><em>Voto: </em>{{ $review->vote_user}}</h4>
            <p>{{ $review->review_user}}</p>
        </div>
    </li>
    @endforeach
</ul>