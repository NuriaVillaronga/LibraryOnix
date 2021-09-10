<?php
namespace test;
use OnixComponents\PrintedOnProduct;
use PHPUnit\Framework\TestCase;

class PrintedOnProductTest extends TestCase
{
    public function testPrintedOnProduct(){
        
        $nodoPrintedOnProduct = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <PrintedOnProduct>02</PrintedOnProduct>');
        
        $printedOnProduct = new PrintedOnProduct($nodoPrintedOnProduct);
        $this->assertEquals('02', $printedOnProduct->contenido);
    }
}

