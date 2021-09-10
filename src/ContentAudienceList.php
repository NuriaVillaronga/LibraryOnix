<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContentAudienceList
{

    /**
     *
     * @var ContentAudience[]
     */
    public $arrayContentAudience = array();

    public function __construct(SimpleXMLElement $nodeTextContent_nodeCitedContent_nodeSupportingResource)
    {
        foreach ($nodeTextContent_nodeCitedContent_nodeSupportingResource->ContentAudience as $nodeContentAudience) {
            $this->arrayContentAudience[] = new ContentAudience($nodeContentAudience);
        }
    }
}

