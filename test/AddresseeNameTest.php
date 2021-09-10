<?php
namespace test;
use OnixComponents\AddresseeName;
use PHPUnit\Framework\TestCase;

class AddresseeNameTest extends TestCase
{
    public function testAddresseeName(){
        
        $nodoAddresseeName = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <AddresseeName>BooksBooksBooks.com</AddresseeName>');
        
        $addresseeName = new AddresseeName($nodoAddresseeName);
        $this->assertEquals('BooksBooksBooks.com', $addresseeName->contents);
    }
}

