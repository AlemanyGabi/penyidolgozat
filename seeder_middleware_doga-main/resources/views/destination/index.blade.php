<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach ( $Destinations as $Destination)
    @csrf
    <div>{{$Destination -> destination}}</div>
    @if(auth()->check() && auth()->user()->is_User == 1)
    <form action="{{ route('destination.show', $Destination->id) }}" method="GET">
        @csrf
        <button type="submit">idk</button>
    </form>
    @endif
    @endforeach
</body>
</html>