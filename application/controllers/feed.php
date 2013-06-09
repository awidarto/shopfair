<?php

class Feed_Controller extends Base_Controller {
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
	}

	public function get_feeds($feedtype = 'atom',$channel = 'news')
	{
		// feedtype : rss20, rss092 ,atom
		// channel : product, news, article

		$feed = Feed::make();

		$feed->logo(asset('img/logo.jpg'))
		     ->icon(URL::home().'favicon.ico')
		     ->webmaster('Shopfair.net')
		     ->author('Shopfair.net')
		     ->rating('SFW')
		     ->pubdate(time())
		     ->ttl(60)
		     ->title('Shopfair.net Feed')
		     ->description('Shopping at Shopfair.net')
		     ->copyright('(c) '.date('Y').' Shopfair.net')
		     ->permalink(URL::home().'/feed')
		     ->category('eCommerce')
		     ->language('en_EN')
		     ->baseurl(URL::home());

		// get latest 20 posts

		//$posts = Post::order_by('created_at','desc')->take(20)->get();

		$author = 'Shopfair.net';
		$slug = 'slug';
		$title = 'title';

		if ($channel == 'news') {
			$model = new News();
			$reader = 'reader@news';
		}else if($channel == 'article'){
			$model = new Articles();
			$reader = 'reader@article';
		}else{	
			$model = new Product();
			$reader = 'shop@detail';
			$slug = 'permalink';
			$title = 'name';
		}

		$limit = array(20,0);

		$feeds = $model->find(array(),array(),array('createdDate'=>-1),$limit);

		foreach ($feeds as $post) {
			$feed->entry()->published(date('Y-m-d H:i:s',$post['createdDate']->sec))
                ->content()->add('text', $post['description'])->up()
                ->content()->add('html', HTML::decode($post['bodycopy']).'<br><a href="'.action($reader, array($post[$slug])).'"><img src="" /></a>')->up()
                ->title()->add('text',$post[$title])->up()
                ->permalink(action($reader, array($post[$slug])))
                ->author()->name('By '.$author)->up()
                ->updated( date('Y-m-d H:i:s',$post['lastUpdate']->sec) );
		}

		if($feedtype == 'rss20'){
			$feed->Rss20();
		}elseif ($feedtype == 'rss092') {
			$feed->Rss092();
		}else{
			$feed->Atom();
		}
		// this is a shortcut for calling $feed->feed()->send(...);
		// you can also just $feed->Rss20(), Rss092() or Atom();		


	}

}

