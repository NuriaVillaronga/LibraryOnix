<?php
namespace test;
use OnixComponents\SubjectCode;
use PHPUnit\Framework\TestCase;

class SubjectCodeTest extends TestCase
{
    public function testSubjectCode(){
        
        $nodoSubjectCode = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <SubjectCode>FIC022000</SubjectCode>');
        
        $subjectCode = new SubjectCode($nodoSubjectCode);
        $this->assertEquals('FIC022000', $subjectCode->contents);
    }
}

