@extends('layout')

@section('body')
<section>
  <img src="/img/coffee-one.png" alt="Moca Caf&eacute;" id="bg-coffee-one">
  <img src="/img/coffee-two.png" alt="Moca Caf&eacute;" id="bg-coffee-two">
  <div class="section">
    <div class="box box-contact">
      <div class="bg"></div>
      <div class="title">
        <h2>
          Informaci&oacute;n de contacto:
        </h2>
      </div>
      <div class="body">
        <h4>Nueva Segovia</h4>
        <p>
          <i class="fa fa-map-marker" aria-hidden="true"></i> Calle 5 entre carreras 1 y 2. Barquisimeto 3001, Lara, Venezuela. <br>
          <i class="fa fa-phone" aria-hidden="true"></i> +58 251-2533243 <br>
          <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Horario: 8:00am - 8:00pm <br>
        </p>
        <h4>Carrera 21</h4>
        <p>
          <i class="fa fa-map-marker" aria-hidden="true"></i> Carrera 21 entre calles 9 y 10. Barquisimeto 3001, Lara, Venezuela. <br>
          <i class="fa fa-phone" aria-hidden="true"></i> +58 251-2679708 <br>
          <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Horario: 8:00am - 8:00pm <br>
        </p>
        <h4>Torre David</h4>
        <p>
          <i class="fa fa-map-marker" aria-hidden="true"></i> Carrera 21 entre calles 9 y 10. Barquisimeto 3001, Lara, Venezuela. <br>
          <i class="fa fa-phone" aria-hidden="true"></i> +58 251-2679708 <br>
          <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Horario: 8:00am - 8:00pm <br>
        </p>
        <h4>Trinitarias</h4>
        <p>
          <i class="fa fa-map-marker" aria-hidden="true"></i> Carrera 21 entre calles 9 y 10. Barquisimeto 3001, Lara, Venezuela. <br>
          <i class="fa fa-phone" aria-hidden="true"></i> +58 251-2679708 <br>
          <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Horario: 8:00am - 8:00pm <br>
        </p>
        <h4>Correo</h4>
        <p>
          <i class="fa fa-envelope-o" aria-hidden="true"></i> mocacafebqto@hotmail.com
        </p>
        <div class="social-contact pull-right">
          <a href="https://www.facebook.com/Moca-Caf%C3%A9-485682034786919/">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="https://twitter.com/mocacafebqto?lang=es">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="https://www.instagram.com/mocacafebqto/">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="box box-contact box-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.4337472634334!2d-69.29596238570747!3d10.063500674700053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e876764a76c779b%3A0xee0dd63c1e58b12b!2sMoca+Caf%C3%A9!5e0!3m2!1ses-419!2sve!4v1483709590868" width="100%" height="160" frameborder="0" style="border:0" allowfullscreen></iframe>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.363960756954!2d-69.30314468570748!3d10.069234274602358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e876770b857902f%3A0x8025e44f478dcdc2!2sMOCA+CAF%C3%89+21!5e0!3m2!1ses-419!2sve!4v1483722352178" width="100%" height="160" frameborder="0" style="border:0" allowfullscreen></iframe>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.4478806642383!2d-69.31921158565672!3d10.062339092808456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e876713da53980b%3A0x5cbefaaf6b6dff3d!2sMoca+Caf%C3%A9!5e0!3m2!1ses-419!2scl!4v1519500930922" width="100%" height="160" frameborder="0" style="border:0" allowfullscreen></iframe>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1298.3401630136493!2d-69.2821994050858!3d10.077737117997732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e875d79310afa2d%3A0x478f6e8535c068f6!2sMoca+Caf%C3%A9!5e0!3m2!1ses-419!2scl!4v1519501243928" width="100%" height="160" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
  <div class="section">
    <div class="box full-contact">
      <div class="bg"></div>
      <div class="title">
        <h2>Escr&iacute;benos</h2>
      </div>
      <div class="body">
        <p>
          * Nos encanta leer todas las sugerencias que nos puedas hacer llegar, ayud&aacute;ndonos a ofrecer siempre el mejor ambiente para usted.
        </p>
        {!! Form::open(['route' => 'mailer', 'method' => 'post']) !!}
          <div class="input-half-group">
            {!! Form::text('name', null, ['placeholder' => 'Nombre']) !!}
          </div>
          <div class="input-half-group">
            {!! Form::email('email', null, ['placeholder' => 'Correo']) !!}
          </div>
          <div class="input-group">
            {!! Form::text('subject', null, ['placeholder' => 'Asunto']) !!}
          </div>
          <div class="input-group">
            {!! Form::textarea('body', null, ['placeholder' => 'Mensaje']) !!}
          </div>
          <button type="submit" class="btn">Enviar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</section>
@endsection