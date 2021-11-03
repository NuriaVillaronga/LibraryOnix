<?php
namespace test;
use OnixComponents\ProductRelationCode;
use OnixComponents\ProductRelationCodeList;
use PHPUnit\Framework\TestCase;

class ProductRelationCodeListTest extends TestCase
{
    public function testProductRelationCodeList(){
        
        $nodoProductRelationCodeList = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                              <RelatedProduct>
				                                                    <ProductRelationCode>06</ProductRelationCode>
				                                                    <ProductRelationCode>27</ProductRelationCode>
			                                                  </RelatedProduct>');
        
        $productRelationCodeList = new ProductRelationCodeList($nodoProductRelationCodeList);
        
        $this->assertCount(2, $productRelationCodeList->arrayProductRelationCode);
        
        foreach ($productRelationCodeList->arrayProductRelationCode as $productRelationCodeListComponent){
            $this->assertNotNull($productRelationCodeListComponent);
            $this->assertInstanceOf(ProductRelationCode::class, $productRelationCodeListComponent);
        }
    }
}

