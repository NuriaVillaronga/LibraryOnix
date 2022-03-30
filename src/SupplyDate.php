<?php
namespace OnixComponents;

use SimpleXMLElement;

class SupplyDate 
{

    public SupplyDateRole $supplyDateRole; // (1)

    public Date $date; // (1)

    public function __construct(SimpleXMLElement $nodeSupplyDate) 
    {
        $this->supplyDateRole = new SupplyDateRole($nodeSupplyDate->supplyDateRole);

        $this->date = new Date($nodeSupplyDate); 
    }
}