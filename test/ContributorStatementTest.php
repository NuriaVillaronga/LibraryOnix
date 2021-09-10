<?php
namespace test;
use OnixComponents\ContributorStatement;
use PHPUnit\Framework\TestCase;

class ContributorStatementTest extends TestCase
{
    public function testContributorStatement(){
        
        $nodoContributorStatement = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                           <ContributorStatement>By Maj Sjöwall and Per Wahlöö</ContributorStatement>');
        
        $contributorStatement = new ContributorStatement($nodoContributorStatement);
        $this->assertEquals('By Maj Sjöwall and Per Wahlöö', $contributorStatement->contents);
    }
}

