<?php
require_once '/Users/ndeztea/pear/share/pear/PHPUnit/Extensions/SeleniumTestCase/autoload.php';


class SeleniumTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected  function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://localhost/jomsocial_dev/');
    }
 
     public function testTitle()
    {
        $this->url('http://localhost/jomsocial_dev/');
        $username = $this->byId('username');      
        $username->value('admin');

        $username = $this->byId('password');      
        $username->value('admin');       

        $submit = $this->byId('submit');
        $submit->click();

        $recentElm = $this->byCssSelector('h2.cResetH');

        $this->assertEquals('Recent Activities', $recentElm->text());

        $screenshot = $this->currentScreenshot();
        $fp = fopen('/Volumes/Jobs/www/automatedtesting/a.jpg','wb');
        fwrite($fp,$screenshot);
        fclose($fp);
        $this->assertTrue(is_string($screenshot));
        $this->assertTrue(strlen($screenshot) > 0);
        $this->markTestIncomplete('By guaranteeing the size of the window, we could add a deterministic assertion for the image.');
       // $webElement->sendKeys("admin");     
    }
}
?>