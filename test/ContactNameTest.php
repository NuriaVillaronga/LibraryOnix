<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\ContactName;

class ContactNameTest extends TestCase
{
    public function testContactName(){
        
        $nodoContactName = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <ContactName>Jane King, +1 555 321 7654</ContactName>');
        
        $contactName = new ContactName($nodoContactName);
        $this->assertEquals('Jane King, +1 555 321 7654', $contactName->contents);
    }
}

