<?php
namespace OnixComponents;

use SimpleXMLElement;

class ResourceVersionList
{

    /**
     *
     * @var ResourceVersion[]
     */
    public $arrayResourceVersion = array();

    public function __construct(SimpleXMLElement $nodeSupportingResource)
    {
        foreach ($nodeSupportingResource->ResourceVersion as $nodeResourceVersion) {
            $this->arrayResourceVersion[] = new ResourceVersion($nodeResourceVersion);
        }
    }
}

