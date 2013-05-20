@layout('publicdeals')

@section('content')
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

<div class="row">
  <div class="todaysauction">
    <div class="row">
      <div class="large-6 columns">
        <div class="dealsitem">
          {{ HTML::image('images/products/6.png','',array('class'=>'')) }}
        </div>
      </div>

      <div class="large-6 columns">
        <div class="auctiondetails">
          <span>Today’s Auction:</span>
          <h1>BLACKBERRY Z10</h1>
          <div class="timeleftauction">
            <span>00<span class="secondticking">:</span> 10 <span class="secondticking">:</span> 00 <span class="secondticking">:</span> 00 </span> <span class="timeleftpar">TIME LEFT</span>
          </div>
          <a class="joinauction button mainbuttonshopfair" href="#">JOIN THE AUCTION</a>
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
  <h1 class="titleshopfair">#SHOPFAIRMONDAY</h1>
  <div class="row">
    <div class="large-6 columns">
      <div class="dealsitem">
      <a href="">
      <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days and 20 hours</span></h2>
      {{ HTML::image('images/products/4.png','',array('class'=>'')) }}
      </a>
      </div>
    </div>
    <div class="large-6 columns">
      <div class="dealsitem">
      <a href="">
      <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days and 20 hours</span></h2>
      {{ HTML::image('images/products/5.png','',array('class'=>'')) }}
      </a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="large-3 columns">
      <div class="dealsitem">
      <a href="">
      <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days and 20 hours</span></h2>
      {{ HTML::image('images/products/1.png','',array('class'=>'')) }}
      </a>
      </div>
    </div>
    <div class="large-3 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days and 20 hours</span></h2>
        {{ HTML::image('images/products/2.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
    <div class="large-3 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days and 20 hours</span></h2>
        {{ HTML::image('images/products/3.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
    <div class="large-3 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days and 20 hours</span></h2>
        {{ HTML::image('images/products/1.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="large-3 columns">
      <div class="dealsitem">
      <a href="">
      <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days and 20 hours</span></h2>
      {{ HTML::image('images/products/1.png','',array('class'=>'')) }}
      </a>
      </div>
    </div>
    <div class="large-3 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days and 20 hours</span></h2>
        {{ HTML::image('images/products/2.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
    <div class="large-3 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days and 20 hours</span></h2>
        {{ HTML::image('images/products/3.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
    <div class="large-3 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days and 20 hours</span></h2>
        {{ HTML::image('images/products/1.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="large-2 columns">
      <div class="dealsitem">
      <a href="">
      <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days</span></h2>
      {{ HTML::image('images/products/1.png','',array('class'=>'')) }}
      </a>
      </div>
    </div>
    <div class="large-2 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days</span></h2>
        {{ HTML::image('images/products/2.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
    <div class="large-2 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days</span></h2>
        {{ HTML::image('images/products/3.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
    <div class="large-2 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days</span></h2>
        {{ HTML::image('images/products/1.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
    <div class="large-2 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days</span></h2>
        {{ HTML::image('images/products/1.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
    <div class="large-2 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days</span></h2>
        {{ HTML::image('images/products/1.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="large-2 columns">
      <div class="dealsitem">
      <a href="">
      <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days</span></h2>
      {{ HTML::image('images/products/1.png','',array('class'=>'')) }}
      </a>
      </div>
    </div>
    <div class="large-2 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days</span></h2>
        {{ HTML::image('images/products/2.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
    <div class="large-2 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days</span></h2>
        {{ HTML::image('images/products/3.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
    <div class="large-2 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days</span></h2>
        {{ HTML::image('images/products/1.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
    <div class="large-2 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days</span></h2>
        {{ HTML::image('images/products/1.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
    <div class="large-2 columns">
      <div class="dealsitem">
        <a href="">
        <h2>Cuts 35 L’Agencies<br/><span class="timer">sale ends in 4 days</span></h2>
        {{ HTML::image('images/products/1.png','',array('class'=>'')) }}
        </a>
      </div>
    </div>
  </div>

</div>
</div>
@endsection