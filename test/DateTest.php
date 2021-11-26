<?php
namespace test;
use OnixComponents\Date;
use OnixComponents\dateformat;
use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{
    public function testDate(){
        
        $nodoDate = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                <PublishingDate>
                                                    <Date dateformat="00">20211112</Date>
                                                </PublishingDate>');
        
        $date = new Date($nodoDate);

        //$this->assertNotNull($date->dateformat);
        $this->assertEquals('20211112',$date->contents);
    }
    
    /*
    public function testNullDate(){
        
        $nodoDate = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                           <Date>20060807</Date>');
        
        $date = new Date($nodoDate);
        $this->assertNull($date->dateformat);
        $this->assertEquals('20060807',$date->contents);
    }
    */
}

