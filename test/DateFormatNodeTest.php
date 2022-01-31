<?php
namespace test;
use OnixComponents\DateFormatNode;
use PHPUnit\Framework\TestCase;

class DateFormatNodeTest extends TestCase
{
    public function testDateFormatNode() {
        
        $nodoDateFormat = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                     <DateFormat>00</DateFormat>');
        
        $dateFormatNode = new DateFormatNode($nodoDateFormat);
        
        var_dump($dateFormatNode->contents);
        die();
    }
}