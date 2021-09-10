<?php
namespace OnixComponents;

use SimpleXMLElement;

class ResourceVersionFeature
{

    public ResourceVersionFeatureType $resourceVersionFeatureType; //(1)
    
    public ?FeatureValue $featureValue; //(0,1)
    
    public function __construct(SimpleXMLElement $nodeResourceVersionFeature)
    {
        $this->resourceVersionFeatureType = new ResourceVersionFeatureType($nodeResourceVersionFeature->ResourceVersionFeatureType);

        if (isset($nodeResourceVersionFeature->FeatureValue) == true) {
            $this->featureValue = new FeatureValue($nodeResourceVersionFeature->FeatureValue);
        } else {
            $this->featureValue = null;
        }
    }
}

