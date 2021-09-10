<?php
namespace test;
use OnixComponents\CitationNote;
use PHPUnit\Framework\TestCase;

class CitationNoteTest extends TestCase
{
    public function testCitationNote(){
        
        $nodoCitationNote = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <CitationNote>Interview with Maj Sjöwall by Louise France</CitationNote>');
        
        $citationNote = new CitationNote($nodoCitationNote);
        $this->assertEquals('Interview with Maj Sjöwall by Louise France', $citationNote->contents);
    }
}

