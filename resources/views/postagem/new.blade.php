<html>
    <head>
        <title>Nova Postagem</title>
    </head>
    <body>
        <form method="post">
            @csrf
            Título: <input type="text" name="titulo"/>
            Texto: <textarea name="texto"></textarea>
            <button>Salvar</button>
        </form>
    </body>
</html>