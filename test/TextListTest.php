<?php
namespace test;
use OnixComponents\TextList;
use OnixComponents\Text;
use PHPUnit\Framework\TestCase;

class TextListTest extends TestCase
{
    public function testTextList(){
        
        $nodoTextList = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                               <TextContent>
	                                             <Text textformat="05"><strong>Dalila Villaronga Guillán</strong></Text>
	                                             <Text textformat="05"><em>Milena Villaronga Guillán</em></Text>
                                               </TextContent>');
        
        $textList = new TextList($nodoTextList);
        
        $this->assertCount(2, $textList->arrayText);
        
        foreach ($textList->arrayText as $textListComponent){
            $this->assertNotNull($textListComponent);
            $this->assertInstanceOf(Text::class, $textListComponent);
        }
    }
}

