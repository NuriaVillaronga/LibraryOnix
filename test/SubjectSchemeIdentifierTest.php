<?php
namespace test;
use OnixComponents\SubjectSchemeIdentifier;
use PHPUnit\Framework\TestCase;

class SubjectSchemeIdentifierTest extends TestCase
{
    public function testSubjectSchemeIdentifier(){
        
        $nodoSubjectSchemeIdentifier = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                              <SubjectSchemeIdentifier>96</SubjectSchemeIdentifier>');
        
        $subjectSchemeIdentifier = new SubjectSchemeIdentifier($nodoSubjectSchemeIdentifier);
        $this->assertEquals('96', $subjectSchemeIdentifier->contents);
    }
}

