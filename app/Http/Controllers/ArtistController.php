<?php

// app/Http/Controllers/ArtistController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use Illuminate\Support\Facades\Response;

class ArtistController extends Controller
{

    public function getRandomArtist(Request $request)
    {
        $allArtists = Artist::all();
        
        if ($allArtists->isEmpty()) {
            return view('index', ['randomArtist' => 'No artists found']);
        }
        
        $randomArtist = $allArtists->random()->name; // Assuming the artist name is stored in a column called 'name'
        
        return view('artists.index', ['randomArtist' => $randomArtist]);
    }
    public function createFromJson(Request $request)
    {
        $data = json_decode(file_get_contents(public_path('artists.json')), true);

        foreach ($data as $artistData) {
            Artist::create([
                'name' => $artistData['name'],
            ]);
        }

        return response()->json(['message' => 'Artists created successfully'], 200);
    }

    public function index()
    {
        // Example: Fetching artists data from the Artist model
        $artists = Artist::all();
        return view('artists.index', ['artists' => $artists]);
    }
}
