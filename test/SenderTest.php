<?php
namespace test;
use OnixComponents\Sender;
use PHPUnit\Framework\TestCase;

class SenderTest extends TestCase
{
    public function testSender(){
        
        $nodoSender = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                        		<Sender>
                                        			<SenderName>Global Bookinfo</SenderName>
                                        			<ContactName>Jane King, +1 555 321 7654</ContactName>
                                        			<EmailAddress>jbk@globalbookinfo.com</EmailAddress>
                                        		</Sender>');
        
        $sender = new Sender($nodoSender);
        $this->assertNotNull($sender->senderName);
        $this->assertNotNull($sender->contactName);
        $this->assertNotNull($sender->emailAddress);
    }
    
    public function testNullSender(){
        
        $nodoSender = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                        	 <Sender></Sender>');
        
        $sender = new Sender($nodoSender);
        $this->assertNull($sender->senderName);
        $this->assertNull($sender->contactName);
        $this->assertNull($sender->emailAddress);
    }
}

