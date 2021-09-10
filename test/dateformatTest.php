<?php
namespace test;
use OnixComponents\dateformat;
use PHPUnit\Framework\TestCase;

class dateformatTest extends TestCase
{
    public function testDateformat(){
        
        $nodoDate = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                           <Date dateformat="00"></Date>');
        
        $dateformat = new dateformat($nodoDate['dateformat']);
        $this->assertEquals('00', $dateformat->contents);
    }
}

