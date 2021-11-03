<?php
namespace test;
use OnixComponents\MessageNote;
use OnixComponents\MessageNoteList;
use PHPUnit\Framework\TestCase;

class MessageNoteListTest extends TestCase
{
    public function testMessageNoteList(){
        
        $nodoMessageNoteList = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <Header>
		                                                  <MessageNote>Sample message</MessageNote>
                                                          <MessageNote>Complete message</MessageNote>
	                                                  </Header>');
        
        $messageNoteList = new MessageNoteList($nodoMessageNoteList);
        
        $this->assertCount(2, $messageNoteList->arrayMessageNote);
        
        foreach ($messageNoteList->arrayMessageNote as $messageNoteListComponent){
            $this->assertNotNull($messageNoteListComponent);
            $this->assertInstanceOf(MessageNote::class, $messageNoteListComponent);
        }
    }
}

