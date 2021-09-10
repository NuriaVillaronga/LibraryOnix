<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\SupportingResource;
use OnixComponents\SupportingResourceList;

class SupportingResourceListTest extends TestCase
{
    public function testSupportingResourceList(){
        
        $nodoSupportingResourceList = simplexml_load_file(__DIR__.'/books/bookSupportingResourceList.xml');
        
        $supportingResourceList = new SupportingResourceList($nodoSupportingResourceList);
        
        $this->assertCount(2, $supportingResourceList->arraySupportingResource);
        
        foreach ($supportingResourceList->arraySupportingResource as $supportingResourceListComponent){
            $this->assertNotNull($supportingResourceListComponent);
            $this->assertInstanceOf(SupportingResource::class, $supportingResourceListComponent);
        }
    }
}

