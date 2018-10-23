<nav class="main-menu">
  <ul>
    @if(Request::is('/'))
      <li><a href="/" class="nav-item active">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Inicio
      </a></li>
      <li><a href="/nosotros" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Nosotros
      </a></li>
      <li><a href="/galeria" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Galer&iacute;a
      </a></li>
      <li><a href="/menu" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Men&uacute;
      </a></li>
      <li><a href="/contacto" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Contacto
      </a></li>
    @elseif(Request::is('nosotros'))
      <li><a href="/" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Inicio
      </a></li>
      <li><a href="/nosotros" class="nav-item active">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Nosotros
      </a></li>
      <li><a href="/galeria" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Galer&iacute;a
      </a></li>
      <li><a href="/menu" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Men&uacute;
      </a></li>
      <li><a href="/contacto" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Contacto
      </a></li>
    @elseif(Request::is('contacto'))
      <li><a href="/" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Inicio
      </a></li>
      <li><a href="/nosotros" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Nosotros
      </a></li>
      <li><a href="/galeria" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Galer&iacute;a
      </a></li>
      <li><a href="/menu" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Men&uacute;
      </a></li>
      <li><a href="/contacto" class="nav-item active">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Contacto
      </a></li>
    @elseif(Request::is('galeria'))
      <li><a href="/" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Inicio
      </a></li>
      <li><a href="/nosotros" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Nosotros
      </a></li>
      <li><a href="/galeria" class="nav-item active">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Galer&iacute;a
      </a></li>
      <li><a href="/menu" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Men&uacute;
      </a></li>
      <li><a href="/contacto" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Contacto
      </a></li>
      @else
      <li><a href="/" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Inicio
      </a></li>
      <li><a href="/nosotros" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Nosotros
      </a></li>
      <li><a href="/galeria" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Galer&iacute;a
      </a></li>
      <li><a href="/menu" class="nav-item active">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Men&uacute;
      </a></li>
      <li><a href="/contacto" class="nav-item">
        <div class="txt-bg"><img src="/img/bg-two.png" class="bg-animation-txt"></div>
        Contacto
      </a></li>
    @endif
  </ul>
  <a href="/" class="nav-logo"><img src="/img/logo.png" alt="Moca Caf&eacute;"></a>
</nav>
<span></span>