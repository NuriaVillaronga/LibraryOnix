<?php
namespace OnixComponents;

use SimpleXMLElement;

class EpubTechnicalProtectionList
{

    /**
     *
     * @var EpubTechnicalProtection[]
     */
    public $arrayEpubTechnicalProtection = array();

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail)
    {
        foreach ($nodeDescriptiveDetail->EpubTechnicalProtection as $nodeEpubTechnicalProtection) {
            $this->arrayEpubTechnicalProtection[] = new EpubTechnicalProtection($nodeEpubTechnicalProtection);
        }
    }
}