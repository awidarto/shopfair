@section('footer')
<footer class="row fullscreen">
  <div class="large-12 columns footercontent">
    
    <div class="row">
      <div class="large-2 columns">
        {{ HTML::image('images/logo2.png','',array('class'=>'logo-header')) }}<br/>
        <p style="font-size:0.7em;color:#9b9b9b;">&copy; 2013 SHOPFAIR<br/> ALL RIGHTS RESERVED</p>
        <a href="#">{{ HTML::image('images/twitt-btn.png','',array('class'=>'logo-header')) }}</a>
        <a href="#">{{ HTML::image('images/fb-btn.png','',array('class'=>'logo-header')) }}</a>
      </div>
      <div class="large-10 columns">
        <div class="row">
          <div class="large-3 columns">
            <ul class="">
              <li class="linktitle">ABOUT</li>
              <li><a href="#">MAIN SPONSORS</a></li>
              <li><a href="#">CO SPONSORS</a></li>
              <li><a href="#">SPONSORS</a></li>
              <li><a href="#">PARTNERS</a></li>
              <li><a href="#">MEDIA PARTNERS</a></li>
              <li><a href="#">CONTACT US + INFO FOR  EXHIBITORS</a></li>
              <li><a href="#">TERMS & CONDTION</a></li>
              <li><a href="#">PRIVACY POLICY</a></li>
          </div>
          <div class="large-3 columns">
            <ul class=" ">
              <li class="linktitle">WEEKLY DEALS</li>
              <li><a href="#">AUCTION</a></li>
              <li><a href="#">#SHOPFAIRMONDAY</a></li>
            </ul>
          </div>
          <div class="large-3 columns">
            <ul class=" ">
              <li class="linktitle">TODAY’S AUCTIONS</li>
              <li><a href="#">HOW TO PARTICIPATE</a></li>
              <li><a href="#">PROGRAMS</a></li>
            </ul>
          </div>
          <div class="large-3 columns">
            <ul class=" ">
              <li class="linktitle">SHOPFAIR FESTIVAL</li>
              <li><a href="#">PROGRAMS</a></li>
              <li><a href="#">LOCATIONS</a></li>
              <li><a href="#">ENTERTAINMENTS</a></li>
              <li><a href="#">MERCHANTS</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
@endsection