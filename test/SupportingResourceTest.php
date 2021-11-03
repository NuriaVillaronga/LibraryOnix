<?php
namespace test;
use OnixComponents\SupportingResource;
use PHPUnit\Framework\TestCase;

class SupportingResourceTest extends TestCase
{
    public function testSupportingResource(){
        
        $nodoSupportingResource = simplexml_load_file('test/books/bookSupportingResource.xml');
        
        $supportingResource = new SupportingResource($nodoSupportingResource);
        $this->assertNotNull($supportingResource->resourceVersionList);
        $this->assertNotNull($supportingResource->contentAudienceList);
        $this->assertNotNull($supportingResource->resourceContentType);
        $this->assertNotNull($supportingResource->resourceMode);
    }
}

