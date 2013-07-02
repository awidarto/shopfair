@section('topnav')

<div class="row show-for-medium-up">
    <div class="large-2 columns">
        <a href="{{ URL::to('/') }}">
            <h1>{{ HTML::image('images/logo.gif','shopfair',array('class'=>'')) }}</h1>
        </a>
    </div>
    <div class="large-10 columns">
        <?php
            /*
            {{ HTML::image('images/banner_header.jpg','',array('class'=>'right bannerHeader show-for-medium-up')) }}<br/>
            */
        ?>
    </div>
</div>



<nav class="top-bar show-for-small">
    <ul class="title-area">
        <!-- Title Area -->
        <li class="name">
            <a href="{{ URL::to('/') }}">
                <h1>{{ HTML::image('images/mobile-logo.png','shopfair',array('class'=>'show-for-small')) }}</h1>
            </a>
        </li>
        <?php
        /*
            <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
        */
        ?>
    </ul>
<?php
/*

    <section class="top-bar-section">
        <ul class="right">
            <li><a href="{{ URL::to('shopping') }}">// SHOPPING</a></li>
            <li><a href="{{ URL::to('auction') }}">// AUCTION</a></li>
            <li><a href="{{ URL::to('reader/articles/events') }}">// EVENTS</a></li>
            <li><a href="{{ URL::to('reader/articles/tips') }}">// SHOPPING TIPS</a></li>

        @if(Auth::shoppercheck())
            @if(isset(Auth::shopper()->activeCart) && Auth::shopper()->activeCart != '')
                <li><a href="{{ URL::to('shop/cart') }}">// SHOPPING CART</a></li>
            @endif
            <li><a href="{{ URL::to('shop/confirm') }}">// CONFIRM</a></li>
            <li><a href="{{ URL::to('logout') }}">// LOG OUT</a></li>
        @else
            <li><a href="{{ URL::to('signup') }}">// SIGN UP</a></li>
            <li><a href="{{ URL::to('signin') }}">// SIGN IN</a></li>
        @endif
        </ul>
    </section>
*/
?>

</nav>
@endsection