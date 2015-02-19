PHP class for create and display flashmessages. 
It is created as a module for Anax-MVC, see https://github.com/mosbth/Anax-MVC.
https://travis-ci.org/yvonnej/flashmessages.svg?branch=master

By Yvonne I Johansson

License
--------------------

This software is free software and carries a MIT license.

History
-----------
2015-01-21 - 1.0

* Uppdate flash.css
* CFlashMessage.php

How to use
--------------

First you need to add the flashmessages module to your pagecontroller (or your CDIFactoryDefault):

        $di->set('flash', function() use ($di){
            $flash = new \Yvos\FlashMessages\CFlashMessage();
            $flash->setDI($di);
            return $flash;
        });

Then you can use it to set message:

        $this->flash->error("This is an error message");

To retrieve messages:

        $this->flash->getMessage();
        
If you want to use my styling, copy flash.css from weboot to your css foleder and add this to your router:

$app->theme->addStyleSheet('css/flash.css');


Composer
---------------------
Add yvonnej/flashmessages to your composer.json like this:

{
            "require": {
                    "yvonnj/flashmessages": "dev-master"
                }
         }
 