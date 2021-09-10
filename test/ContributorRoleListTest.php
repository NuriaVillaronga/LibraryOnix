<?php
namespace test;
use OnixComponents\ContributorRole;
use OnixComponents\ContributorRoleList;
use PHPUnit\Framework\TestCase;

class ContributorRoleListTest extends TestCase
{
    public function testContributorRoleList(){
        
        $nodoContributorRoleList = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                          <Contributor>
                                                             <ContributorRole>B06</ContributorRole>
                                                             <ContributorRole>A24</ContributorRole>
                                                             <ContributorRole>A01</ContributorRole>
                                                          </Contributor>');
        
        $contributorRoleList = new ContributorRoleList($nodoContributorRoleList);
        
        $this->assertCount(3, $contributorRoleList->arrayContributorRole);
        
        foreach ($contributorRoleList->arrayContributorRole as $contributorRoleListComponent){
            $this->assertNotNull($contributorRoleListComponent);
            $this->assertInstanceOf(ContributorRole::class, $contributorRoleListComponent);
        }
    }
}

