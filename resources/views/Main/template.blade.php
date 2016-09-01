<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Student Pack - Manggala12.com</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ URL::to('assets/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ URL::to('assets/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="#">Subdomain</a></li>
        <li><a href="#">FTP</a></li>
        <li><a href="#">MySQL</a></li>
        <li><a href="#">Login</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Subdomain</a></li>
        <li><a href="#">FTP</a></li>
        <li><a href="#">MySQL</a></li>
        <li><a href="#">Login</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  @yield('content')


  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">manggala12.com</h5>
          <p class="grey-text text-lighten-4">
            Once upon a time, a graduate student from Informatic's ITS want to help his junior on homework. So, he create this website for publish his junior's work then the world can see their talent.
          </p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Link</h5>
          <ul>
            <li><a class="white-text" href="#!">FAQ</a></li>
            <li><a class="white-text" href="#!">Cara pemakaian</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Facebook</a></li>
            <li><a class="white-text" href="#!">Website</a></li>
            <li><a class="white-text" href="#!">WhatsApp (+62 852 5952 9798) </a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">manggala12.com</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ URL::to('assets/js/materialize.js')}}"></script>
  <script src="{{ URL::to('assets/js/init.js')}}"></script>

  </body>
</html>
