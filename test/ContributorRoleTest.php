<?php
namespace test;
use OnixComponents\ContributorRole;
use PHPUnit\Framework\TestCase;

class ContributorRoleTest extends TestCase
{
    public function testContributorRole(){
        
        $nodoContributorRole = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <ContributorRole>A24</ContributorRole>');
        
        $contributorRole = new ContributorRole($nodoContributorRole);
        $this->assertEquals('A24', $contributorRole->contents);
    }
}

