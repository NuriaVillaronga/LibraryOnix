<?php
namespace test;
use OnixComponents\ONIXMessage;
use PHPUnit\Framework\TestCase;

class OnixMessageTest extends TestCase
{
    public function testOnixMessage(){
        
        $nodoOnixMessage = simplexml_load_file(__DIR__.'/books/bookOnixMessage.xml');
        
        $onixMessage = new ONIXMessage($nodoOnixMessage);
        $this->assertNotNull($onixMessage->header);
        $this->assertNotNull($onixMessage->productList);
    }
    
    public function testNullOnixMessage(){
        
        $nodoOnixMessage = simplexml_load_file(__DIR__.'/books/bookOnixMessageNull.xml');
        
        $onixMessage = new ONIXMessage($nodoOnixMessage);
        $this->assertNotNull($onixMessage->header);
        $this->assertNull($onixMessage->productList);
    }
}

