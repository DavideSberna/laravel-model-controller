<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <section>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container">
                  <h1>Movie</h1>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse d-flex-md justify-content-md-between " id="navbarNavAltMarkup">
                    <ul class="navbar-nav d-flex m-0 pt-4 pb-4">
                        @foreach ($menuItems as $itemKey => $item)
                            <li class="li-hover ps-3 pe-3 position-relative">
                                @if (isset($item['route']))

                                <a class="nav-link" href="{{route($item['route'])}}">{{ $item['page'] }}</a>

                                @elseif(isset($item['subcategories']))

                                    <ul class="subcategories absolute ps-3 pe-5 pt-4 pb-2 rounded-1">
                                        @foreach ($item['subcategories'] as $subcategory)
                                            <li>
                                                <a class="nav-link" href="#">{{ $subcategory['genres'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>

                                @endif
                            </li>
                        @endforeach
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
        </section>
    </header>

    <main>
        @yield('content')
    </main>

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



</body>

</html>
