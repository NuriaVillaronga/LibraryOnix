<?php
namespace test;
use OnixComponents\BiographicalNote;
use PHPUnit\Framework\TestCase;

class BiographicalNoteTest extends TestCase
{
    public function testBiographicalNote(){
        
        $nodoBiographicalNote = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <BiographicalNote textformat="05">Rosa Maria nació en Berlín</BiographicalNote>');
        
        $biographicalNote = new BiographicalNote($nodoBiographicalNote);
        $this->assertNotNull($biographicalNote->textformat);
        $this->assertEquals('Rosa Maria nació en Berlín', $biographicalNote->contents);
    }
    
    public function testNullBiographicalNote(){
        
        $nodoBiographicalNote = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <BiographicalNote>Rosa Maria nació en Berlín</BiographicalNote>');
        
        $biographicalNote = new BiographicalNote($nodoBiographicalNote);
        $this->assertNull($biographicalNote->textformat);
        $this->assertEquals('Rosa Maria nació en Berlín', $biographicalNote->contents);
    }
}

