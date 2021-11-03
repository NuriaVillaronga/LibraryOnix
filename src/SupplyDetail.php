<?php
namespace OnixComponents;

use SimpleXMLElement;

class SupplyDetail
{

    public ?ReturnsConditionsList $returnsConditionsList; //(0,n)
    
    public ?PriceList $priceList; //(0,n)
    
    public ?PackQuantity $packQuantity; //(0,1)
    
    public Supplier $supplier; //(1)
    
    public ProductAvailability $productAvailability; //(1)
    
    public function __construct(SimpleXMLElement $nodeSupplyDetail)
    {
        $this->supplier = new Supplier($nodeSupplyDetail->Supplier);
        $this->productAvailability = new ProductAvailability($nodeSupplyDetail->ProductAvailability);

        if (isset($nodeSupplyDetail->PackQuantity) == true) {
            $this->packQuantity = new PackQuantity($nodeSupplyDetail->PackQuantity);
        } else {
            $this->packQuantity = null;
        }

        if (isset($nodeSupplyDetail->ReturnsConditions) == true) {
            $this->returnsConditionsList = new ReturnsConditionsList($nodeSupplyDetail);
        } else {
            $this->returnsConditionsList = null;
        }

        if (isset($nodeSupplyDetail->Price) == true) {
            $this->priceList = new PriceList($nodeSupplyDetail);
        } else {
            $this->priceList = null;
        }
    }
}

