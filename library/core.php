<?php 
	require_once __DIR__.'/../config.php';
	require_once TEST_PHPUNIT_URL;
	
	//spl_autoload_register('Core::autoload_libraries');

	class Core extends PHPUnit_Extensions_Selenium2TestCase
	{
		
		public function start(){
			$this->setBrowser(TEST_BROWSER);
        	$this->setBrowserUrl(TEST_URL);
        	
		}
		/*
		static function autoload_libraries($class){
			require_once __DIR__.'/library/' . strtolower($class) . '.php';
		}*/


	}
?>