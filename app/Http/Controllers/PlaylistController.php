<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function index() {
        // TODO
        $playlists = [];
        $promoted = [];
        return view('playlists.index', compact('playlists', 'promoted'));
    }
}
