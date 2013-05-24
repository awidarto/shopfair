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
      <div class="panel banner-box-placeholder">
        <div id="ox_d742ab4c907694d596335c2776c23f2b" style="display: inline;"><embed type="application/x-shockwave-flash" src="http://img.ads.kompas.com/ads4/12ec42ff63c1e2f2499dcca8725fb44d.swf" width="300" height="250" style="undefined" id="Advertisement" name="Advertisement" quality="high" wmode="transparent" allowscriptaccess="always" flashvars="alink1=http%3A%2F%2Fads4.kompasads.com%2Fnew%2Fwww%2Fdelivery%2Fck.php%3Foaparams%3D2__bannerid%3D16139__zoneid%3D869__cb%3D1b5319df4a__oadest%3Dhttp%253A%252F%252Fid.yamaha.com%252Fid%252Fnews_events%252Fmusic_education%252Fearly_registration_may13%252F&amp;atar1=_blank"></div>
      </div>
      <div class="panel banner-box-placeholder">
        {{ HTML::image('images/9022731344388409272.jpg','shopfairtwitter',array('class'=>'')) }}
      </div>
      <div class="panel banner-box-placeholder">
        <div id="ox_d742ab4c907694d596335c2776c23f2b" style="display: inline;"><embed type="application/x-shockwave-flash" src="http://img.ads.kompas.com/ads4/12ec42ff63c1e2f2499dcca8725fb44d.swf" width="300" height="250" style="undefined" id="Advertisement" name="Advertisement" quality="high" wmode="transparent" allowscriptaccess="always" flashvars="alink1=http%3A%2F%2Fads4.kompasads.com%2Fnew%2Fwww%2Fdelivery%2Fck.php%3Foaparams%3D2__bannerid%3D16139__zoneid%3D869__cb%3D1b5319df4a__oadest%3Dhttp%253A%252F%252Fid.yamaha.com%252Fid%252Fnews_events%252Fmusic_education%252Fearly_registration_may13%252F&amp;atar1=_blank"></div>
      </div>
    </div>

  </div>

</div>
</div>
@endsection