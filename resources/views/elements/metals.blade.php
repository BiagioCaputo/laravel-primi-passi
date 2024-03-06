<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Metals</title>
</head>
<body>
    <h2><a href='{{ route('home')}}'>Torna alla home</a></h2>
    <h2>Lista Metalli alcalini</h2>
    @if (count($alkalines))
        <ul>
        @foreach($alkalines as $alkaline)
            <li>{{ $alkaline['name'] }}</li>
        @endforeach
        </ul>
    @else
        <h2>Non ci sono Metalli Alcalini</h2>
    @endif

    <h2>Lista Metalli Di Transizione</h2>
    @if (count($transitions))
        <ul>
        @foreach($transitions as $transition)
            <li>{{ $transition['name'] }}</li>
        @endforeach
        </ul>
    @else
        <h2>Non ci sono Metalli Di Transizione</h2>
    @endif
    
</body>
</html>
<style>
    *{
        text-align: center;
        list-style-type: none;
    }
</style>