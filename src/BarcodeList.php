<?php
namespace OnixComponents;

use SimpleXMLElement;

class BarcodeList
{

    /**
     *
     * @var Barcode[] 
     */
    public $arrayBarcode = array();

    public function __construct(SimpleXMLElement $nodeProduct)
    {
        foreach ($nodeProduct->Barcode as $nodeBarcode) {
            $this->arrayBarcode[] = new Barcode($nodeBarcode);
        }
    }
}