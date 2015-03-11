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
    <link rel="stylesheet" href='{{ URL::asset('assets/css/main.css') }}'>
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
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ecole</a>
                  <ul class="dropdown-menu" role="menu">
                    <li>{!! link_to_route('pages.show','Presentation', 'Ecole') !!}</li>
                    <li><a href={{ URL::to('/ecole/galeries') }}>Galeries</a></li>
                  </ul>
                </li>
                <li><a href="{{ URL::to('/events') }}">Evenements</a></li>
                <li>{!! link_to_route('pages.show','Stage', 'Stage') !!}</li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cours</a>
                  <ul class="dropdown-menu" role="menu">
                    <li>{!! link_to_route('pages.show','Presentation', 'Cours') !!}</li>
                    <li>{!! link_to_route('pages.show','Piano', 'Piano') !!}</li>
                    <li>{!! link_to_route('pages.show','Guitare', 'Guitare') !!}</li>
                    <li>{!! link_to_route('pages.show','Violon', 'Violon') !!}</li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
                <li>{!! link_to_route('pages.show','Tarifs', 'Tarifs') !!}</li>
                <li>{!! link_to_route('pages.show','Contact', 'Contact') !!}</li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li>{!! link_to_route('pages.index','Edit') !!}</li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
<header>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="img_header" src="assets/img/a.jpg" alt="Chania">
        </div>

        <div class="item">
          <img class="img_header" src="img_chania2.jpg" alt="Chania">
        </div>

        <div class="item">
          <img class="img_header" src="img_flower.jpg" alt="Flower">
        </div>

        <div class="item">
          <img class="img_header" src="img_flower2.jpg" alt="Flower">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</header>
        <div class="container">
            @yield('content')
        </div>

        <footer></footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>