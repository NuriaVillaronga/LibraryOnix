<?php
namespace test;
use OnixComponents\CitationNoteList;
use OnixComponents\CitationNote;
use PHPUnit\Framework\TestCase;

class CitationNoteListTest extends TestCase
{   
    public function testCitationNoteList(){
        
        $nodoCitationNoteList = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                        <CitedContent>
                                                            <CitationNote>Interview with Maj Sjöwall</CitationNote>
                                                            <CitationNote>Interview with Nuria Villaronga</CitationNote>
                                                        </CitedContent>');
        
        $citationNoteList = new CitationNoteList($nodoCitationNoteList);
        
        $this->assertCount(2, $citationNoteList->arrayCitationNote); //Se cuentan los elementos del array citationNoteList (clase CitationNoteList)
        
        foreach ($citationNoteList->arrayCitationNote as $citationNoteListComponent){
            $this->assertNotNull($citationNoteListComponent);
            $this->assertInstanceOf(CitationNote::class, $citationNoteListComponent);  
        }  
    }
}

