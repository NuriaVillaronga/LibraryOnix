<?php
namespace test;
use OnixComponents\Discount;
use OnixComponents\DiscountList;
use PHPUnit\Framework\TestCase;

class DiscountListTest extends TestCase
{
    public function testDiscountList(){
        
        $nodoDiscountList = simplexml_load_file(__DIR__.'/books/bookDiscountList.xml');
        
        $discountList = new DiscountList($nodoDiscountList);
        
        $this->assertCount(2, $discountList->arrayDiscount);
        
        foreach ($discountList->arrayDiscount as $discountListComponent){
            $this->assertNotNull($discountListComponent);
            $this->assertInstanceOf(Discount::class, $discountListComponent);
        }
    }
}

