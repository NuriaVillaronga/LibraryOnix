<?php
namespace OnixComponents;

use SimpleXMLElement;

class AudienceRangeList 
{

    /**
     *
     * @var AudienceRange[] 
     */
    public $arrayAudienceRange = array();

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail)
    {
        foreach ($nodeDescriptiveDetail->AudienceRange as $nodeAudienceRange) {
            $this->arrayAudienceRange[] = new AudienceRange($nodeAudienceRange);
        }
    }
}