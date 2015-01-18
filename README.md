PHP class for create and display flashmessages. It is created as a module for Anax-MVC, see https://github.com/mosbth/Anax-MVC.

By Yvonne I Johansson

License
--------------------

This software is free software and carries a MIT license.

History
-----------

How to use
--------------

First you need to add this module to your page controller:

	$di->setShared('flash', function() use ($di){
		$flash = new \Yvos\FlashMessages\CFlashMessage();
		$flash->setDi($di);
		return $flash;
	});
	


Composer
---------------------
Add yvonnej/flashmessages to your composer.json like this

	{
		"require": {
			 "yvonnj/flashmessages": "dev-master"
		 }
	 }
 


