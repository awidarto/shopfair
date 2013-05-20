@layout('publichome')

@section('content')
<div class="row">

<div class="greatdeals">
  <h1 class="titleshopfair">GREAT DEALS</h1>
  <div class="row">
    @foreach($deals as $m)
      <div class="large-3 columns">
        <div class="dealsitem">
          <a href="{{$m['affiliateURL']}}">
            <h2>{{ $m['name']}}<br/><span class="price">IDR {{ $m['salePrice']}} </span></h2>
            <img src="{{ URL::base().'/storage/products/'.$m['_id'].'/med_pic0'.$m['defaultpic'].'.jpg' }}" alt="{{ $m['name']}}" class=""  />
          </a>
        </div>
      </div>  
    @endforeach
    
  </div>

</div>
</div>
@endsection