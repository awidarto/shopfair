@section('sponsorshome')
  <div class="row">
    <div class="sponsorshome">
      <h1 class="titleshopfair">SPONSORS</h1>
      <div class="row">
        <ul id="sponsorlogolist">
        @foreach($sponsors as $s)
          <li>
            <a href="{{ URL::to('reader/sponsor/'.$s['slug']) }}">
              <img src="{{ URL::base().'/storage/sponsors/'.$s['_id'].'/splogo_pic0'.$s['defaultpic'].'.jpg' }}" alt="{{ $s['title']}}" class=""  />
            </a>
          </li>
        @endforeach
        </ul>
      </div>

      <div class="row centeralign">
      	<br/>
        <div id="ox_660f2ae4de6ade56785b339f061b82b6" style="display: inline;"><embed type="application/x-shockwave-flash" src="http://openx.detik.com/images/mandiri_supermarket-728x90_2.swf" width="728" height="90" style="undefined" id="Advertisement" name="Advertisement" quality="high" wmode="transparent" allowscriptaccess="always" flashvars="clickTARGET=_blank&amp;clickTAG=http%3A%2F%2Fopenx.detik.com%2Fdelivery%2Fck.php%3Foaparams%3D2__bannerid%3D45519__zoneid%3D1636__cb%3Dafc4e42ff0"></div><br/>
      </div>
    </div>
  </div>
@endsection