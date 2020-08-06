<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mybbs</title>
</head>
<body>
    <h1>mybbs</h1>
    <p>{{ $message }}</p>
    @foreach ($articles as $article)
    <p>{{$article->content}}</p>
    @endforeach
</body>
</html>
