<?php
namespace test;
use OnixComponents\MainSubject;
use PHPUnit\Framework\TestCase;

class MainSubjectTest extends TestCase
{
    public function testMainSubject(){
        
        $nodoMainSubject = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <MainSubject/>');
        
        $mainSubject = new MainSubject($nodoMainSubject);
        $this->assertEmpty($mainSubject->contenido);
    }
}

