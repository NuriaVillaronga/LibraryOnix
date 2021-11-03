<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\SentDateTime;

class SentDateTimeTest extends TestCase
{
    public function testSentDateTime(){
        
        $nodoSentDateTime = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                    <SentDateTime>20100510T1115-0400</SentDateTime>');
        
        $sentDateTime = new SentDateTime($nodoSentDateTime);
        $this->assertEquals('20100510T1115-0400', $sentDateTime->contents);
    }
}

