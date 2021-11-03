<?php
namespace test;
use OnixComponents\BiographicalNote;
use OnixComponents\BiographicalNoteList;
use PHPUnit\Framework\TestCase;

class BiographicalNoteListTest extends TestCase
{
    public function testBiographicalNoteList(){
        
        $nodoBiographicalNoteList = simplexml_load_file(__DIR__.'/books/bookBiographicalNoteList.xml');
        
        $biographicalNoteList = new BiographicalNoteList($nodoBiographicalNoteList);
        
        $this->assertCount(1, $biographicalNoteList->arrayBiographicalNote);
        
        foreach ($biographicalNoteList->arrayBiographicalNote as $biographicalNoteListComponent){
            $this->assertNotNull($biographicalNoteListComponent);
            $this->assertInstanceOf(BiographicalNote::class, $biographicalNoteListComponent);
        }
    }
}

