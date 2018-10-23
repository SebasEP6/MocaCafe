@extends('layout')

@section('body')
    <section>
      <img src="/img/coffee-one.png" alt="Moca Caf&eacute;" id="bg-coffee-one">
      <img src="/img/coffee-two.png" alt="Moca Caf&eacute;" id="bg-coffee-two">
      <div class="section" id="coffee">
        <div class="selection">
          <div class="category category-principal">
            <a href="/menu/grupo">
              <img src="/img/Menu/cafe.jpg">
              <span class="bg"></span>
              <span class="text">Caf&eacute;</span>
            </a>
          </div>
          <div class="category category-principal">
            <a href="/menu/grupo">
              <img src="/img/Menu/cafemoca.jpg">
              <span class="bg"></span>
              <span class="text">Caf&eacute; Moca</span>
            </a>
          </div>
          <div class="category category-principal">
            <a href="/menu/grupo">
              <img src="/img/Menu/cafefrappe.jpg">
              <span class="bg"></span>
              <span class="text">Caf&eacute; Frappe</span>
            </a>
          </div>
        </div>
      </div>
      <div class="section" id="dessert">
        <div class="selection">
          <div class="category category-secondary">
            <a href="/menu/grupo">
            <img src="/img/Menu/merengadas.jpg">
              <span class="bg"></span>
              <span class="text">Merengada</span>
            </a>
          </div>
          <div class="category category-secondary">
            <a href="/menu/grupo">
              <img src="/img/Menu/cafefrappe.jpg">
              <span class="bg"></span>
              <span class="text">Caf&eacute; fr&iacute;o</span>
            </a>
          </div>
          <div class="category category-secondary">
            <a href="/menu/grupo">
              <img src="/img/Menu/cafefrappe.jpg">
              <span class="bg"></span>
              <span class="text">Caf&eacute; fr&iacute;o gourmet</span>
            </a>
          </div>
          <div class="category category-secondary">
            <a href="/menu/grupo">
              <img src="/img/Menu/merengadas.jpg">
              <span class="bg"></span>
              <span class="text">Bebidas</span>
            </a>
          </div>
        </div>
      </div>
      <div class="section" id="cakes">
        <div class="selection">
          <div class="category category-principal">
            <a href="/menu/grupo">
              <img src="/img/Menu/pancuadrado.jpg">
              <span class="bg"></span>
              <span class="text">Pan cuadrado</span>
            </a>
          </div>
          <div class="category category-principal">
            <a href="/menu/grupo">
              <img src="/img/Menu/postre.jpg">
              <span class="bg"></span>
              <span class="text">Postre</span>
            </a>
          </div>
          <div class="category category-principal">
            <a href="/menu/grupo">
              <img src="/img/Menu/sandwich.jpg">
              <span class="bg"></span>
              <span class="text">Sandwich</span>
            </a>
          </div>
        </div>
      </div>
    </section>
@endsection