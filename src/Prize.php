<?php
namespace OnixComponents;

use SimpleXMLElement;

class Prize 
{
    public ?PrizeYear $prizeYear; // (0,1)

    public ?PrizeCountry $prizeCountry; // (0,1)

    public ?PrizeJuryList $prizeJuryList; // (0,n) 

    public ?PrizeCode $prizeCode; // (0,1)

    public PrizeNameList $prizeNameList; // (1,n)

    public function __construct(SimpleXMLElement $nodePrize)
    {
        if (isset($nodePrize->PrizeCountry) == true) {
            $this->prizeCountry = new PrizeCountry($nodePrize->PrizeCountry);
        } else {
            $this->prizeCountry = null;
        }

        if (isset($nodePrize->PrizeJury) == true) {
            $this->prizeJuryList = new PrizeJuryList($nodePrize);
        } else {
            $this->prizeJuryList = null;
        }

        if (isset($nodePrize->PrizeYear) == true) {
            $this->prizeYear = new PrizeYear($nodePrize->PrizeYear);
        } else {
            $this->prizeYear = null;
        }

        $this->prizeNameList = new PrizeNameList($nodePrize);

        if (isset($nodePrize->PrizeCode) == true) {
            $this->prizeCode = new PrizeCode($nodePrize->PrizeCode);
        } else {
            $this->prizeCode = null;
        }
    }
}

