<?php

namespace Yvos\FlashMessages;

/**
 * FlashMessage
 *
 */
class CFlashMessageTest extends \PHPUnit_Framework_TestCase {
	
	/**
	 * Test
	 *
	 *@return void
	 *
	 */
	public function testAddMessage() {
		
		$message = new \Yvos\FlashMessages\CFlashMessage();
		$di = new \Anax\DI\CDIFactoryDefault();
		$message->setDI($di);
		
		$di->setShared('session', function () {
			$session = new \Anax\Session\CSession();
			$session->configure(ANAX_APP_PATH . 'config/session.php');
            $session->name();
            //$session->start();
            return $session;
		});
		
		$m = "Testing message";
		$t = "Test";
		$message->addMessage($m, $t);
		$res = $message->getMessage();
		
		$exp = "<div id='flash'><p class='Test'>Testing message</p></div>";
		
		$this->assertEquals($exp, $res);
	}
	

	/**
	 *
	 * Test error
	 *
	 * @return 
	 */
	public function testError() {
		
		$message = new \Yvos\FlashMessages\CFlashMessage();
		$di = new \Anax\DI\CDIFactoryDefault();
		$message->setDI($di);
		
		$di->setShared('session', function () {
			$session = new \Anax\Session\CSession();
			$session->configure(ANAX_APP_PATH . 'config/session.php');
            $session->name();
            //$session->start();
            return $session;
		});
		
		$m = "Testing message";
		$message->error($m);
		$res = $message->getMessage();
		
		$exp = "<div id='flash'><p class='error'>Testing message</p></div>";
		
		$this->assertEquals($exp, $res);
	}
	
	
	/**
	 *
	 * Test success
	 *
	 * @return 
	 */
	public function testSuccess() {
		
		$message = new \Yvos\FlashMessages\CFlashMessage();
		$di = new \Anax\DI\CDIFactoryDefault();
		$message->setDI($di);
		
		$di->setShared('session', function () {
			$session = new \Anax\Session\CSession();
			$session->configure(ANAX_APP_PATH . 'config/session.php');
            $session->name();
            //$session->start();
            return $session;
		});
		
		$m = "Testing message";
		$message->success($m);
		$res = $message->getMessage();
		
		$exp = "<div id='flash'><p class='success'>Testing message</p></div>";
		
		$this->assertEquals($exp, $res);
	}
	
	
	/**
	 *
	 * Test notice
	 *
	 * @return 
	 */
	public function testNotice() {
		
		$message = new \Yvos\FlashMessages\CFlashMessage();
		$di = new \Anax\DI\CDIFactoryDefault();
		$message->setDI($di);
		
		$di->setShared('session', function () {
			$session = new \Anax\Session\CSession();
			$session->configure(ANAX_APP_PATH . 'config/session.php');
            $session->name();
            //$session->start();
            return $session;
		});
		
		$m = "Testing message";
		$message->notice($m);
		$res = $message->getMessage();
		
		$exp = "<div id='flash'><p class='notice'>Testing message</p></div>";
		
		$this->assertEquals($exp, $res);
	}
	
	
	/**
	 *
	 * Test warning
	 *
	 * @return 
	 */
	public function testWarning() {
		
		$message = new \Yvos\FlashMessages\CFlashMessage();
		$di = new \Anax\DI\CDIFactoryDefault();
		$message->setDI($di);
		
		$di->setShared('session', function () {
			$session = new \Anax\Session\CSession();
			$session->configure(ANAX_APP_PATH . 'config/session.php');
            $session->name();
            //$session->start();
            return $session;
		});
		
		$m = "Testing message";
		$message->warning($m);
		$res = $message->getMessage();
		
		$exp = "<div id='flash'><p class='warning'>Testing message</p></div>";
		
		$this->assertEquals($exp, $res);
	}
	
	
	/**
	 *
	 * Test messate
	 *
	 * @return 
	 */
	public function testMessage() {
		
		$message = new \Yvos\FlashMessages\CFlashMessage();
		$di = new \Anax\DI\CDIFactoryDefault();
		$message->setDI($di);
		
		$di->setShared('session', function () {
			$session = new \Anax\Session\CSession();
			$session->configure(ANAX_APP_PATH . 'config/session.php');
            $session->name();
            //$session->start();
            return $session;
		});
		
		$m = "Testing message";
		$message->message($m);
		$res = $message->getMessage();
		
		$exp = "<div id='flash'><p class='eget'>Testing message</p></div>";
		
		$this->assertEquals($exp, $res);
	}
 
}
 