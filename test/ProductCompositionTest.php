<?php
namespace test;
use OnixComponents\ProductComposition;
use PHPUnit\Framework\TestCase;

class ProductCompositionTest extends TestCase
{
    public function testProductComposition(){
        
        $nodoProductComposition = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                         <ProductComposition>00</ProductComposition>');
        
        $productComposition = new ProductComposition($nodoProductComposition);
        $this->assertEquals('00', $productComposition->contents);
    }
}

