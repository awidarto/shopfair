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
      <li><a href="{{ URL::to('shop/sales') }}">SALES</a></li>
      <li><a >//</a></li>
      <li><a href="{{ URL::to('shop/auction') }}">AUCTION</a></li>
      <li><a >//</a></li>
      <li><a href="{{ URL::to('reader/article/shopfair-festival') }}">FESTIVAL</a></li>
      <li><a >//</a></li>
      <li><a href="{{ URL::to('reader/article/shopfair-festival') }}">SHOPPING TIPS</a></li>
    </ul>
  </section>
</nav>
@endsection