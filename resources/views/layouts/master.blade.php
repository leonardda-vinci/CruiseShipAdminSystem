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
    <div class="nav-wrapper/ container">
      <a id="logo-container" href="/templates" class="brand-logo">Group 1</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/templates/sign-in">Sign in</a></li>
      </ul>

      <ul class="right hide-on-med-and-down">
        <li><a href="/templates/about">About</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="/templates">Group 1</a></li>
        <li><a href="/templates/about">About</a></li>
        <li><a href="/templates/sign-in">Sign in</a></li>

      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>


@yield('content')


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/js/materialize.js"></script>
  <script src="/js/init.js"></script>
  </body>
</html>
