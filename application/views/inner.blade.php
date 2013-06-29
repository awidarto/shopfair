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
    {{ HTML::style('css/jquery.simplecolorpicker.css') }}

    {{ HTML::script('js/foundation/vendor/custom.modernizr.js') }}
    {{ HTML::script('js/jquery-1.8.3.min.js') }}
    {{ HTML::script('js/jquery.elevateZoom-2.5.5.min.js') }}

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

<div class="row show-for-large">
    <div class="large-3 columns">
        <div class="boxcontainer">
            <div class="box-inner">
                <h4>SUBSCRIBE</h4>
                <input type="text" name="usrname">
                <input type="submit" value="SUBSCRIBE" class="submitsubscribe">
                <span class="descbox">Subscribe to keep updated with Shopfair latest news.</span>
            </div>

            <div class="box-inner">
                <h4>CONNECT</h4>
                {{ HTML::image('images/connect.png','shopfair',array('class'=>'')) }}
            </div>
        </div>
    </div>

    <div class="contentinner large-9 columns">
        @yield('content')    
    </div>


</div>
<div class="row show-for-medium-down">
    <div class="contentinner large-12 columns">
        @yield('content')    
    </div>
</div>
<div class="row show-for-medium-down">
    <div class="large-12 columns">
        <div class="boxcontainer">
            <div class="box-inner">
                <h4>SUBSCRIBE</h4>
                <input type="text" name="usrname">
                <input type="submit" value="SUBSCRIBE" class="submitsubscribe">
                <span class="descbox">Subscribe to keep updated with Shopfair latest news.</span>
            </div>

            <div class="box-inner">
                <h4>CONNECT</h4>
                {{ HTML::image('images/connect.png','shopfair',array('class'=>'')) }}
            </div>
        </div>
    </div>
</div>
<!--
    @yield('sponsorshome')
-->


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



{{ HTML::script('js/jquery.smartWizard-2.0.js') }}
<script>
$(document).foundation();
</script>

{{ HTML::script('js/jquery.simplecolorpicker.js') }}

</body>
</html>