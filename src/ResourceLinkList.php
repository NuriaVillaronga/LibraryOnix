<?php
namespace OnixComponents;

use SimpleXMLElement;

class ResourceLinkList
{

    /**
     *
     * @var ResourceLink[]
     */
    public $arrayResourceLink = array();

    public function __construct(SimpleXMLElement $nodeCitedContent_nodeResourceVersion)
    {
        foreach ($nodeCitedContent_nodeResourceVersion->ResourceLink as $nodeResourceLink) {
            $this->arrayResourceLink[] = new ResourceLink($nodeResourceLink);
        }
    }
}

