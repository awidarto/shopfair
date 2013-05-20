@section('festivalhome')
<div class="row fullscreen festivalhome">
  <div class="large-12 columns festivalcontent">
    <div class="titlefestival">
      <div class="row">
      <div class="large-2 columns ">
        {{ HTML::image('images/shop-festival-logo.png','',array('class'=>'logo-header')) }}
      </div>
      <div class="large-10 columns ">
      <h1>JOIN SHOPFAIR FESTIVAL AT GRAND INDONESIA</h1>
      <h2>27 MAY - 2 JUNI 2013</h2>
      <h3>28 DAYS LEFT to FESTIVAL</h3>
      </div>
      </div>
    </div>
    <p>Whether you're packing for a short work trip or an extended getaway, Bric’s Luggage guarantees you’ll look good getting there. Whether you're packing for a short work trip or an extended getaway, Bric’s Luggage guarantees you’ll look good getting there. </p>
    <br/>
    <div class="row">
      <div class="large-4 columns ">
        {{ HTML::image('images/program-ico.png','',array('class'=>'logo-header')) }}<br/>
        <h3 class="subtitlefestival">LOCATION & PROGRAMS</h3>
        Whether you're packing for a short work trip or an extended getaway,<br/><a class="more" href="#">more</a>
      </div>
      <div class="large-4 columns ">
        {{ HTML::image('images/gallery-ico.png','',array('class'=>'logo-header')) }}<br/>
        <h3 class="subtitlefestival">GALLERY</h3>
        Whether you're packing for a short work trip or an extended getaway,<br/><a class="more" href="{{ URL::to('reader/article/gallery') }}">more</a>
      </div>
      <div class="large-4 columns ">
        {{ HTML::image('images/music-ico.png','',array('class'=>'logo-header')) }}<br/>
        <h3 class="subtitlefestival">ENTERTAINMENTS</h3>
        Whether you're packing for a short work trip or an extended getaway,<br/><a class="more" href="#">more</a>
      </div>
    </div>
    <br/>
    <br/>
    <div class="row merchanthome">
      <h3 class="subtitlefestival">MERCHANTS</h3>
      {{ HTML::image('images/merchants.png','',array('class'=>'logo-header')) }}<br/>
    </div>
  </div>
</div>
@endsection