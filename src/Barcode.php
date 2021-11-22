<?php
namespace OnixComponents;

use SimpleXMLElement;

class Barcode
{

    public BarcodeType $barcodeType; // (1) 

    public ?PositionOnProduct $positionOnProduct; //(0,1)

    public function __construct(SimpleXMLElement $nodeBarcode)
    {
        $this->barcodeType = new BarcodeType($nodeBarcode->BarcodeType);

        if (isset($nodeBarcode->PositionOnProduct) == true) {
            $this->positionOnProduct = new PositionOnProduct($nodeBarcode->PositionOnProduct);
        } else {
            $this->positionOnProduct = null;
        }
    }
}