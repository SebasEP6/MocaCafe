<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moca Caf&eacute;</title>
    <link href="https://fonts.googleapis.com/css?family=Caveat|Open+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/slick-theme.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    <header>
      @if(Request::is('/'))
        @include('header.home')
      @else
        @include('header.other')
      @endif
      @include('menu.social')
      @include('menu.main')
    </header>
    @include('menu.attached')

    @yield('body')

    <footer>
      <div>
        <div>

        </div>
        <div>

        </div>
        <div>
          <!-- <h6>Contacto</h6>
          <p>
            Barquisimeto 3001, Lara, Venezuela. <br>
            Calle 5 entre carreras 1 y 2<br>
            +58 251-2533243 <br>
            Carrera 21 entre calles 9 y 10<br>
            +58 251-2679708
          </p> -->
            <a href="/">
              <img src="/img/white_logo.png" alt="Moca Caf&eacute;" id="foot-logo">
            </a>
        </div>
        <div>
          <h5>&copy; moca Caf&eacute;</h5>
          <p>Todos los derechos reservados <br>
          Desarrollado por <a href="http://biglabs.com.ve" id="author">Biglabs</a> </p> <br>
          <a href="https://www.facebook.com/Moca-Caf%C3%A9-485682034786919/"><i class="fa fa-facebook" aria-hidden="true"></i> </a>
          <a href="https://twitter.com/mocacafebqto?lang=es"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
          <a href="https://www.instagram.com/mocacafebqto/"><i class="fa fa-instagram" aria-hidden="true"></i> </a>
        </div>
      </div>
    </footer>

    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    <script type="text/javascript" src="/slick/slick.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/home.js"></script>
    @yield('scripts')
  </body>
</html>
