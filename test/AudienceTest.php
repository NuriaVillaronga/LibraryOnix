<?php
namespace test;
use OnixComponents\Audience;
use PHPUnit\Framework\TestCase;

class AudienceTest extends TestCase
{
    public function testAudience(){
        
        $nodoAudience = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                <Audience>
				                                    <AudienceCodeType>22</AudienceCodeType>
				                                    <AudienceCodeValue>01</AudienceCodeValue>
			                                    </Audience>'); 
        $audience = new Audience($nodoAudience);
        $this->assertNotNull($audience->audienceCodeType);
        $this->assertNotNull($audience->audienceCodeValue);
    }
}

