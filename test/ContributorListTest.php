<?php
namespace test;
use OnixComponents\Contributor;
use OnixComponents\ContributorList;
use PHPUnit\Framework\TestCase;

class ContributorListTest extends TestCase
{
    public function testContributorList(){
        
        $nodoContributorList = simplexml_load_file(__DIR__.'/books/bookContributorList.xml');
        
        $contributorList = new ContributorList($nodoContributorList);
        
        $this->assertCount(4, $contributorList->arrayContributor);
        
        foreach ($contributorList->arrayContributor as $contributorListComponent){
            $this->assertNotNull($contributorListComponent);
            $this->assertInstanceOf(Contributor::class, $contributorListComponent);
        }
    }
}

