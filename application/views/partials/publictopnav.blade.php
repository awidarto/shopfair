@section('topnav')
<nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
      <h1 class="logo">
        <a href="#">
          {{ HTML::image('images/logo.gif','shopfair',array('class'=>'logo-header')) }}
        </a>
      </h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
  </ul>

  <section class="top-bar-section">

    <ul class="right mainnav">
      <li><a href="#">ABOUT</a></li>
      <li><a >//</a></li>
      <li><a href="#">WEEKLY DEALS</a></li>
      <li><a >//</a></li>
      <li><a href="#">TODAY'S AUCITON</a></li>
      <li><a >//</a></li>
      <li><a href="#">SHOPFAIR FESTIVAL</a></li>
    </ul>
  </section>
</nav>
@endsection