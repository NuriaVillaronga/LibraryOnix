<?php
namespace test;
use OnixComponents\Imprint;
use OnixComponents\ImprintList;
use PHPUnit\Framework\TestCase;

class ImprintListTest extends TestCase
{
    public function testImprintList(){
        
        $nodoImprintList = simplexml_load_file(__DIR__.'/books/bookImprintList.xml');
        
        $imprintList = new ImprintList($nodoImprintList);
        
        $this->assertCount(1, $imprintList->arrayImprint);
        
        foreach ($imprintList->arrayImprint as $imprintListComponent){
            $this->assertNotNull($imprintListComponent);
            $this->assertInstanceOf(Imprint::class, $imprintListComponent);
        }
    }
}

