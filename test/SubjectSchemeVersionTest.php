<?php
namespace test;
use OnixComponents\SubjectSchemeVersion;
use PHPUnit\Framework\TestCase;

class SubjectSchemeVersionTest extends TestCase
{
    public function testSubjectSchemeVersion(){
        
        $nodoSubjectSchemeVersion = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                           <SubjectSchemeVersion>2017</SubjectSchemeVersion>');
        
        $subjectSchemeVersion = new SubjectSchemeVersion($nodoSubjectSchemeVersion);
        $this->assertEquals('2017', $subjectSchemeVersion->contents);
    }
}

