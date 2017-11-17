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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="/js/global.js"></script>


    @yield('style')

</head>

<body>

    <div id="app" class="app">
        <div class="container header">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="brand align-middle">Les ar.t.ogantes</h1>
                </div>

                <div class="col-md-3 logo">
                    <a href="/">
                        <img src="{{ Storage::url('logo.png') }}" width="100" />
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>

                <div class="col-md-3 " >
                    <nav class="navbar navbar-toggleable-md">
                        <div class="navbar-brand"></div>
                            
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="material-icons md-32">more_horiz</i>
                        </button>

                        <div class="collapse navbar-collapse show" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('idea') }}">l'idée</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('events-list') }}">les événements</a>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    l'équipe
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('teammember', [$teammember->id, $teammember->name]) }}">Camille</a>
                                        <a class="dropdown-item" href="{{ route('teammember', [$teammember->id, $teammember->name]) }}">Sophie</a>
                                    </div>
                                </li>
                            </ul>
                      </div>
                    </nav>
                </div>
            </div>
        </div>

        <footer class="container">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <p class="text-center">&copy; LES AR.T.OGANTES - {{ date('Y') }}</p>
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </footer>
    </div>

</body>
</html>
