<?php
namespace test;
use OnixComponents\CopyrightYear;
use OnixComponents\dateformatAttr; 
use PHPUnit\Framework\TestCase;

class CopyrightYearTest extends TestCase 
{
    public function testCopyrightYear(){
        
        $nodoCopyrightYear = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                    <CopyrightYear dateformat="11">20212020</CopyrightYear>'); 
        
        $cy = new CopyrightYear($nodoCopyrightYear); 
        

        $dateformat = new dateformatAttr($nodoCopyrightYear['dateformat']); 
        var_dump($dateformat->contents);
        var_dump(date_format($cy->valor, $dateformat->contents)); 
        
        die();
    }
}