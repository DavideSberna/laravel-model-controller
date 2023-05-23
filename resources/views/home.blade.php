

@extends('layouts.app')
@section('content')
    <section class="bg-dark">
        <div class="container">
            <div class="row">
                @foreach ( $movies as $movie)
                    <div class="col-sm-12 col-md-3 pt-4">
                        <div class="card">
                            <div>
                                <img src="{{$movie->image}}" class="card-img-top card-image" alt="Immagine">
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <a href="{{ route('show', ['id' => $movie->id]) }}" class="btn btn-primary">Dettagli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
