<?php
namespace OnixComponents;

use SimpleXMLElement;

class SupportingResourceList
{

    /**
     *
     * @var SupportingResource[]
     */
    public $arraySupportingResource = array();

    public function __construct(SimpleXMLElement $nodeCollateralDetail)
    {
        foreach ($nodeCollateralDetail->SupportingResource as $nodeSupportingResource) {
            $this->arraySupportingResource[] = new SupportingResource($nodeSupportingResource);
        }
    }
}

