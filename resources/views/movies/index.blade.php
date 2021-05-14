<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prova</title>
</head>
<body>
    <h1>Index</h1>
    @foreach ($movies as $movie)
        <h2><a href="{{ route('movies.show', ['movie' => $movie->id ] ) }}">{{ $movie->title }}</a></h2>
    @endforeach
    
</body>
</html>