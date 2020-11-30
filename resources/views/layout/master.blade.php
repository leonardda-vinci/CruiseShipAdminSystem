<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Cruise Ship Administration System</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>


<body>
  <nav class="white" role="navigation">
        <div class="nav-wrapper container ">
            <ul class="right hide-on-med-and-down">
                <li><a href="/amenities">Home</a></li>
            </ul>

            <!-- Mobile -->
            <ul id="nav-mobile" class="sidenav">
                <li><a href="/amenities">Home</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        </div>
    </nav>


@yield('content')


  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Group Bio</h5>
          <p class="grey-text text-lighten-4">Speeds up development | User Experience Focused | Easy to work with | This project is for CIT17 section CITCS 3C-2 </p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Group 1 ( Using UI  - Paralax Template)</a>
      </div>
    </div>
  </footer>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/js/materialize.js"></script>
  <script src="/js/init.js"></script>
  </body>
</html>
