<?php

// app/Http/Controllers/TrackController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;

class TrackController extends Controller
{
    public function createFromJson(Request $request)
    {
        $data = json_decode(file_get_contents(public_path('tracks.json')), true);

        foreach ($data as $trackData) {
            Track::create([
                'name' => $trackData['name'],
                'album' => $trackData['album'],
                'album_id' => $trackData['album_id'],
                'track_id' => $trackData['track_id'],
            ]);
        }

        return response()->json(['message' => 'Tracks created successfully'], 200);
    }
}
