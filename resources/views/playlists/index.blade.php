@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-6">
            <h2>Playlists</h2>
        </div>
        <div class="col-6">
            <form action="#">

                <div class="row">
                    <div class="col-7">
                        <div class="input-group">
                            <span class="input-group-text">🔎</span>
                            <input type="text" class="form-control" placeholder="Search in playlists" aria-label="Search playlists">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="dropdown float-end">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Most relevant
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Most relevant</a></li>
                                <li><a class="dropdown-item" href="#">Recently played</a></li>
                                <li><a class="dropdown-item" href="#">Recently added</a></li>
                                <li><a class="dropdown-item" href="#">Alphabetical</a></li>
                                <li><a class="dropdown-item" href="#">Custom</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card bg-primary text-white playlist promoted">
                <div class="card-body">
                    <p class="card-text">
                        <span>Oasis</span> <span class="song-title">Slide away</span> &middot;
                        <span>Oasis</span> <span class="song-title">Cigarettes and alcohol</span> &middot;
                        <span>Oasis</span> <span class="song-title">Bring it on down</span>
                    </p>
                    <h5 class="card-title">Liked songs</h5>
                    <h6 class="card-subtitle mb-2">1907 liked songs</h6>
                </div>
            </div>
        </div>
        <div class="col-3">

            <div class="card playlist">
                <img src="/images/your-episodes.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Your episodes</h5>
                    <h5 class="card-subtitle">1 Episode</h5>
                </div>
            </div>

        </div>
        <div class="col-3">

            <div class="card playlist">
                <img src="/images/live-forever.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Live forever 2022</h5>
                    <h5 class="card-subtitle">Now that's what I call a playlist</h5>
                </div>
            </div>

        </div>
    </div>


    <div class="row">

        <div class="col-3">

            <div class="card playlist">
                <img src="https://i.scdn.co/image/ab67616d0000b2733804f59392452edd9c2b46b8" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Read all about it</h5>
                    <h5 class="card-subtitle">By Nathan Woodhouse</h5>
                </div>
            </div>

        </div>   

        <div class="col-3">

            <div class="card playlist">
                <img src="https://i.scdn.co/image/ab67616d0000b2737282412ad025c14f7039f516" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ultimate</h5>
                    <h5 class="card-subtitle">By Nathan Woodhouse</h5>
                </div>
            </div>

        </div>  
        
        <div class="col-3">
            <div class="card playlist">
                <img src="https://mosaic.scdn.co/640/ab67616d0000b273164edf20ddc765dff82d95cdab67616d0000b27321d6c05fca73459518ad0731ab67616d0000b2738f5636c9f7c8e432f81fe29aab67616d0000b273a26cbcb0de79a523e83a6b1d" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Work songs</h5>
                    <h5 class="card-subtitle">By Nathan Woodhouse</h5>
                </div>
            </div>
        </div>  

        <div class="col-3">

            <div class="card playlist">
                <img src="https://i.scdn.co/image/ab67706c0000bebb4f7148535931afae1fce3681" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Chill out</h5>
                    <h5 class="card-subtitle">Mellow tunes for relaxing</h5>
                </div>
            </div>

        </div>  
        
        <div class="col-3">

            <div class="card playlist">
                <img src="https://mosaic.scdn.co/640/ab67616d0000b27326ee43659ded2ab2d73566e2ab67616d0000b273417b2d21ee4149114063220bab67616d0000b27357d3d629e987c214329e0e8aab67616d0000b273c2decdb0e3ad934ad512abdd" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">More movie soundtracks</h5>
                    <h5 class="card-subtitle">Great films</h5>
                </div>
            </div>

        </div>  

    </div>

@endsection