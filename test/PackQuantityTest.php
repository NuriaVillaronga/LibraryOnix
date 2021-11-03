<?php
namespace test;
use OnixComponents\PackQuantity;
use PHPUnit\Framework\TestCase;

class PackQuantityTest extends TestCase
{
    public function testPackQuantity(){
        
        $nodoPackQuantity = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <PackQuantity>16</PackQuantity>');
        
        $packQuantity = new PackQuantity($nodoPackQuantity);
        $this->assertEquals('16', $packQuantity->contenido);
    }
}

