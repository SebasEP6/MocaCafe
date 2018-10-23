@extends('layout')

@section('body')
<section>
  <img src="/img/coffee-one.png" alt="Moca Caf&eacute;" id="bg-coffee-one">
  <img src="/img/coffee-two.png" alt="Moca Caf&eacute;" id="bg-coffee-two">
  <div class="section">
    <div class="box box-right" id="first-box">
      <div class="bg-home"></div>
      <div class="title">
        <h1>Moca Caf&eacute;</h1>
      </div>
      <div class="body">
        <p>
          Moca Caf&eacute; nace del trabajo de tres generaciones dedicadas a la producci&oacute;n y servicio de un buen caf&eacute;, especializados en la parte agr&oacute;noma, industrial y comercial del &aacute;rea cafetera. Contamos con treinta a&ntilde;os de experiencia sembrando y cosechando del caf&eacute; en tierras larenses.
        </p>
        <br>
        <p>
          Catorce a&ntilde;os tostando y empaquetando caf&eacute; puro y de calidad, y seis a&ntilde;os sirviendo excelentes tazas de caf&eacute; con est&aacute;ndares de calidad certificadas por SCAE (Speciality Coffe Association of Europe), acompa&ntilde;ados de exquisitos postres y platos salados.
        </p>
      </div>
    </div>
    <div class="img">
      <img src="/img/mc-logo.png" alt="Moca Caf&eacute;" id="about-logo" class="hidden">
    </div>
    <div class="box box-right" id="second-box">
      <div class="bg-home"></div>
      <div class="body">
        <p>
          En Moca Caf&eacute; sabemos lo importante que es disfrutar de un buen caf&eacute;. Una taza de esta deliciosa bebida aporta maravillosas bondades a nuestra salud, pues adem&aacute;s de ser un extraordinario antioxidante, ayuda a prevenir enfermedades, nos mantiene despiertos y dispuestos, mejora nuestro metabolismo y es una excelente excusa para compartir un pl&aacute;cido momento con nuestros familiares y amigos.
        </p>
        <br>
        <p>
          Por eso, en Moca Caf&eacute; ponemos todo nuestro esfuerzo en obtener y ofrecer el mejor caf&eacute;, vigilando cada uno de los procesos, desde la siembra de las plantas hasta la extracci&oacute;n del m&aacute;s delicioso espresso para brindarles, sabores y aromas &uacute;nicos que s&oacute;lo encontrar&aacute;s en nuestro caf&eacute;
        </p>
      </div>
    </div>
    <div class="icons">
      <img src="/img/icon-3.png" alt="Coraz&oacute;n Derecha" class="heart icon" id="heart-three">
      <img src="/img/icon-2.png" alt="Coraz&oacute;n Izquierda" class="heart icon" id="heart-two">
      <img src="/img/icon-3.png" alt="Coraz&oacute;n Derecha" class="heart icon" id="heart-one">
      <img src="/img/cup.png" alt="Caf&eacute; y torta" id="cake" class="icon">
    </div>
    <div class="box" id="third-box">
      <div class="bg-home"></div>
      <div class="body">
        <p>
          El caf&eacute; Villanueva, es un caf&eacute; 100% venezolano, de la especie ar&aacute;bica, cosechado en el Municipio Mor&aacute;n, Edo. Lara, en terrenos en pendiente con una altitud comprendida entre los 1.100 y 1.300 m.s.n.m, en las variedades: caturra, catutai y colombia. Es un caf&eacute; arom&aacute;tico, medio en amargor y cuerpo, bajo en acidez. De taza limpia, libre de olores y sabores extra&ntilde;os, con aromas y notas florales y achocolatadas.
        </p>
      </div>
    </div>
    <div class="img">
      <img src="/img/villanueva.png" alt="Moca Caf&eacute;" id="coffe-about">
    </div>
  </div>
  <!-- <div class="section">
    <div class="prom" id="s-prom">
      <div class="element s-active">
        <div class="bg"></div>
        <div class="prom-pic test-prom"></div>
        <div class="prom-attr">
          <h3 class="prom-name">Evento</h3>
          <p class="prom-decp">
            En esta area se presentar&aacute; un breve resumen del curso o evento
          </p>
          <a href="/nuevo" class="call pull-right">Ver m&aacute;s...</a>
        </div>
      </div>
      <div class="element">
        <div class="bg"></div>
        <div class="prom-pic test-prom"></div>
        <div class="prom-attr">
          <h3 class="prom-name">Promoci&oacute;n</h3>
          <p class="prom-decp">
            En esta area se presentar&aacute; un breve resumen de la promoci&oacute;n
          </p>
          <a href="/nuevo" class="call pull-right">Ver m&aacute;s...</a>
        </div>
      </div>
      <a href="#" id="prev" class="arrows"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
      <a href="#" id="next" class="arrows"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
    </div> -->
  </div>
  <div class="section">
    <div class="box box-contact pull-left">
      <div class="bg"></div>
      <div class="title">
        <h2>Escr&iacute;benos</h2>
      </div>
      {!! Form::open(['route' => 'mailer', 'method' => 'post']) !!}
        <div class="input-group">
          <label for="name">Nombre:</label>
          {!! Form::text('name', null) !!}
        </div>
        <div class="input-group">
          <label for="email">Correo:</label>
          {!! Form::email('email', null) !!}
        </div>
        <div class="input-group">
          <label for="body">Mensaje:</label>
          {!! Form::textarea('body', null) !!}
        </div>
        <button type="submit" class="btn">Enviar</button>
      {!! Form::close() !!}
    </div>
    <div class="box box-contact box-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.4337472634334!2d-69.29596238570747!3d10.063500674700053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e876764a76c779b%3A0xee0dd63c1e58b12b!2sMoca+Caf%C3%A9!5e0!3m2!1ses-419!2sve!4v1483709590868" width="48%" height="235" frameborder="0" style="border:0" allowfullscreen></iframe>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.363960756954!2d-69.30314468570748!3d10.069234274602358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e876770b857902f%3A0x8025e44f478dcdc2!2sMOCA+CAF%C3%89+21!5e0!3m2!1ses-419!2sve!4v1483722352178" width="48%" height="235" frameborder="0" style="border:0" allowfullscreen></iframe>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.4478806642383!2d-69.31921158565672!3d10.062339092808456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e876713da53980b%3A0x5cbefaaf6b6dff3d!2sMoca+Caf%C3%A9!5e0!3m2!1ses-419!2scl!4v1519500930922" width="48%" height="235" frameborder="0" style="border:0" allowfullscreen></iframe>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1298.3401630136493!2d-69.2821994050858!3d10.077737117997732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e875d79310afa2d%3A0x478f6e8535c068f6!2sMoca+Caf%C3%A9!5e0!3m2!1ses-419!2scl!4v1519501243928" width="48%" height="235" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>
@endsection