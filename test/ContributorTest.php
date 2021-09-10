<?php
namespace test;
use OnixComponents\Contributor;
use PHPUnit\Framework\TestCase;

class ContributorTest extends TestCase
{
    public function testContributor(){
        
        $nodoContributor = simplexml_load_file(__DIR__.'/books/bookContributor.xml');
        
        $contributor = new Contributor($nodoContributor);
        $this->assertNotNull($contributor->sequenceNumber);
        $this->assertNotNull($contributor->contributorRoleList);
        $this->assertNotNull($contributor->nameIdentifierList);
        $this->assertNotNull($contributor->namesBeforeKey);
        $this->assertNotNull($contributor->keyNames);
        $this->assertNotNull($contributor->biographicalNoteList);
        $this->assertNotNull($contributor->fromLanguageList);
    }
    
    public function testNullContributor(){
        
        $nodoContributor = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                    <Contributor>
                                                    	<ContributorRole>A01</ContributorRole>
                                                    </Contributor>');
        
        $contributor = new Contributor($nodoContributor);
        $this->assertNull($contributor->sequenceNumber);
        $this->assertNotNull($contributor->contributorRoleList);
        $this->assertNull($contributor->nameIdentifierList);
        $this->assertNull($contributor->namesBeforeKey);
        $this->assertNull($contributor->keyNames);
        $this->assertNull($contributor->biographicalNoteList);
        $this->assertNull($contributor->fromLanguageList);
    }
}

