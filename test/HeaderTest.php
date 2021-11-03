<?php
namespace test;
use OnixComponents\Header;
use PHPUnit\Framework\TestCase;

class HeaderTest extends TestCase
{
    public function testHeader(){
        
        $nodoHeader = simplexml_load_file(__DIR__.'/books/bookHeader.xml');
        
        $header = new Header($nodoHeader);
        $this->assertNotNull($header->sender);
        $this->assertNotNull($header->sentDateTime);
        $this->assertNotNull($header->addresseeList);
        $this->assertNotNull($header->messageNumber);
        $this->assertNotNull($header->messageNoteList);
    }
    
    public function testNullHeader(){
        
        $nodoHeader = simplexml_load_file(__DIR__.'/books/bookHeaderNull.xml');
        
        $header = new Header($nodoHeader);
        $this->assertNotNull($header->sender);
        $this->assertNotNull($header->sentDateTime);
        $this->assertNull($header->addresseeList);
        $this->assertNull($header->messageNumber);
        $this->assertNull($header->messageNoteList);
    }
}

