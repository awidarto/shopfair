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
    {{ HTML::image('images/banner_header.jpg','',array('class'=>'right bannerHeader')) }}<br/>
    <ul class="right mainnav mainavwithbanner">
      <li><a href="{{ URL::to('shopping') }}">SHOPPING</a></li>
      <li><a >//</a></li>
      <li><a href="{{ URL::to('auction') }}">AUCTION</a></li>
      <li><a >//</a></li>
      <li><a href="{{ URL::to('reader/articles/events') }}">EVENTS</a></li>
      <li><a >//</a></li>
      <li><a href="{{ URL::to('reader/articles/tips') }}">SHOPPING TIPS</a></li>

  @if(Auth::shoppercheck())
    @if(isset(Auth::shopper()->activeCart) && Auth::shopper()->activeCart != '')
      <li><a >//</a></li>
      <li><a href="{{ URL::to('shop/cart') }}">SHOPPING CART</a></li>
    @endif
      <li><a >//</a></li>
      <li><a href="{{ URL::to('shop/confirm') }}">CONFIRM</a></li>
      <li><a >//</a></li>
      <li><a href="{{ URL::to('logout') }}">LOG OUT</a></li>
  @else
      <li><a >//</a></li>
      <li><a href="{{ URL::to('signup') }}">SIGN UP</a></li>
      <li><a >//</a></li>
      <li><a href="{{ URL::to('signin') }}">SIGN IN</a></li>
  @endif


    </ul>
  </section>
</nav>
@endsection