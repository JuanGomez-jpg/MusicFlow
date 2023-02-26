<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/formulario.css') }}">
    <title>Create Albums</title>
</head>
<body>
    <h1>Create Album</h1>
    <div class="form">
        <form action="/albums" method="POST" enctype="multipart/form-data">
            @csrf

            @if ($errors -> any())
                <div class="aler alert-danger">
                    <ul>
                        @foreach ($errors -> all() as $err)
                            <li> {{ $err }} </li>
                        @endforeach
                    </ul>
            @endif

            <label for="albumName">Nombre</label><br>
            <input type="text" name="albumName" id="albumName">
            <br>
            <label for="year">Año</label><br>
            <input type="number" name="year" id="year">
            <br>
            <label for="genre">Género</label><br>
            <input type="text" name="genre" id="genre">
            <br>
            <label for="coverName">Cover</label><br>
            <input type="file" name="coverName" id="coverName">
            <br>
            <input type="submit" id="Boton" value="Guardar">
        </form>
    </div>
</body>
</html>