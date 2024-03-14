<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use Illuminate\Database\QueryException;

class AlbumController extends Controller
{
    public function createFromJson(Request $request)
    {
        $data = json_decode(file_get_contents(public_path('albums.json')), true);

        try {
            foreach ($data as $albumData) {
                Album::create([
                    'name' => $albumData['name'],
                    'artist' => $albumData['artist'],
                    'artist_id' => $albumData['artist_id'],
                    'release_date' => $albumData['release_date'],
                    'cover_id' => $albumData['cover_id'],
                ]);
            }
        } catch (QueryException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json(['message' => 'Albums created successfully'], 200);
    }
}
