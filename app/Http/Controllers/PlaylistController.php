<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchPlaylistRequest;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class PlaylistController extends Controller
{
    public function index(SearchPlaylistRequest $request) {

        $params = $request->validated();
        $search = Arr::get($params, 'search', '');

        $query = Auth::user()->playlists();
        if ($search != '') {
            $query->matchSearch($search);
        }
        $playlists = $query->paginate(8)->withQueryString();
        $promoted = $playlists->pop();

        return view('playlists.index', compact('playlists', 'promoted', 'search'));
    }
}