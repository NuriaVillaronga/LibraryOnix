<?php
namespace OnixComponents;

use SimpleXMLElement;

class SourceTitleList
{

    /**
     *
     * @var SourceTitle[]
     */
    public $arraySourceTitle = array();

    public function __construct(SimpleXMLElement $nodeTextContent_nodeCitedContent)
    {
        foreach ($nodeTextContent_nodeCitedContent->SourceTitle as $nodeSourceTitle) {
            $this->arraySourceTitle[] = new SourceTitle($nodeSourceTitle);
        }
    }
}

