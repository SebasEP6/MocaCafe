@extends('layout')

@section('body')
<section>
  <img src="/img/coffee-one.png" alt="Moca Caf&eacute;" id="bg-coffee-one">
  <img src="/img/coffee-two.png" alt="Moca Caf&eacute;" id="bg-coffee-two">
  <div class="section">
    <div class="box full-box">
      <div class="bg"></div>
      <div class="title">
        <h2>Quienes somos</h2>
      </div>
      <div class="body">
        <p>
          Moca Caf&eacute; nace del trabajo de tres generaciones dedicadas a la producci&oacute;n y servicio de un buen caf&eacute;, especializados en la parte agr&oacute;noma, industrial y comercial del &aacute;rea cafetera. Contamos con treinta a&ntilde;os de experiencia sembrando y cosechando del caf&eacute; en tierras larenses.
        </p>
        <br>
        <p>
          Catorce a&ntilde;os tostando y empaquetando caf&eacute; puro y de calidad, y seis a&ntilde;os sirviendo excelentes tazas de caf&eacute; puro y de calidad, acompa&ntilde;ados de exquisitos postres y platos salados elaborados por dos chefs de nuestro grupo familiar.
        </p>
      </div>
      <div id="about-moca">
        <img src="/img/moca-one.jpg" alt="Moca Caf&eacute;">
      </div>
    </div>
    <div class="box box-right animated" id="second-about">
      <div class="bg"></div>
      <div class="title">
        <h2>Postres</h2>
      </div>
      <div class="body">
        <p>
          Contamos con una increíble variedad de postres elaborados por Doña Norah Anzola, nuestra abuela repostera. Puedes encontrar postres tradicionales como el brownie con helado, así como también postres exclusivos de Moca creados basándonos en lo que nos solicita nuestra clientela, algunos de ellos son la torta Tres Sabores hecha a base de plátano, chocolate y queso y la torta Capioreo hecha a base de arequipe, chocolate y oreo.
        </p>
      </div>
      <div class="right-img">
        <img src="/img/moca-two.jpg" alt="Moca Caf&eacute;">
      </div>
    </div>
    <div class="box box-left animated" id="third-about">
      <div class="bg"></div>
      <div class="title">
        <h2>Baristas</h2>
      </div>
      <div class="body">
        <p>
          Nuestro personal debe pasar por un entrenamiento previo de al menos dos meses para garantizar que siempre podamos ofrecerte el excelente servicio que caracteriza a Moca. Poseemos certificación de calidad de la SCAE (Speciality Coffee Association of Europe) permitiéndonos realizar cursos para formar excelentes baristas.
        </p>
      </div>
      <div class="left-img">
        <img src="/img/moca.jpg" alt="Moca Caf&eacute;">
      </div>
    </div>
  </div>
  <div class="section">
    <div class="transition-box">
      <h2>Producci&oacute;n del Caf&eacute;</h2>
    </div>
    <div class="box box-left">
      <div class="bg"></div>
      <div class="title">
      	<h2>Producci&oacute;n</h2>
      </div>
      <div class="body">
      	<p>
      		Para asegurar la calidad del café que servimos contamos con más de veintiocho años produciendo café. Dentro del estado Lara.  De las variedades: Caturra, Catutai y Colombia. El cual es un café aromático, medio en amargor y cuerpo, bajo en acidez. <br>
      		El café florece en la temporada de lluvia comprendida entre los meses de abril y mayo para luego de siete a nueve meses convertirse en semilla. <br>
      		El beneficio del café es la serie de procesos por el cual pasa el grano hasta ser llevado a nuestros locales donde disfrutas de las mejores tazas de café Moca.
      	</p>
      </div>
    </div>
    <div class="box box-right">
      <div class="bg"></div>
      <div class="title">
      	<h2>Beneficio</h2>
      </div>
      <div class="body">
      	<ul>
      		<li><p><b>Recolección:</b> Por medio del método de “picking” se seleccionan los granos más maduros.</p></li>
      		<li><p><b>Lavado:</b> Los granos de café son ingresados a la despulpadora donde es removida la concha cereza y se elimina el mucílago.</p></li>
      		<li><p><b>Secado:</b> En esta fase se busca llevar el grano a una humedad de doce por ciento donde se nota una cascara amarilla llamada pergamino, aquí el café se encuentra listo para ser almacenado.</p></li>
      		<li><p><b>Tostado:</b> Es un proceso químico mediante calor donde el grano aumenta su tamaño y reduce su peso hasta llegar al nivel de tostado deseado. Así nuestro maestro tostador José Nayib Abraham nos garantiza el mejor sabor para el espresso.</p></li>
      	</ul>
      	<p>
      		Para abastecer nuestros locales se vuelve a realizar un proceso de selección, para luego el café ser trillado, tostado y molido.
      	</p>
      </div>
    </div>
  </div>
</section>
@endsection