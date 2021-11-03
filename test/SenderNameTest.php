<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\SenderName;

class SenderNameTest extends TestCase
{
    public function testSenderName(){
        
        $nodoSenderName = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <SenderName>Global Bookinfo</SenderName>');
        
        $senderName = new SenderName($nodoSenderName);
        $this->assertEquals('Global Bookinfo', $senderName->contents);
    }
}

