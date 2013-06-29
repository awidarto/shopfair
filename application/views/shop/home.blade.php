@layout('publichome')

@section('content')

  <div class="row show-for-medium-up">

      @if(count($featured) > 0)
        <div class="greatdeals">
            <h1 class="titleshopfair">#FEATURED</h1>
            <div class="large-12 columns">

                @foreach($featured as $m)
                  <div class="large-2 columns">
                    <div class="dealsitem">
                      <a href="{{ URL::to('track/aff/'.$m['_id'])}}" target="_blank" >
                        <h2>{{ $m['name']}}<br/><span class="price">IDR {{ $m['salePrice']}} </span>
                          <br />
                            @if($m['affiliateMerchant'] == '')
                              <span class="merchant">by ShopFair</span>
                            @else
                              <span class="merchant">by {{ $m['affiliateMerchant'] }}</span>
                            @endif
                        </h2>
                        <img src="{{ URL::base().'/storage/products/'.$m['_id'].'/med_pic0'.$m['defaultpic'].'.jpg' }}" alt="{{ $m['name']}}" class=""  />
                      </a>
                    </div>
                  </div>  
                @endforeach
            </div>
        </div>
      @endif
  </div>
</div>
@endsection