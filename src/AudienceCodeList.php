<?php
namespace OnixComponents;

use SimpleXMLElement;

class AudienceCodeList 
{

    /**
     *
     * @var AudienceCode[] 
     */
    public $arrayAudienceCode = array();

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail)
    {
        foreach ($nodeDescriptiveDetail->AudienceCode as $nodeAudienceCode) {
            $this->arrayAudienceCode[] = new AudienceCode($nodeAudienceCode);
        }
    }
}