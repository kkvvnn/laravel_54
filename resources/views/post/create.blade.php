<h1>Create Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ action('PostController@store') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="title" id="title"><br>
    <input type="text" name="body" id="body"><br>
    <input type="submit" value="Отправить">
</form>