<?php

use Illuminate\Support\Facades\Route;
use resources\views;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\ArtistController;

Route::get('/import', function () {
    $albumController = app(AlbumController::class);
    $artistController = app(ArtistController::class);
    $trackController = app(TrackController::class);
    
    // Pass an empty Request object
    $emptyRequest = new Illuminate\Http\Request();
    $artistController->createFromJson($emptyRequest);
    $albumController->createFromJson($emptyRequest);
    $trackController->createFromJson($emptyRequest);

    return redirect('home')->with('success', 'Data import completed successfully.');
});

Route::get('/home', [ArtistController::class, 'showRandomArtist']);;


Route::get('/artists', [ArtistController::class, 'showRandomArtist']);