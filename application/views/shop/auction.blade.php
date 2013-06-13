@layout('publicdeals')

@section('content')

<!-- 
<div class="row">
  <div class="auction">
    <ul class="auctiontimeline">
      <li class="months">MAY</li>
      <li> <a class="active" href="#">WEEK 1</a></li>
      <li> <a href="#">WEEK 2</a></li>
      <li> <a href="#">WEEK 3</a></li>
      <li> <a href="#">WEEK 4</a></li>

      <li class="months">JUN</li>
      <li> <a href="#">WEEK 1</a></li>
      <li> <a href="#">WEEK 2</a></li>
      <li> <a href="#">WEEK 3</a></li>
      <li> <a href="#">WEEK 4</a></li>

      <li class="months">JUL</li>
      <li> <a href="#">WEEK 1</a></li>
      <li> <a href="#">WEEK 2</a></li>
      <li> <a href="#">WEEK 3</a></li>
      
    </ul>
  </div>
</div>

-->

<div class="row">
  <div class="todaysauction">
    <div class="row">
      <?php

        $m = array_pop($auctions);
      ?>
      <div class="large-6 columns">

        <div class="dealsitem">
          <a href="{{ URL::to('auction/detail/'.$m['_id'])}}" >
            <h2>{{ $m['name']}}<br/>
              <span class="price">Starting IDR {{ $m['startingPrice']}} </span>
              <br />
              <span class="merchant">by ShopFair</span>
            </h2>
              <img src="{{ URL::base().'/storage/auctions/'.$m['_id'].'/wide_pic0'.$m['defaultpic'].'.jpg' }}" alt="{{ $m['name']}}" class=""  />
          </a>
        </div>

      </div>


      <div class="large-6 columns">
        <div class="auctiondetails">
          <span>Today’s Auction:</span>
          <h1>{{ $m['name']}} </h1>
          <div class="timeleftauction">
            <span>00<span class="secondticking">:</span> 10 <span class="secondticking">:</span> 00 <span class="secondticking">:</span> 00 </span> <span class="timeleftpar">TIME LEFT</span>
          </div>
          <a data-reveal-id="myModal" class="joinauction button mainbuttonshopfair" href="{{ URL::to('auction/detail/'.$m['_id'])}}">JOIN THE AUCTION</a>
          <p>How to participate?</br>
            - Fill in some database</br>
            - Use your twitter and then mention us</br>
          </p>
        </div>
      </div>

    </div>  
  </div>
</div>



<div class="row">

<div class="greatdeals shopfairmonday">

  <h1 class="titleshopfair">#NEXT AUCTIONS</h1>
  <div class="row">
    @foreach($auctions as $m)
      <div class="large-3 columns">
        <div class="dealsitem">
          <a href="{{ URL::to('auction/detail/'.$m['_id'])}}" >
            <h2>{{ $m['name']}}<br/>
              <span class="price">Starting IDR {{ $m['startingPrice']}} </span>
              <br />
              <span class="merchant">by ShopFair</span>
            </h2>
            <img src="{{ URL::base().'/storage/auctions/'.$m['_id'].'/med_pic0'.$m['defaultpic'].'.jpg' }}" alt="{{ $m['name']}}" class=""  />
          </a>
        </div>
      </div>  
    @endforeach
  </div>

  

</div>
</div>
@endsection