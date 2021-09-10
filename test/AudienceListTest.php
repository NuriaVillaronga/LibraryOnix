<?php
namespace test;
use OnixComponents\Audience;
use OnixComponents\AudienceList;
use PHPUnit\Framework\TestCase;

class AudienceListTest extends TestCase
{
    public function testAudienceList(){
        
        $nodoAudienceList = simplexml_load_file(__DIR__.'/books/bookAudienceList.xml'); 
        
        $audienceList = new AudienceList($nodoAudienceList);
        
        $this->assertCount(2, $audienceList->arrayAudience);
        
        foreach ($audienceList->arrayAudience as $audienceListComponent){
            $this->assertNotNull($audienceListComponent);
            $this->assertInstanceOf(Audience::class, $audienceListComponent);
        }
    }
}

