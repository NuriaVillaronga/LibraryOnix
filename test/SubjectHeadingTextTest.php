<?php
namespace test;
use OnixComponents\SubjectHeadingText;
use PHPUnit\Framework\TestCase;

class SubjectHeadingTextTest extends TestCase
{
    public function testSubjectHeadingText(){
        
        $nodoSubjectHeadingText = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                         <SubjectHeadingText>Martin Beck; Roseanna McGraw; Lake Vättern</SubjectHeadingText>');
        
        $subjectHeadingText = new SubjectHeadingText($nodoSubjectHeadingText);
        $this->assertEquals('Martin Beck; Roseanna McGraw; Lake Vättern', $subjectHeadingText->contents);
    }
}

