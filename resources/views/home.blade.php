<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <style>
        body {
            background-color: black;
            font-family: 'CustomFont', sans-serif; /* Applying the custom font to the body */
        }

        @font-face {
            font-family: 'CustomFont'; /* Declaring the custom font */
            src: url('{{ asset("font/SWEET_REVENGE.otf") }}') format('opentype'); /* Path to the font file */
        }

        
    </style>
</head>
<body>
    @include('layouts.header')
</body>
</html>
