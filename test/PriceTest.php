<?php
namespace test;
use OnixComponents\Price;
use PHPUnit\Framework\TestCase;

class PriceTest extends TestCase
{
    public function testPrice(){
        
        $nodoPrice = simplexml_load_file(__DIR__.'/books/bookPrice.xml');
        
        $price = new Price($nodoPrice);
        $this->assertNotNull($price->discountCodedList);
        $this->assertNotNull($price->discountList);
        $this->assertNotNull($price->taxList);
        $this->assertNotNull($price->priceType);
        $this->assertNotNull($price->priceStatus);
        $this->assertNotNull($price->currencyCode);
        $this->assertNotNull($price->territory);
        $this->assertNotNull($price->printedOnProduct);
        $this->assertNotNull($price->positionOnProduct);
    }
    
    public function testNullPrice(){
        
        $nodoPrice = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                            <Price></Price>');
        
        $price = new Price($nodoPrice);
        $this->assertNull($price->discountCodedList);
        $this->assertNull($price->discountList);
        $this->assertNull($price->taxList);
        $this->assertNull($price->priceType);
        $this->assertNull($price->priceStatus);
        $this->assertNull($price->currencyCode);
        $this->assertNull($price->territory);
        $this->assertNull($price->printedOnProduct);
        $this->assertNull($price->positionOnProduct);
    }
}

