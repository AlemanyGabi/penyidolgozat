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
    
    @endforeach
</body>
</html>