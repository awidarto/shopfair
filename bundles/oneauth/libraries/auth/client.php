<?php 
namespace OneAuth\Auth;
use \Mongovel\Model as MongoModel;

class Client extends MongoModel
{
	//public static $table = 'oneauth_clients';

	protected $_collection = 'oneauth_clients';

}