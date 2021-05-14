<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prova</title>
</head>
<body>
    <h1>Show</h1>
    <h2>{{ $movie->title }}</h2>
    <p><a href="{{ route('movies.index') }}">Back</a></p>
    
</body>
</html>