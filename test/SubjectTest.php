<?php
namespace test;
use OnixComponents\Subject;
use PHPUnit\Framework\TestCase;

class SubjectTest extends TestCase
{
    public function testSubject(){
        
        $nodoSubject = simplexml_load_file(__DIR__.'/books/bookSubject.xml');
        
        $subject = new Subject($nodoSubject);
        $this->assertNotNull($subject->subjectSchemeIdentifier);
        $this->assertNotNull($subject->subjectSchemeVersion);
        $this->assertNotNull($subject->subjectHeadingTextList);
        $this->assertNotNull($subject->subjectCode);
        $this->assertNotNull($subject->mainSubject);
    }
    
    public function testNullSubject(){
        
        $nodoSubject = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                             <Subject>
                                				<SubjectSchemeIdentifier>93</SubjectSchemeIdentifier>
                                			</Subject>');
        
        $subject = new Subject($nodoSubject);
        $this->assertNotNull($subject->subjectSchemeIdentifier);
        $this->assertNull($subject->subjectSchemeVersion);
        $this->assertNull($subject->subjectHeadingTextList);
        $this->assertNull($subject->subjectCode);
        $this->assertNull($subject->mainSubject);
    }
}

