<?php
namespace test;
use OnixComponents\PositionOnProduct;
use PHPUnit\Framework\TestCase;

class PositionOnProductTest EXTENDS TestCase
{
    public function testPositionOnProduct(){
        
        $nodoPositionOnProduct = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <PositionOnProduct>01</PositionOnProduct>');
        
        $positionOnProduct = new PositionOnProduct($nodoPositionOnProduct);
        $this->assertEquals('01', $positionOnProduct->contenido);
    }
}

