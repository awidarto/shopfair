<?php
/*
|--------------------------------------------------------------------------
| View Composers
|--------------------------------------------------------------------------
|
*/

View::composer('public',function($view){

    $view->nest('topnav','partials.publictopnav');
    $view->nest('footer','partials.footer');
    $view->nest('festivalhome','partials.festivalhome');
    $view->nest('sponsorshome','partials.sponsorshome');

});

View::composer('publichome',function($view){

    $view->nest('topnav','partials.publictopnav');
    $view->nest('accordion','partials.homeaccordion');
    $view->nest('footer','partials.footer');
    $view->nest('festivalhome','partials.festivalhome');
    $view->nest('sponsorshome','partials.sponsorshome');

});

View::composer('publicdeals',function($view){

    $view->nest('topnav','partials.publictopnav');
    $view->nest('footer','partials.footer');
    $view->nest('festivalhome','partials.festivalhome');
    $view->nest('sponsorshome','partials.sponsorshome');

});

View::composer('inner',function($view){

    $view->nest('topnav','partials.publictopnav');
    $view->nest('footer','partials.footer');
    $view->nest('sponsorshome','partials.sponsorshome');

});


View::composer('master',function($view){


    $view->nest('topnav','partials.topnav');
    $view->nest('sidenav','partials.sidenav');
    $view->nest('identity','partials.identity');

});

View::composer('noaside',function($view){

    $view->nest('topnav','partials.topnav');
    $view->nest('sidenav','partials.sidenav');
    $view->nest('identity','partials.identity');

});

?>