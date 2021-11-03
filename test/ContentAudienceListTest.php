<?php
namespace test;
use OnixComponents\ContentAudience;
use OnixComponents\ContentAudienceList;
use PHPUnit\Framework\TestCase;

class ContentAudienceListTest extends TestCase
{
    //Utilizo dummy porque contentAudience aparece en distintos objetos
    
    public function testContentAudienceList(){
        
        $nodoContentAudienceList = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                          <Dummy>
                                                               <ContentAudience>00</ContentAudience>
                                                          </Dummy>');
        
        $contentAudienceList = new ContentAudienceList($nodoContentAudienceList);
        
        $this->assertCount(1, $contentAudienceList->arrayContentAudience);
        
        foreach ($contentAudienceList->arrayContentAudience as $contentAudienceListComponent){
            $this->assertNotNull($contentAudienceListComponent);
            $this->assertInstanceOf(ContentAudience::class, $contentAudienceListComponent);
        }
    }
}

