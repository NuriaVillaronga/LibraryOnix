<?php
namespace OnixComponents;

use SimpleXMLElement;

class Price
{
    
    public ?DiscountCodedList $discountCodedList; //(0,n)
    
    public ?DiscountList $discountList; //(0,n)
    
    public ?TaxList $taxList; //(0,n)
    
    public ?PriceType $priceType; //(0,1)
    
    public ?PriceStatus $priceStatus; //(0,1)
    
    public ?PriceAmount $priceAmount; //(0,1)
    
    public ?CurrencyCode $currencyCode; //(0,1)
    
    public ?Territory $territory; //(0,1)
    
    public ?PrintedOnProduct $printedOnProduct; //(0,1)
    
    public ?PositionOnProduct $positionOnProduct; //(0,1)
    
    public function __construct(SimpleXMLElement $nodePrice)
    {
        if (isset($nodePrice->DiscountCoded) == true) {
            $this->discountCodedList = new DiscountCodedList($nodePrice);
        } else {
            $this->discountCodedList = null;
        }

        if (isset($nodePrice->Discount) == true) {
            $this->discountList = new DiscountList($nodePrice);
        } else {
            $this->discountList = null;
        }

        if (isset($nodePrice->Tax) == true) {
            $this->taxList = new TaxList($nodePrice);
        } else {
            $this->taxList = null;
        }

        if (isset($nodePrice->PriceType) == true) {
            $this->priceType = new PriceType($nodePrice->PriceType);
        } else {
            $this->priceType = null;
        }

        if (isset($nodePrice->PriceStatus) == true) {
            $this->priceStatus = new PriceStatus($nodePrice->PriceStatus);
        } else {
            $this->priceStatus = null;
        }

        if (isset($nodePrice->PriceAmount) == true) {
            $this->priceAmount = new PriceAmount($nodePrice->PriceAmount);
        } else {
            $this->priceAmount = null;
        }

        if (isset($nodePrice->CurrencyCode) == true) {
            $this->currencyCode = new CurrencyCode($nodePrice->CurrencyCode);
        } else {
            $this->currencyCode = null;
        }

        if (isset($nodePrice->Territory) == true) {
            $this->territory = new Territory($nodePrice->Territory);
        } else {
            $this->territory = null;
        }

        if (isset($nodePrice->PrintedOnProduct) == true) {
            $this->printedOnProduct = new PrintedOnProduct($nodePrice->PrintedOnProduct);
        } else {
            $this->printedOnProduct = null;
        }

        if (isset($nodePrice->PositionOnProduct) == true) {
            $this->positionOnProduct = new PositionOnProduct($nodePrice->PositionOnProduct);
        } else {
            $this->positionOnProduct = null;
        }
    }
}

