@layout('publichome')

@section('content')
<div class="row">

<div class="greatdeals">
  <h1 class="titleshopfair">FEATURED SALES</h1>
  <div class="row">
    <div class="large-9 columns">
      @foreach($deals as $m)
        <div class="large-4 columns">
          <div class="dealsitem">
            <a href="{{$m['affiliateURL']}}">
              <h2>{{ $m['name']}}<br/><span class="price">IDR {{ $m['salePrice']}} </span></h2>
              <img src="{{ URL::base().'/storage/products/'.$m['_id'].'/med_pic0'.$m['defaultpic'].'.jpg' }}" alt="{{ $m['name']}}" class=""  />
            </a>
          </div>
        </div>  
      @endforeach

    </div>
    <div class="large-3 columns">
      <div class="panel banner-box-placeholder"></div>
      <div class="panel banner-box-placeholder"></div>
    </div>

  </div>

</div>
</div>
@endsection