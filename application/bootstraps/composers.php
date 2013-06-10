<?php
/*
|--------------------------------------------------------------------------
| View Composers
|--------------------------------------------------------------------------
|
*/

View::composer('public',function($view){
    $sponsors = new Sponsor();

    $sponsorlist = $sponsors->find();

    $view->nest('topnav','partials.publictopnav');
    $view->nest('footer','partials.footer');
    $view->nest('festivalhome','partials.festivalhome');
    $view->nest('sponsorshome','partials.sponsorshome',array('sponsors'=>$sponsorlist) );

});

View::composer('publichome',function($view){

    $sponsors = new Sponsor();

    $sponsorlist = $sponsors->find();

    $view->nest('topnav','partials.publictopnav');
    $view->nest('accordion','partials.homeaccordion');
    $view->nest('footer','partials.footer');
    $view->nest('festivalhome','partials.festivalhome');
    $view->nest('sponsorshome','partials.sponsorshome',array('sponsors'=>$sponsorlist) );

});

View::composer('publicdeals',function($view){

    $sponsors = new Sponsor();

    $sponsorlist = $sponsors->find();

    $view->nest('topnav','partials.publictopnav');
    $view->nest('footer','partials.footer');
    $view->nest('festivalhome','partials.festivalhome');
    $view->nest('sponsorshome','partials.sponsorshome',array('sponsors'=>$sponsorlist) );

});

View::composer('inner',function($view){
    $sponsors = new Sponsor();

    $sponsorlist = $sponsors->find();

    $view->nest('topnav','partials.publictopnav');
    $view->nest('footer','partials.footer');
    $view->nest('sponsorshome','partials.sponsorshome',array('sponsors'=>$sponsorlist) );

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