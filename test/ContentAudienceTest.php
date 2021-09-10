<?php
namespace test;
use OnixComponents\ContentAudience;
use PHPUnit\Framework\TestCase;

class ContentAudienceTest extends TestCase
{
    public function testContentAudience(){
        
        $nodoContentAudience = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <ContentAudience>00</ContentAudience>');
        
        $contentAudience = new ContentAudience($nodoContentAudience);
        $this->assertEquals('00', $contentAudience->contents);
    }
}

