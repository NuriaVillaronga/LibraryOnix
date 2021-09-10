<?php
namespace test;
use OnixComponents\MessageNote;
use PHPUnit\Framework\TestCase;

class MessageNoteTest extends TestCase
{
    public function testMessageNote(){
        
        $nodoMessageNote = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <MessageNote>Sample message</MessageNote>');
        
        $messageNote = new MessageNote($nodoMessageNote);
        $this->assertEquals('Sample message', $messageNote->contenido);
    }
}

