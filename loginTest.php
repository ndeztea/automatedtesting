<?php 
	require_once (__DIR__.'/library/core.php');
	require_once (__DIR__.'/library/auth.php');

	class LoginTest extends Core
	{
		protected $auth;

		public function setUp(){
			$this->start();
			
			$this->auth = new Auth();
			
		}

		public function testLogin(){
			
			$this->auth->login('a');
			//$this->assertEquals('Recent Activities', 'as');
		}

		public function testLogout(){
			$this->auth->logout();
		}

		protected function tearDown()
		{
		    // Close driver
		}
	}
?>