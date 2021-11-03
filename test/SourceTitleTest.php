<?php
namespace test;
use OnixComponents\SourceTitle;
use PHPUnit\Framework\TestCase;

class SourceTitleTest extends TestCase
{
    public function testSourceTitle(){
        
        $nodoSourceTitle = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <SourceTitle>Observer Magazine</SourceTitle>');
        
        $sourceTitle = new SourceTitle($nodoSourceTitle);
        $this->assertEquals('Observer Magazine', $sourceTitle->contents);
    }
}

