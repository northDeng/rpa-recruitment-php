<?php

class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
        date_default_timezone_set('PRC');
        $this->assertEquals($this->greeter->getGreeting(),'Good morning');
        date_default_timezone_set('Asia/Tokyo');
        $this->assertEquals($this->greeter->getGreeting(),'Good afternoon');
        date_default_timezone_set('America/Anchorage');
        $this->assertEquals($this->greeter->getGreeting(),'Good evening');
    }
}
