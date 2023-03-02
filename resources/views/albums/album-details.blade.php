<!DOCTYPE html>
<html lang="en">
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
            <img src="data:image/jpeg;base64,{{ base64_encode($album->coverName) }}" height="300" width="300" />
                <br><br><b> {{ $album -> albumName }}</b>
                <br>{{ $album -> year }}
                <br>{{ $album -> genre }}
                <br>
                <a href="/albums/" class="button">Inicio</a>
                <a href="/albums/{{ $album->id }}/edit" class="button">Editar</a>
        </div>
    </div>
    </div>
</body>
</html>