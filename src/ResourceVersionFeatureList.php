<?php
namespace OnixComponents;

use SimpleXMLElement;

class ResourceVersionFeatureList
{

    /**
     *
     * @var ResourceVersionFeature[]
     */
    public $arrayResourceVersionFeature = array();

    public function __construct(SimpleXMLElement $nodeResourceVersion)
    {
        foreach ($nodeResourceVersion->ResourceVersionFeature as $nodeResourceVersionFeature) {
            $this->arrayResourceVersionFeature[] = new ResourceVersionFeature($nodeResourceVersionFeature);
        }
    }
}

