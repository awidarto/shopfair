<?php

class Shop_Controller extends Base_Controller {

	/*
	|--------------------------------------------------------------------------
	| The Default Controller
	|--------------------------------------------------------------------------
	|
	| Instead of using RESTful routes and anonymous functions, you might wish
	| to use controllers to organize your application API. You'll love them.
	|
	| This controller responds to URIs beginning with "home", and it also
	| serves as the default controller for the application, meaning it
	| handles requests to the root of the application.
	|
	| You can respond to GET requests to "/home/profile" like so:
	|
	|		public function action_profile()
	|		{
	|			return "This is your profile!";
	|		}
	|
	| Any extra segments are passed to the method as parameters:
	|
	|		public function action_profile($id)
	|		{
	|			return "This is the profile for user {$id}.";
	|		}
	|
	*/

	public $restful = true;

	public function __construct(){
		//$this->filter('before','auth');
		$this->crumb = new Breadcrumb();
		$this->crumb->add('shop','Shop');
	}

	public function get_index($product, $merchant)
	{
		$tracker = new Tracker();
		$product = new Product();
	}

	public function get_aff($product, $merchant)
	{
		$tracker = new Tracker();
		$products = new Product();

		$p = $products->get(array('_id'=>new MongoId($product)));
		
		$t = array();

		$t['productinfo'] = $p;
		$t['userclick_timestamp'] = new MongoDate();
		$t['merchant_id'] = $merchant;

		$sess = Str::random(15);
		$t['session'] = $sess;
		$t['flowstatus'] = 'redirected';

		$tracker->insert($t);


	}