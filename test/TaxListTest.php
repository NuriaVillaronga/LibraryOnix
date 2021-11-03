<?php
namespace test;
use OnixComponents\TaxList;
use OnixComponents\Tax;
use PHPUnit\Framework\TestCase;

class TaxListTest extends TestCase
{
    public function testTaxList(){
        
        $nodoTaxList = simplexml_load_file(__DIR__.'/books/bookTaxList.xml');
        
        $taxList = new TaxList($nodoTaxList);
        
        $this->assertCount(1, $taxList->arrayTax);
        
        foreach ($taxList->arrayTax as $taxListComponent){
            $this->assertNotNull($taxListComponent);
            $this->assertInstanceOf(Tax::class, $taxListComponent);
        }
    }
}

