<?php
namespace OnixComponents;

use SimpleXMLElement;

class Tax
{
    
    public ?TaxType $taxType; //(0,1)
    
    public ?TaxRateCode $taxRateCode; //(0,1)
    
    public ?TaxRatePercent $taxRatePercent; //(0,1)
    
    public ?TaxableAmount $taxableAmount; //(0,1)
    
    public ?TaxAmount $taxAmount; //(0,1)
    
    public function __construct(SimpleXMLElement $nodeTax)
    {
        if (isset($nodeTax->TaxType) == true) {
            $this->taxType = new TaxType($nodeTax->TaxType);
        } else {
            $this->taxType = null;
        }

        if (isset($nodeTax->TaxRateCode) == true) {
            $this->taxRateCode = new TaxRateCode($nodeTax->TaxRateCode);
        } else {
            $this->taxRateCode = null;
        }

        if (isset($nodeTax->TaxRatePercent) == true) {
            $this->taxRatePercent = new TaxRatePercent($nodeTax->TaxRatePercent);
        } else {
            $this->taxRatePercent = null;
        }

        if (isset($nodeTax->TaxableAmount) == true) {
            $this->taxableAmount = new TaxableAmount($nodeTax->TaxableAmount);
        } else {
            $this->taxableAmount = null;
        }

        if (isset($nodeTax->TaxAmount) == true) {
            $this->taxAmount = new TaxAmount($nodeTax->TaxAmount);
        } else {
            $this->taxAmount = null;
        }
    }
}

