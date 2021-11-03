<?php
namespace test;
use OnixComponents\Addressee;
use PHPUnit\Framework\TestCase;

class AddresseeTest extends TestCase
{
    public function testAddressee(){
        
        $nodoAddressee = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                        		<Addressee>
                                        			<AddresseeName>BooksBooksBooks.com</AddresseeName>
                                        		</Addressee>');
        
        $addressee = new Addressee($nodoAddressee);
        $this->assertNotNull($addressee->addresseeName);
    }
    
    public function testNullAddressee(){
        
        $nodoAddressee = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                        		<Addressee></Addressee>');
        
        $addressee = new Addressee($nodoAddressee);
        $this->assertNull($addressee->addresseeName);
    }
}

