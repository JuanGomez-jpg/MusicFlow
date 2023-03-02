<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/albums.css') }}">
    <title>Albums</title>
</head>
<body>
    <h1>Albums</h1>
    <div class="row">
    @foreach ($albums as $al)
    <div class="column">
        <div class="card">
            <img src="data:image/jpeg;base64,{{ base64_encode($al->coverName) }}" height="300" width="300" />
                <br><br><b> {{ $al -> albumName }}</b>
                <br>{{ $al -> year }}
                <br>{{ $al -> genre }}
                <br>
            <a href="/albums/{{ $al->id }}" class="button">Ver</a>
            <a href="/albums/{{ $al->id }}/edit" class="button">Editar</a>
        </div>
    </div>
    @endforeach
    </div>


</body>
</html>