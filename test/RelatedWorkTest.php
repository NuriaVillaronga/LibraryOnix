<?php
namespace test;
use OnixComponents\RelatedWork;
use PHPUnit\Framework\TestCase;

class RelatedWorkTest extends TestCase
{
    public function testRelatedWork(){
        
        $nodoRelatedWork = simplexml_load_file('test/books/bookRelatedWork.xml');
        
        $relatedWork = new RelatedWork($nodoRelatedWork);
        $this->assertNotNull($relatedWork->workRelationCode);
        $this->assertNotNull($relatedWork->workIdentifierList);
    }
}

