<?php
namespace test;
use OnixComponents\ProductForm;
use PHPUnit\Framework\TestCase;

class ProductFormTest extends TestCase
{
    public function testProductForm(){
        
        $nodoProductForm = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <ProductForm>BC</ProductForm>');
        
        $productForm = new ProductForm($nodoProductForm);
        $this->assertEquals('BC', $productForm->contents);
    }
}

