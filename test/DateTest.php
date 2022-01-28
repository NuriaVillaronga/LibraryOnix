<?php
namespace test;
use OnixComponents\Date;
use OnixComponents\dateformat;
use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{
    public function testDate(){
        
        $nodoDate = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                <Date dateformat="00">20211213</Date>');
        
        $date = new Date($nodoDate);

        var_dump($date->valor);
        die();
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

