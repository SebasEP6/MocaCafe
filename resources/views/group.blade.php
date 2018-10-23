@extends('layout')

@section('body')
    <section>
      <img src="/img/coffee-one.png" alt="Moca Caf&eacute;" id="bg-coffee-one">
      <img src="/img/coffee-two.png" alt="Moca Caf&eacute;" id="bg-coffee-two">
      <div class="section">
        <h1 class="menu-title">Carta</h1>
        <!-- @include('menu.items') -->
        <div class="menu-card">
          <!-- <div class="card-description">
            <p>Disponible &uacute;nicamente en la Carrera 21</p>
          </div> -->
          <ul>
            @foreach($items as $item)
            <li>
              <div class="item-img">
                <img src="{{ 'http://manager.mocacafe.com.ve/storage/' . $item->img }}" alt="{{ $item->item }}">
              </div>
              <h4>
                {{ $item->word() }} <br>
              </h4>
              <div class="item-price">
                <h6>
                  {{ $item->item }} <br>
                  {{ $item->price }} BsF
                </h6>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
      <a href="#" id="up-button" class="up-nav"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
    </section>
@endsection