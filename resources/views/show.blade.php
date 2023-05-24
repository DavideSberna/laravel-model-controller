@extends('layouts.app')
@section('content')

    <section id="show-movie" class="bg-dark">
        <div class="container pt-5 pb-5 position-relative">
            <div class="absolute">
                <div class="row d-flex">
                    <div class="col-sm-12 col-md-4">
                        <div class="card border-0">
                            <div>
                                <img src="{{$movie->image}}" class="card-img-top" alt="Immagine">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div>
                            <div>
                                <h4 class="card-title text-white mt-2">{{$movie->title}}</h4>
                            </div>
                            <div>
                                <p class="text-white m-0 pt-1">Provenienza: {{$movie->nationality}}</p>
                                <p class="text-white m-0 pt-1">Data: {{$movie->date}}</p>
                                @for ($i = 0; $i < $stars; $i++)
                                  <i class="fa-solid fa-star text-warning"></i>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="media-q-position container pt-4 pb-4">
            <div class="mt-5">
                <div class="pt-5">
                    <h4>Titolo</h4>
                    <div>
                        <p>{{$movie->title}}</p>
                    </div>
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
