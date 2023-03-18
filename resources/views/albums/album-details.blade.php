<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/albums.css') }}">
</head>
<body>
<h1>Album {{ $album->albumName }}</h1>
    <div class="row">
    <div class="column">
        <div class="card">
            <!-- <img src="data:image/jpeg;base64,{{ base64_encode($album->coverName) }}" height="300" width="300" /> -->
            <img src="{{ asset('storage/images/'.$album->coverImg) }}" height="300" width="300" />
                <br><br><b> {{ $album -> albumName }}</b>
                <br>{{ $album -> artistName }}
                <br>{{ $album -> year }}
                <br>{{ $album -> genre }}
                <br>
                <a href="/albums/" class="button">Inicio</a>
                <a href="/albums/{{ $album->id }}/edit" class="button">Editar</a><br>
                
                <form action="{{ route('albums.destroy', $album) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="buttonDelete">Eliminar</button>
                </form>

        </div>
    </div>
    </div>
</body>
</html>