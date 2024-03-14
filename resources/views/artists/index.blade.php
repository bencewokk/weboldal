<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Artists</title>
    <style>
        body {
            background-color: black;
            font-family: 'CustomFont', sans-serif; 
            color: azure;
        }

        @font-face {
            font-family: 'CustomFont'; 
            src: url('{{ asset("font/SWEET_REVENGE.otf") }}') format('opentype'); 
        }
    </style>
</head>
<body>
    @include('layouts.header')
    <h1>Random Artist</h1>
    <p>Randomly chosen artist: {{ $randomArtist }}</p>
</body>
</html>
