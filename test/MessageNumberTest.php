<?php
namespace test;
use OnixComponents\MessageNumber;
use PHPUnit\Framework\TestCase;

class MessageNumberTest extends TestCase
{
    public function testMessageNumber(){
        
        $nodoMessageNumber = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                    <MessageNumber>231</MessageNumber>');
        
        $messageNumber = new MessageNumber($nodoMessageNumber);
        $this->assertEquals('231', $messageNumber->contenido);
    }
}

