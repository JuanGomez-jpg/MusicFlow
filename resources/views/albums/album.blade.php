<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title>
</head>
<body>
    <h1>Album</h1>

    @foreach ($albums as $al)
    <ul>
        <img src="data:image/png;base64,{{ chunk_split(base64_encode($al->cover)) }}" height="300" width="300" />
        <li> {{ $al -> albumName }} </li>
        <li> {{ $al -> year }} </li>
        <li> {{ $al -> genre }} </li>
        
    </ul>
    @endforeach

</body>
</html>