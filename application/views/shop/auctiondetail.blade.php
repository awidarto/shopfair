@layout('publicdeals')

@section('content')

<div class="row">
  <div class="todaysauction">
    <div class="row">
      <?php

        $m = $auction;
      ?>
      <div class="large-6 columns">
        <div class="dealsitem">
          <img src="{{ URL::base().'/storage/auctions/'.$m['_id'].'/wide_pic0'.$m['defaultpic'].'.jpg' }}" alt="{{ $m['name']}}" class=""  />
        </div>
      </div>

      <div class="large-6 columns">
        <div class="auctiondetails">
          <h1>{{ $m['name']}} </h1>
          <span class="title-span">Auction Date :</span><span class="item-value"> {{ date('d-m-Y',$m['auctionDate']->sec )}}</span><br />
          <span class="title-span">Start at :</span><span class="item-value"> {{date('H:m', $m['auctionStart']->sec ) }}</span><br />
          <span class="title-span">Until :</span><span class="item-value"> {{date('H:m',$m['auctionEnd']->sec)}}</span>

          <div class="timeleftauction">
            <span>00<span class="secondticking">:</span> 10 <span class="secondticking">:</span> 00 <span class="secondticking">:</span> 00 </span> <span class="timeleftpar">TIME LEFT</span>
          </div>
          <span  data-reveal-id="myModal" class="joinauction button mainbuttonshopfair" href="{{ URL::to('auction/detail/'.$m['_id'])}}">JOIN THE AUCTION</span>

          <p>How to participate?</br>
            - Fill in some database</br>
            - Use your twitter and then mention us</br>
          </p>
        </div>
      </div>

    </div>  
  </div>
</div>


@endsection