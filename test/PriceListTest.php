<?php
namespace test;
use OnixComponents\Price;
use OnixComponents\PriceList;
use PHPUnit\Framework\TestCase; 

class PriceListTest extends TestCase
{
    public function testPriceList(){
        
        $nodoPriceList = simplexml_load_file(__DIR__.'/books/bookPriceList.xml');
        
        $priceList = new PriceList($nodoPriceList);
        
        $this->assertCount(3, $priceList->arrayPrice);
        
        foreach ($priceList->arrayPrice as $priceListComponent){
            $this->assertNotNull($priceListComponent);
            $this->assertInstanceOf(Price::class, $priceListComponent);
        }
    }
}

