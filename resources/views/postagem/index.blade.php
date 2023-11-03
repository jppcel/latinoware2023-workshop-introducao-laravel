<html>
    <head>
        <title>Index</title>
    </head>
    <body>
        <a href="/new">
            Nova Postagem
        </a>
        @foreach($postagens as $postagem)
            <h1>
                <a href="/view/{{$postagem->id}}">
                    {{$postagem->titulo}}
                </a>
            </h1>
            <hr/>
        @endforeach
    </body>
</html>