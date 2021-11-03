<?php
namespace test;
use OnixComponents\Imprint;
use PHPUnit\Framework\TestCase;

class ImprintTest extends TestCase
{
    public function testImprint(){
        
        $nodoImprint = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                              <Imprint>
                                				  <ImprintName>HarperPerennial</ImprintName>
                                			  </Imprint>');
        
        $imprint = new Imprint($nodoImprint);
        $this->assertNotNull($imprint->imprintName);
    }
    
    public function testNullImprint(){
        
        $nodoImprint = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                              <Imprint></Imprint>');
        
        $imprint = new Imprint($nodoImprint);
        $this->assertNull($imprint->imprintName);
    }
}

