<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/formulario.css') }}">
    <script type="text/javascript" src="{{ asset('storage/js/img.js') }}"></script>
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
            <input type="text" name="albumName" id="albumName" value="{{ old('albumName') }}">
            <br>
            <label for="artistName">Nombre del artista</label><br>
            <input type="text" name="artistName" id="artistName" value="{{ old('artistName') }}">
            <br>
            <label for="year">Año</label><br>
            <input type="number" name="year" id="year" value="{{ old('year') }}">
            <br>
            <label for="genre">Género</label><br>
            <input type="text" name="genre" id="genre" value="{{ old('genre') }}">
            <br>
            <label for="coverImg">Cover</label><br>
            <input type="file" name="coverImg" id="coverImg" onChange="loadFile(event)">
            <br>
            <img id="output" width="300" height="300" />
            <br>
            <input type="submit" id="Boton" value="Guardar">
        </form>
    </div>
</body>
</html>