<?php
namespace test;
use OnixComponents\DiscountCodedList;
use OnixComponents\DiscountCoded;
use PHPUnit\Framework\TestCase;

class DiscountCodedListTest extends TestCase
{
    public function testDiscountCodedList(){
        
        $nodoDiscountCodedList = simplexml_load_file(__DIR__.'/books/bookDiscountCodedList.xml');
        
        $discountCodedList = new DiscountCodedList($nodoDiscountCodedList);
        
        $this->assertCount(1, $discountCodedList->arrayDiscountCoded); 
        
        foreach ($discountCodedList->arrayDiscountCoded as $discountCodedListComponent){
            $this->assertNotNull($discountCodedListComponent);
            $this->assertInstanceOf(DiscountCoded::class, $discountCodedListComponent);
        }
    }
}

