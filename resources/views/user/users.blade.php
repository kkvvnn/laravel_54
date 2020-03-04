
@foreach ($users as $user)
    <p>Name:  {{ $user->name }} <br>
        Email: {{ $user->email }}</p>
@endforeach

<a href="{{route('welcome')}}">Welcome</a>

<?php dump($uri)?>
{{ $method }}
