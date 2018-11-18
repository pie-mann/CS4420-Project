<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Game Ranker')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: fixed;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .well {
                float: left;
                width: 33.33%;
                padding-bottom: 50px;
            
            }


            .m-b-md {
                margin-bottom: 120px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Game Ranker
                </div>
                <div class="games">
                    @if(count($games) > 1)
                        @foreach($games as $game)
                            <div class="well">
                                <img src={{$game->image}}>
                                <h3 style="text-align:center;">{{$game->title}}</h3>
                                <h3 style="text-align:center;">Popularity: {{$game->instances}}</h3>
                                <a href="{{ url('/') }}">Read more</a>
                            </div>
                        @endforeach
                    @else
                        <p>No Games Found!</p>
                    @endif
                    
                </div>
            </div>
        </div>
    </body>
</html>
