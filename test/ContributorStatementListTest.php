<?php
namespace test;
use OnixComponents\ContributorStatement;
use OnixComponents\ContributorStatementList;
use PHPUnit\Framework\TestCase;

class ContributorStatementListTest extends TestCase
{
    public function testContributorStatementList(){
        
        $nodoContributorStatementList = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                               <DescriptiveDetail>
                                                                    <ContributorStatement>By Maj Sjöwall and Per Wahlöö</ContributorStatement>
                                                               </DescriptiveDetail>');
        
        $contributorStatementList = new ContributorStatementList($nodoContributorStatementList);
        
        $this->assertCount(1, $contributorStatementList->arrayContributorStatement); 
        
        foreach ($contributorStatementList->arrayContributorStatement as $contributorStatementListComponent){
            $this->assertNotNull($contributorStatementListComponent);
            $this->assertInstanceOf(ContributorStatement::class, $contributorStatementListComponent);
        } 
    }
}

