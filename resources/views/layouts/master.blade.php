<html>
<head>
    <title>
        <?= isset($title) ? $title : 'Mon super site' ?>
    </title>
    <meta charset="utf-8" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.2/css/material.css">--}}
</head>
<body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ URL::to('/') }}">Opus15</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('') }}">Accueil</a></li>
                <li class="dropdown">
                  <a href="{{ URL::to('/ecole') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ecole</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href={{ URL::to('/ecole/galeries') }}>Galeries</a></li>
                  </ul>
                </li>
                <li><a href="{{ URL::to('/evenements') }}">Evenements</a></li>
                <li>{!! link_to_route('pages.index','Pages') !!}</li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cours</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ URL::to('/cours/presentation') }}">presentation</a></li>
                    <li><a href="#">Violon</a></li>
                    <li><a href="#">Guitare</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
                <li><a href="{{ URL::to('/tarifs') }}">Tarifs</a></li>
                <li><a href="{{ URL::to('/contact') }}">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            @yield('content')
        </div>

        <footer></footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>