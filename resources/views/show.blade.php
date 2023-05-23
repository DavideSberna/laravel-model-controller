@extends('layouts.app')
@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 pt-4">
                    <div class="card">
                        <div>
                            <img src="{{$movie->image}}" class="card-img-top card-image" alt="Immagine">
                        </div>
                        <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div>
                <h4>Titolo</h4>
                <div>
                    <p>{{$movie->title}}</p>
                </div>
            </div>
            <div>
                <h4>Descrizione</h4>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere perspiciatis debitis deserunt molestias assumenda eius ut quo dolorem neque corrupti, odio beatae ducimus harum consequatur dolores aspernatur pariatur laudantium, autem eveniet itaque, sunt doloribus. Consequuntur id voluptas recusandae dolor doloribus!</p>
                </div>
            </div>
        </div>
    </section>
@endsection
