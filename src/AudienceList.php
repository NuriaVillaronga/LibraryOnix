<?php
namespace OnixComponents;

use SimpleXMLElement;

class AudienceList
{

    /**
     *
     * @var Audience[] 
     */
    public $arrayAudience = array();

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail)
    {
        foreach ($nodeDescriptiveDetail->Audience as $nodeAudience) {
            $this->arrayAudience[] = new Audience($nodeAudience);
        }
    }
}

