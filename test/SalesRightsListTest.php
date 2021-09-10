<?php
namespace test;
use OnixComponents\SalesRights;
use OnixComponents\SalesRightsList;
use PHPUnit\Framework\TestCase;

class SalesRightsListTest extends TestCase
{
    public function testSalesRightsList(){
        
        $nodoSalesRightsList = simplexml_load_file(__DIR__.'/books/bookSalesRightsList.xml');
        
        $salesRightsList = new SalesRightsList($nodoSalesRightsList);
        
        $this->assertCount(2, $salesRightsList->arraySalesRights);
        
        foreach ($salesRightsList->arraySalesRights as $salesRightsListComponent){
            $this->assertNotNull($salesRightsListComponent);
            $this->assertInstanceOf(SalesRights::class, $salesRightsListComponent);
        } 
    }
}

