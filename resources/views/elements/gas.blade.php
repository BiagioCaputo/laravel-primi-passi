<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gas</title>
</head>
<body>
    <h2><a href='{{ route('home')}}'>Torna alla home</a></h2>
    <h2>Lista gas</h2>
    @if (count($gas))
        <ul>
        @foreach($gas as $singlegas)
            <li>{{ $singlegas['name'] }}</li>
        @endforeach
        </ul>
    @else
        <h2>Non ci sono Gas</h2>
    @endif
</body>
</html>
<style>
    *{
        text-align: center;
        list-style-type: none;
    }
</style>