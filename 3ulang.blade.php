<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for while dowhile</title>
</head>
<body>
    <h1>Perulangan For:</h1>
    <ul>
        @foreach ($for as $nilai)
            <li>{{ $nilai }}</li>
        @endforeach
    </ul>

    <h1>Perulangan While:</h1>
    <ul>
        @foreach ($while as $nilai)
            <li>{{ $nilai }}</li>
        @endforeach
    </ul>

    <h1>Perulangan Do-While:</h1>
    <ul>
        @foreach ($doWhile as $nilai)
            <li>{{ $nilai }}</li>
        @endforeach
    </ul>
</body>
</html>