
@extends('layouts.app')

@section('content')


<footer class="footer bg-dark">
        <div class="container pt-4 pb-4">
            <h4>Tutti i film</h4>
            @foreach ( $movies as $movie)
                <div class="text-center">
                    <p class="text-white">{{$movie->title}}</p>
                </div>
            @endforeach
        </div>
</footer>
@endsection

