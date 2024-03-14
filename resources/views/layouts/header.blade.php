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
            align-items: center;
        }

        .tabsfirst {
            font-size: 35px;
            padding-left: 270px;
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
        <div class="tabsfirst" onclick="redirectToArtists()">ARTISTS</div> <!-- Added onclick attribute -->
    
        <div class="tabs">ABOUT US</div>
        <div class="tabs">CONTACTS</div>
    </div>
    
    <script>
        // Function to redirect to the all artists page
        function redirectToArtists() {
            // Replace 'all-artists.html' with the actual URL of your all artists page
            window.location.href = 'artists';
        }
    </script>
</body>
</html>
