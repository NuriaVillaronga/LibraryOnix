<?php
namespace test;
use OnixComponents\DescriptiveDetail;
use PHPUnit\Framework\TestCase;

class DescriptiveDetailTest extends TestCase
{
    public function testDescriptiveDetail(){
        
        $nodoDescriptiveDetail = simplexml_load_file(__DIR__.'/books/bookDescriptiveDetail.xml');
        
        $descriptiveDetail = new DescriptiveDetail($nodoDescriptiveDetail);
        $this->assertNotNull($descriptiveDetail->contributorList);
        $this->assertNotNull($descriptiveDetail->collectionList);
        $this->assertNotNull($descriptiveDetail->productFormDetailList);
        $this->assertNotNull($descriptiveDetail->contributorStatementList);
        $this->assertNotNull($descriptiveDetail->noEdition);
        $this->assertNotNull($descriptiveDetail->countryOfManufacture);
        $this->assertNotNull($descriptiveDetail->measureList);
        $this->assertNotNull($descriptiveDetail->productClassificationList);
        $this->assertNotNull($descriptiveDetail->languageList);
        $this->assertNotNull($descriptiveDetail->extentList);
        $this->assertNotNull($descriptiveDetail->subjectList);
        $this->assertNotNull($descriptiveDetail->audienceList);
        $this->assertNotNull($descriptiveDetail->titleDetailList);
        $this->assertNotNull($descriptiveDetail->productComposition);
        $this->assertNotNull($descriptiveDetail->productForm);
    }
    
    public function testNullDescriptiveDetail(){
        
        $nodoDescriptiveDetail = simplexml_load_file(__DIR__.'/books/bookDescriptiveDetailNull.xml');
        
        $descriptiveDetail = new DescriptiveDetail($nodoDescriptiveDetail);
        $this->assertNull($descriptiveDetail->contributorList);
        $this->assertNull($descriptiveDetail->collectionList);
        $this->assertNull($descriptiveDetail->productFormDetailList);
        $this->assertNull($descriptiveDetail->contributorStatementList);
        $this->assertNull($descriptiveDetail->noEdition);
        $this->assertNull($descriptiveDetail->countryOfManufacture);
        $this->assertNull($descriptiveDetail->measureList);
        $this->assertNull($descriptiveDetail->productClassificationList);
        $this->assertNull($descriptiveDetail->languageList);
        $this->assertNull($descriptiveDetail->extentList);
        $this->assertNull($descriptiveDetail->subjectList);
        $this->assertNull($descriptiveDetail->audienceList);
        $this->assertNotNull($descriptiveDetail->titleDetailList);
        $this->assertNotNull($descriptiveDetail->productComposition);
        $this->assertNotNull($descriptiveDetail->productForm);
    }
}

