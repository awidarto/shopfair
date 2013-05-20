@section('topnav')
<nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
      <h1 class="logo">
        <a href="{{ URL::to('shop/home') }}">
          {{ HTML::image('images/logo.gif','shopfair',array('class'=>'logo-header')) }}
        </a>
      </h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
  </ul>

  <section class="top-bar-section">

    <ul class="right mainnav">
      <li><a href="{{ URL::to('reader/article/about') }}">ABOUT</a></li>
      <li><a >//</a></li>
      <li><a href="{{ URL::to('shop/deals') }}">WEEKLY DEALS</a></li>
      <li><a >//</a></li>
      <li><a href="#">TODAY'S AUCTION</a></li>
      <li><a >//</a></li>
      <li><a href="#">SHOPFAIR FESTIVAL</a></li>
      <li><a class="countfestival" href="#">30 DAYS LEFT TO FESTIVAL</a></li>
    </ul>
  </section>
</nav>
@endsection