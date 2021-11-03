<?php
namespace test;
use OnixComponents\SourceTitle;
use OnixComponents\SourceTitleList;
use PHPUnit\Framework\TestCase;

class SourceTitleListTest extends TestCase
{
    public function testSourceTitleList(){
        
        $nodoSourceTitleList = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <Dummy>
                                            				<SourceTitle>Observer Magazine</SourceTitle>
                                                            <SourceTitle>Milena Magazine</SourceTitle>
                                            		   </Dummy>');
        
        $sourceTitleList = new SourceTitleList($nodoSourceTitleList);
        
        $this->assertCount(2, $sourceTitleList->arraySourceTitle);
        
        foreach ($sourceTitleList->arraySourceTitle as $sourceTitleListComponent){
            $this->assertNotNull($sourceTitleListComponent);
            $this->assertInstanceOf(SourceTitle::class, $sourceTitleListComponent);
        }
    }
}

