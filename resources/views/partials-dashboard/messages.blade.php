<ul id="message_list">
    @foreach ($messages as $message)
        <li>
            <div>
                <h2>{{ $message->name_user . ' ' . $message->surname_user}} </h2>
                <h4><em>{{ $message->mail_user}}</em></h4>
                <p>{{ $message->message_user}}</p>
            </div>
        </li>
    @endforeach
</ul>