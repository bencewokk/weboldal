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
        .container {
            display: flex;
            align-items: fixed;
            background-color: black;
        }

        .homologo {
            align-items:baseline;
        }

        .tabsfirst {
            padding-left: 170px;
            font-size: 35px;
            color: azure;
            cursor: pointer; /* Add cursor pointer for indicating clickability */
        }

        .tabs {
            font-size: 35px;
            padding-left: 100px;
            color: azure;
            cursor: pointer; /* Add cursor pointer for indicating clickability */

        }

        
    </style>
</head>
<body>
    <!-- Image with 'artists' text to the right -->
    <div class="container">
        <div class="homelogo">
            <img src="{{ asset('images/opiumhome.png') }}" alt="Opium Home" height="30">
        </div>
        <div class="tabs">ABOUT US</div>
        <div class="tabs"">CONTACTS</div>
    </div>
</body>
</html>
