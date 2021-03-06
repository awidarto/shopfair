<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>{{ Config::get('site.title') }}</title>

  <!-- Included CSS Files -->
  {{ HTML::style('css/foundation.min.css') }}
  {{ HTML::style('css/jquery-datatables/demo_table.css') }}
  {{ HTML::style('css/flick/jquery-ui-1.9.2.custom.min.css') }}
  {{ HTML::style('css/app.css') }}
  {{ HTML::style('css/general_enclosed_foundicons.css') }}
  {{ HTML::style('css/general_foundicons.css') }}

  {{ HTML::style('css/jquery.tagsinput.css') }}
  {{ HTML::style('css/select2.css') }}
  {{ HTML::style('css/jquery.fancybox.css') }}


  {{ HTML::script('js/jquery-1.8.3.min.js') }}
  {{ HTML::script('js/jquery-ui-1.9.2.custom.min.js') }}

  {{ HTML::script('js/jquery.dataTables.min.js') }}

  {{ HTML::script('js/underscore-1.1.5.js') }}

  {{ HTML::script('js/jquery.tagsinput.min.js') }}
  {{ HTML::script('js/select2.min.js') }}

  {{ HTML::script('js/jquery.fancybox.js') }}


  <!--[if lt IE 8]>
    {{ HTML::style('css/general_enclosed_foundicons_ie7.css') }}
  <![endif]-->
</head>
<body>

  <!-- Header and Nav -->
  <header class="row mainheader">
    
      <h1 id="paramanusaLogo" class="six columns">{{ Config::get('site.title') }}</h1>

  </header>

  <!-- End Header and Nav -->
  <!-- Main Grid Section -->


    <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->
    <nav class="top-bar main-bar">

      @yield('topnav');

    </nav>
          
    <div class="row container-content clearfix">

        @yield('sidenav')

        <div id="maincontent" class="eight columns">
          @if(isset($crumb))
            {{ $this->crumb->generate() }}
          @endif

            @if (Session::has('notify_success'))
              <div class="alert-box">
                {{Session::get('notify_success')}}
                <a href="" class="close">&times;</a>
              </div>
            @endif

            @yield('content')
        </div>
        <aside class="three columns">

            @yield('tagcloud')
            @yield('messages')

        </aside>
    </div>


  <!-- Footer -->


  <footer class="row">
    
      <hr />
        <p>&copy; Copyright 2012. ParamaNusa.</p>
    
  </footer>
    {{ HTML::script('js/jquery.foundation.forms.js') }}
    <script type="text/javascript">
      base = '{{ URL::base() }}/';
    </script>
    {{ HTML::script('js/pnu.js') }}

</body>
</html>
