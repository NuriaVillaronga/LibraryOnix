<?php
namespace test;
use OnixComponents\EmailAddress;
use PHPUnit\Framework\TestCase;

class EmailAddressTest extends TestCase
{
    public function testEmailAddress(){
        
        $nodoEmailAddress = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <EmailAddress>jbk@globalbookinfo.com</EmailAddress>');
        
        $emailAddress = new EmailAddress($nodoEmailAddress);
        $this->assertEquals('jbk@globalbookinfo.com', $emailAddress->contents);
    }
}

