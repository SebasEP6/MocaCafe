@extends('layout')

@section('body')
<section>
  <img src="/img/coffee-one.png" alt="Moca Caf&eacute;" id="bg-coffee-one">
  <img src="/img/coffee-two.png" alt="Moca Caf&eacute;" id="bg-coffee-two">
  @foreach($albums as $album)
  <div class="section">
    <div class="section-title">
      <h2>{{ $album->album }}</h2>
    </div>
    <div class="album">
      @foreach($album->photos as $photo)
      <a id="{{ $photo->id }}">
        <img src="{{ 'http://admin.dev/storage/' . $photo->img }}">
      </a>
      @endforeach
    </div>
  </div>
    @foreach($album->photos as $photo)
    <div class="modal" id="modal-{{ $photo->id }}">
      <div class="modal-img" title="{{ $photo->caption }}">
        <img src="{{ 'http://admin.dev/storage/' . $photo->img }}">
      </div>
    </div>
    @endforeach
  @endforeach
</section>
@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function () {
    $('.album').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true
    });
  });
</script>
@endsection