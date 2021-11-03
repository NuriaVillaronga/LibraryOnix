<?php
namespace OnixComponents;

use SimpleXMLElement;

class SalesRightsList
{

    /**
     *
     * @var SalesRights[]
     */
    public $arraySalesRights = array();

    public function __construct(SimpleXMLElement $nodePublishingDetail)
    {
        foreach ($nodePublishingDetail->SalesRights as $nodeSalesRights) {
            $this->arraySalesRights[] = new SalesRights($nodeSalesRights);
        }
    }
}

