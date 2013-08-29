<!DOCTYPE html>
<html>
  <head>
    <title>{{ Config::get('site.title')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    {{ HTML::style('css/foundation/normalize.css') }}
    {{ HTML::style('css/foundation/foundation.css') }}
    {{ HTML::style('css/select2.css') }}
    {{ HTML::style('css/flick/jquery-ui-1.9.2.custom.min.css') }}
    {{ HTML::style('css/smart_wizard.css') }}
    {{ HTML::style('css/shopfront.css') }}
    {{ HTML::style('content/css/icomoon.css') }}
    {{ HTML::style('css/general_enclosed_foundicons.css') }}

    {{ HTML::script('js/foundation/vendor/custom.modernizr.js') }}
    {{ HTML::script('js/jquery-1.8.3.min.js') }}

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">



  </head>
  <body>

    @yield('topnav')

    <div class="row show-for-medium-up" style="width:1168px;">
        <div id="featured" class="large-9 columns">
            <a href="{{ URL::to('reader/article/'.$poster['slug'])}}">
                <img src="{{ URL::base().'/storage/articles/'.$poster['_id'].'/poster_land_pic0'.$poster['homeposterpic'].'.jpg' }}" alt="{{ $poster['title']}}" />
            </a>

        <!--
            <div class="titlefeatured">
              <h1>{{ $poster['title']}}</h1>
              <p>{{ $poster['shorts'] }}</p>
              <a class="button mainbuttonshopfair round" href="{{ URL::to('reader/article/'.$poster['slug'])}}" >MORE</a>
            </div>
        -->
        </div>
        <div id="auction-featured" class="large-3 columns">

            @yield('accordion')
        </div>
    </div>

    <div class="row show-for-small">
        <div id="featured" class="large-12 columns">
            <a href="{{ URL::to('reader/article/'.$poster['slug'])}}">
                <img src="{{ URL::base().'/storage/articles/'.$poster['_id'].'/poster_land_pic0'.$poster['homeposterpic'].'.jpg' }}" alt="{{ $poster['title']}}" />
            </a>
        </div>
    </div>     

    <br>

<?php
/*


    <div class="row-fluid">
        <div id="featured" class="large-12 columns">
            <a href="{{ URL::to('reader/article/'.$poster['slug'])}}">
                <img src="{{ URL::base().'/storage/articles/'.$poster['_id'].'/poster_land_sa_pic0'.$poster['homeposterpic'].'.jpg' }}" alt="{{ $poster['title']}}" />
            </a>
        </div>
    </div>     
    <div class="row">
        <div class="large-12 columns" id="poster-body">

            {{ $poster['bodycopy']}}

        </div>
    </div>


*/

?>

     
    <!-- 
    <div class="row">
        <div class="large-12 columns">

            <div class="twittertimeline">
                {{ HTML::image('images/twitIco.png','shopfairtwitter',array('class'=>'')) }}
                <span><a href="#">@ShopFairID</a> Penyerapan Belanja Pemerintah Ditargetkan Capai 50 Persen - Republika Online http://dlvr.it/3L63Zl </span>
            </div>

            <div class="row">

            </div>

        </div>
    </div>
    -->


    @yield('content')

    @yield('festivalhome')

    @yield('sponsorshome')
     
    <!-- Footer -->
    @yield('footer')

    {{ HTML::script('js/jquery-ui-1.9.2.custom.min.js') }}
  
    {{ HTML::script('js/jquery.dataTables.min.js') }}

    {{ HTML::script('js/foundation/foundation/foundation.js') }}
    {{ HTML::script('js/foundation/foundation/foundation.alerts.js') }}
    {{ HTML::script('js/foundation/foundation/foundation.clearing.js') }}
    {{ HTML::script('js/foundation/foundation/foundation.cookie.js') }}
    {{ HTML::script('js/foundation/foundation/foundation.dropdown.js') }}
    {{ HTML::script('js/foundation/foundation/foundation.forms.js') }}
    {{ HTML::script('js/foundation/foundation/foundation.joyride.js') }}
    {{ HTML::script('js/foundation/foundation/foundation.magellan.js') }}
    {{ HTML::script('js/foundation/foundation/foundation.orbit.js') }}
    {{ HTML::script('js/foundation/foundation/foundation.placeholder.js') }}
    {{ HTML::script('js/foundation/foundation/foundation.reveal.js') }}
    {{ HTML::script('js/foundation/foundation/foundation.section.js') }}
    {{ HTML::script('js/foundation/foundation/foundation.tooltips.js') }}
    {{ HTML::script('js/foundation/foundation/foundation.topbar.js') }}

    

    {{ HTML::script('js/select2.min.js') }}
    {{ HTML::script('js/jquery.smartWizard-2.0.js') }}
    <script>
    $(document).foundation();
    </script>

  </body>
</html>