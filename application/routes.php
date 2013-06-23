<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|       Route::get('hello', function()
|       {
|           return 'Hello World!';
|       });
|
| You can even respond to more than one URI:
|
|       Route::post(array('hello', 'world'), function()
|       {
|           return 'Hello World!';
|       });
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|       Route::put('hello/(:any)', function($name)
|       {
|           return "Welcome, $name.";
|       });
|
*/

Route::controller(array('register','track','connect','shop','shoppers','shopper','merchants','feed','reader','sponsors','news','articles','carts','auctions','promotions','products','report','import','export','dashboard','user','users','message','search','activity','category','content','ajax'));

Route::get('/',function(){
    if(Auth::check()){
        if(Auth::user()->role == 'root' || Auth::user()->role == 'super' || Auth::user()->role == 'exhibitionadmin'){
           return Redirect::to('dashboard');
        }else if(Auth::user()->role == 'onsite' || Auth::user()->role == 'cashier'){
           return Redirect::to('onsite');
        }else{
            return Redirect::to('shop');
        }
    }else{
       return Redirect::to('shop');
    }
});

Route::get('shop',array('uses'=>'shop@home'));

Route::get('shopping',array('uses'=>'shop@sales'));

Route::get('feeds/(:any?)/(:any?)',array('uses'=>'feed@feeds'));

Route::get('auction',array('uses'=>'shop@auction'));

Route::get('auction/detail/(:any?)',array('uses'=>'shop@auctiondetail'));

Route::get('cps',function(){
    $getvar = Input::all();
    $att = new Attendee();
    //$gatewayhost = get_domain(Request::server('http_referer'));
    $gatewayhost = get_domain(Request::server('http_referer'));
    //$gatewayhost = 'dyandratiket.com';
    if($gatewayhost == Config::get('kickstart.payment_host')){
        if(isset($getvar['statuscode']) && $getvar['statuscode'] == '00'){
            if(isset($getvar['no_invoice'])){
                $attendee = $att->get(array('regsequence'=>$getvar['no_invoice']));
                /*$idatt = $attendee['_id']->__toString();
                $co = new Checkout();
                $datacount = $co->count(array('attendee_id'=>$idatt));
                $dataresult = $co->find(array('attendee_id'=>$idatt),array(),array('_id'=> -1),array(1, $datacount-1));
                return Response::json($dataresult);*/
                if(isset($attendee['conventionPaymentStatus'])) {
                    $regtype = $attendee['regtype'];

                    // if golf false
                    if(isset($attendee['conventionPaymentStatus']) && $attendee['golfPaymentStatus']=='-' ) {
                        
                        $att->update(array('regsequence'=>$getvar['no_invoice']),array('$set'=>array('conventionPaymentStatus'=>'processing (cc)','payonline'=>'true')));
                        
                        $body = View::make('email.receiptcc')->with('data',$attendee)->render();

                        Message::to($attendee['email'])
                        ->from(Config::get('eventreg.reg_admin_email'), Config::get('eventreg.reg_admin_name'))
                        ->cc(Config::get('eventreg.reg_admin_email'), Config::get('eventreg.reg_admin_name'))
                        ->subject('ONLINE PAYMENT RECEIPT - Indonesia Petroleum Association – 37th Convention & Exhibition (Registration – '.$attendee['registrationnumber'].')')
                        ->body( $body )
                        ->html(true)
                        ->send();
                    
                    }else{

                        $att->update(array('regsequence'=>$getvar['no_invoice']),array('$set'=>array('conventionPaymentStatus'=>'processing (cc)','golfPaymentStatus'=>'processing (cc)','payonline'=>'true')));

                        $body = View::make('email.receiptcc')->with('data',$attendee)->render();

                        Message::to($attendee['email'])
                        ->from(Config::get('eventreg.reg_admin_email'), Config::get('eventreg.reg_admin_name'))
                        ->cc(Config::get('eventreg.reg_admin_email'), Config::get('eventreg.reg_admin_name'))
                        ->subject('CONFIRMATION OF REGISTRATION - Indonesia Petroleum Association – 37th Convention & Exhibition (Registration – '.$attendee['registrationnumber'].')')
                        ->body( $body )
                        ->html(true)
                        ->send();
                    
                    }
                    
                    return Redirect::to('register/checkoutsuccess');

                }else{
                    return Redirect::to('register/checkoutfailed');
                    
                }

            }else{
                
                return Redirect::to('register/checkoutfailed');
                //return Response::json(array('status'=>'ERR','description'=>'incomplete parameter'));
            }

        }else{
            
            return Redirect::to('register/checkoutfailed');
            //return Response::json(array('status'=>'ERR','description'=>'incomplete parameter or transaction failed'));
        }

    }else{
        return Redirect::to('register/checkoutfailed');
        //return Response::json(array('status'=>'ERR','description'=>'invalid gateway host : '));
    }
});


Route::get('maintenance',function(){
    
    return View::make('maintenance');
});

Route::get('general',array('uses'=>'content@public'));

Route::get('signup',array('uses'=>'shopper@add'));
Route::post('register',array('uses'=>'shopper@add'));

Route::get('myprofile/edit',array('uses'=>'shopper@edit'));
Route::post('myprofile/edit',array('uses'=>'shopper@edit'));

Route::get('reset',array('uses'=>'shopper@reset'));
Route::post('reset',array('uses'=>'shopper@reset'));


Route::get('myprofile',array('uses'=>'shopper@profile'));

Route::get('paymentsubmitted',array('uses'=>'shopper@paymentsubmitted'));

Route::get('article/(:any)',array('uses'=>'reader@article'));
Route::get('news/(:any)',array('uses'=>'reader@news'));
Route::get('sponsor/(:any)',array('uses'=>'reader@sponsor'));

Route::get('hashme/(:any)',function($mypass){

    print Hash::make($mypass);
});

Route::get('companylist',function(){
    $attendee = new Attendee();

    $companies = $attendee->distinct('company');

    print_r($companies);
});

Route::get('normalize',array('uses'=>'attendee@updateField'));
Route::get('normalTotal',array('uses'=>'attendee@normalTotal'));

Route::get('pdftest',array('uses'=>'import@pdftest'));


// Auth routes

Route::get('commander/login', function()
{
    return View::make('auth.login');
});

Route::post('commander/login', function()
{
    // get POST data
    $username = Input::get('username');
    $password = Input::get('password');

    if ( $userdata = Auth::attempt(array('username'=>$username, 'password'=>$password)) )
    {
        //print_r($userdata);
        // we are now logged in, go to home
        return Redirect::to('/');

    }
    else
    {
        // auth failure! lets go back to the login
        return Redirect::to('commander/login')
            ->with('login_errors', true);
        // pass any error notification you want
        // i like to do it this way  
    }

});

Route::get('signin',array('uses'=>'shopper@login'));

Route::post('signin', function()
{
    // get POST data
    $username = Input::get('username');
    $password = Input::get('password');

    if ( $userdata = Auth::shopperattempt(array('username'=>$username, 'password'=>$password)) )
    {
        //print_r($userdata);
        // we are now logged in, go to home
        return Redirect::to('/');

    }
    else
    {
        // auth failure! lets go back to the login
        return Redirect::to('signin')
            ->with('login_errors', true);
        // pass any error notification you want
        // i like to do it this way  
    }

});

Route::get('outofthebox',array('uses'=>'shop@otb'));
Route::get('pickoftheweek',array('uses'=>'shop@pow'));
Route::get('oneofakind',array('uses'=>'shop@kind'));
Route::get('mixandmatch',array('uses'=>'shop@mixmatch'));

//Route::get('about',array('uses'=>'reader@article(about)'));

Route::get('about',function(){
    Redirect::to('reader/article/about');
});

Route::get('passwd', array('before'=>'auth',function(){
    return View::make('auth.password');
}));

Route::post('passwd', function()
{
    // get POST data
    $newpass = Input::get('pass');
    $chkpass = Input::get('chkpass');

    if ($newpass == $chkpass)
    {

        if(Auth::changepass($newpass)){
            return Redirect::to('user')->with('notify_success','Password changed.');            
        }

    }
    else
    {
        // auth failure! lets go back to the login
        return Redirect::to('passwd')
            ->with('newpass_errors', true);
        // pass any error notification you want
        // i like to do it this way  
    }

});


Route::get('logout',function(){
    Auth::logout();
    return Redirect::to('/');
});

Route::get('commander/logout',function(){
    Auth::logout();
    return Redirect::to('commander/login');
});


