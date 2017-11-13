<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/global.js"></script>


    @yield('style')

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-na">
                        <li><a href="{{ route('idea') }}" class="nav-link">L'idée</a></li>
                        <li><a href="{{ route('events') }}" class="nav-link">Evenements</a></li>
                        <li><a href="{{ route('teammembers') }}" class="nav-link">L'Equipe</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container main-container">
            <div class="row">
                @yield('content')
            </div>
        </div>

        @include('modals.newsletter')

        <footer class="container-fluid text-center">
            <div class="row">
                <div class="col-md-4">
                    <h3>&copy; {{ date('Y') }} - Les Ar(t)ogantes</h3>
                    
                    <a href="#myModal" data-toggle="modal"><span class="glyphicon glyphicon-envelope"></span> S'inscrire à la newsletter</a>
                </div>

                <div class="col-md-4 text-center">
                    <h3>Développement</h3>
                    <span style="padding: 10px;">Hugues Tchouala</span>
                </div>
                
                <div class="col-md-4 text-center">
                    <h3>Médias</h3>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>
