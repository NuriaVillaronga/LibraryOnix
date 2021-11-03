<?php
namespace test;
use OnixComponents\textformat;
use PHPUnit\Framework\TestCase;

class textformatTest extends TestCase
{
    public function testTextformat(){
        
        $dummy = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                        <Dummy textformat="05"></Dummy>');
        
        $textformat = new textformat($dummy['textformat']);
        $this->assertEquals('05', $textformat->contents);
    }
}

