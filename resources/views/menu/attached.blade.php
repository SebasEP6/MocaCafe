<nav class="fixed-menu" id="menu">
  <a id="fix-menu-show" class="hidden">
    Moca Caf&eacute; <i class="fa fa-bars" aria-hidden="true"></i>
  </a>
  <ul>
    @if(Request::is('/'))
      <li><a href="/" class="fixed-menu-item active">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Inicio
      </a></li>
      <li><a href="/nosotros" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Nosotros
      </a></li>
      <li><a href="{{ route('gallery') }}" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Galer&iacute;a
      </a></li>
      <li><a href="{{ route('menu') }}" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Men&uacute;
      </a></li>
      <li><a href="/contacto" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Contacto
      </a></li>
    @elseif(Request::is('nosotros'))
      <li><a href="/" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Inicio
      </a></li>
      <li><a href="/nosotros" class="fixed-menu-item active">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Nosotros
      </a></li>
      <li><a href="{{ route('gallery') }}" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Galer&iacute;a
      </a></li>
      <li><a href="{{ route('menu') }}" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Men&uacute;
      </a></li>
      <li><a href="/contacto" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Contacto
      </a></li>
    @elseif(Request::is('contacto'))
      <li><a href="/" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Inicio
      </a></li>
      <li><a href="/nosotros" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Nosotros
      </a></li>
      <li><a href="{{ route('gallery') }}" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Galer&iacute;a
      </a></li>
      <li><a href="{{ route('menu') }}" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Men&uacute;
      </a></li>
      <li><a href="/contacto" class="fixed-menu-item active">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Contacto
      </a></li>
    @elseif(Request::is('galeria'))
      <li><a href="/" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Inicio
      </a></li>
      <li><a href="/nosotros" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Nosotros
      </a></li>
      <li><a href="{{ route('gallery') }}" class="fixed-menu-item active">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Galer&iacute;a
      </a></li>
      <li><a href="{{ route('menu') }}" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Men&uacute;
      </a></li>
      <li><a href="/contacto" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Contacto
      </a></li>
      @else
      <li><a href="/" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Inicio
      </a></li>
      <li><a href="/nosotros" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Nosotros
      </a></li>
      <li><a href="{{ route('gallery') }}" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Galer&iacute;a
      </a></li>
      <li><a href="{{ route('menu') }}" class="fixed-menu-item active">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Men&uacute;
      </a></li>
      <li><a href="/contacto" class="fixed-menu-item">
        <div class="txt-bg"><img src="/img/bg-one.png" class="bg-animation-txt"></div>
        Contacto
      </a></li>
    @endif
  </ul>
  <span></span>
  <a href="/" class="fixed-menu-logo"><img src="/img/white_logo.png" alt="Moca Caf&eacute;"></a>
</nav>