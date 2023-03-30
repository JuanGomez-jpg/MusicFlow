<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/formulario.css') }}">
    <script type="text/javascript" src="{{ asset('js/img.js') }}"></script>
    <title>Edit Album</title>
</head>
<body>
    <h1>Edit Album</h1>
    <div class="form">
        <form action="/albums/{{$album->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')

            @if ($errors -> any())
                <div class="aler alert-danger">
                    <ul>
                        @foreach ($errors -> all() as $err)
                            <li> {{ $err }} </li>
                        @endforeach
                    </ul>
            @endif

            <label for="albumName">Nombre</label><br>
            <input type="text" name="albumName" id="albumName" value="{{ old('albumName') ?? $album -> albumName }}">
            <br>
            <label for="artistName">Nombre del artista</label><br>
            <input type="text" name="artistName" id="artistName" value="{{ old('artistName') ?? $album -> artistName }}">
            <br>
            <label for="year">Año</label><br>
            <input type="number" name="year" id="year" value="{{ old('year') ?? $album -> year }}">
            <br>
            <label for="genre">Género</label><br>
            <input type="text" name="genre" id="genre" value="{{ old('genre') ?? $album -> genre }}">
            <br>
            <label for="coverImg">Cover</label><br>
            <input type="file" name="coverImg" id="coverImg" value="" onChange="loadFile(event)">
            <br>
            <!-- <img id="output" style="display: block;" src="data:image/jpeg;base64,{{ base64_encode($album -> coverName) }}" alt="img" width="300" height="300" /> -->
            <img id="output" style="display: block;" src="{{ asset('storage/images/'.$album->coverImg) }}" alt="{{ $album->coverImg }}" height="300" width="300" />
            <br>
            <input type="submit" id="Boton" value="Guardar">
        </form>
    </div>
</body>
</html>