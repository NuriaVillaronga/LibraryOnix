<?php
namespace test;
use OnixComponents\SubjectHeadingText;
use OnixComponents\SubjectHeadingTextList;
use PHPUnit\Framework\TestCase;

class SubjectHeadingTextListTest extends TestCase
{
    public function testSubjectHeadingTextList(){
        
        $nodoSubjectHeadingTextList = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                              <Subject>
        				                                           <SubjectHeadingText>Martin Beck police procedural</SubjectHeadingText>
        			                                          </Subject>');
        
        $subjectHeadingTextList = new SubjectHeadingTextList($nodoSubjectHeadingTextList);
        
        $this->assertCount(1, $subjectHeadingTextList->arraySubjectHeadingText);
        
        foreach ($subjectHeadingTextList->arraySubjectHeadingText as $subjectHeadingTextListComponent){
            $this->assertNotNull($subjectHeadingTextListComponent);
            $this->assertInstanceOf(SubjectHeadingText::class, $subjectHeadingTextListComponent);
        }
    }
}

