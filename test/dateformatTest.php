<?php
namespace test;
use OnixComponents\dateformatAttr;
use PHPUnit\Framework\TestCase;

class dateformatAttrTest extends TestCase
{
    public function testDateformat(){ 
        
        $nodoDate = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                           <Date dateformat="00"></Date>');
        
        $dateformatAttr = new dateformatAttr($nodoDate['dateformat']);
        $this->assertEquals('00', $dateformatAttr->contents);
    }
}

