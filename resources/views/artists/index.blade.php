@extends('layouts.main')

@section('content')

    <h1>
        Artists
    </h1>

    {{ $artists->links() }}

    <form action="{{ route('artists.index') }}" method="GET">
        <label>Search: </label>    
        <input type="text" name="search">

        <button>Search</button>
    </form>
    
    <ul>
        @foreach($artists as $artist)
            <li>
                <a href="{{ route('artists.show', $artist) }}">
                    {{ $artist->name }}

                    <strong>
                        {{ $artist->songs->count() }}
                    </strong>
                </a>
            </li>
        @endforeach
    </ul>

@endsection