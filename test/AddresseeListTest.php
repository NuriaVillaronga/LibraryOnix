<?php
namespace test;
use OnixComponents\AddresseeList;
use OnixComponents\Addressee;
use PHPUnit\Framework\TestCase;

class AddresseeListTest extends TestCase
{
    public function testAddresseeList(){
        
        $nodoAddresseeList = simplexml_load_file(__DIR__.'/books/bookAddresseeList.xml');
        
        $addresseeList = new AddresseeList($nodoAddresseeList);
        
        $this->assertCount(1, $addresseeList->arrayAddressee); 
        
        foreach ($addresseeList->arrayAddressee as $addresseeListComponent){
            $this->assertNotNull($addresseeListComponent);
            $this->assertInstanceOf(Addressee::class, $addresseeListComponent);
        }
    }
}

