<?php
namespace test;
use OnixComponents\Subject;
use OnixComponents\SubjectList;
use PHPUnit\Framework\TestCase;

class SubjectListTest extends TestCase
{
    public function testSubjectList(){
        
        $nodoSubjectList = simplexml_load_file(__DIR__.'/books/bookSubjectList.xml');
        
        $subjectList = new SubjectList($nodoSubjectList);
        
        $this->assertCount(6, $subjectList->arraySubject);
        
        foreach ($subjectList->arraySubject as $subjectListComponent){
            $this->assertNotNull($subjectListComponent);
            $this->assertInstanceOf(Subject::class, $subjectListComponent);
        }
    }
}

