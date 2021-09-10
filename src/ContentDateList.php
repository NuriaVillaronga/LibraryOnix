<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContentDateList
{

    /**
     *
     * @var ContentDate[]
     */
    public $arrayContentDate = array();

    public function __construct(SimpleXMLElement $nodeCitedContent_nodeResourceVersion)
    {
        foreach ($nodeCitedContent_nodeResourceVersion->ContentDate as $nodeContentDate) {
            $this->arrayContentDate[] = new ContentDate($nodeContentDate);
        }
    }
}

