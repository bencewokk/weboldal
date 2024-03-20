<?php

// app/Http/Controllers/ArtistController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use Illuminate\Support\Facades\Response;

class ArtistController extends Controller
{

    public function showRandomArtist()
    {
        // Retrieve a random artist from the database
        $randomArtist = Artist::inRandomOrder()->first();

        // Pass the random artist ID to the 'home' view and return the view
        return view('home', ['randomArtistId' => $randomArtist->pictureId]);
    }
    public function createFromJson(Request $request)
    {
        $data = json_decode(file_get_contents(public_path('artists.json')), true);

        foreach ($data as $artistData) {
            Artist::create([
                'name' => $artistData['name'],
                'pictureId'=> $artistData['pictureId'],

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
