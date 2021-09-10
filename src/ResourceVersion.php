<?php
namespace OnixComponents;

use SimpleXMLElement;

class ResourceVersion
{
    
    public ?ContentDateList $contentDateList; //(0,n)
    
    public ResourceLinkList $resourceLinkList; //(1,n)
    
    public ?ResourceVersionFeatureList $resourceVersionFeatureList; //(0,n)
    
    public ResourceForm $resourceForm; //(1)
    
    public function __construct(SimpleXMLElement $nodeResourceVersion)
    {
        $this->resourceLinkList = new ResourceLinkList($nodeResourceVersion);
        $this->resourceForm = new ResourceForm($nodeResourceVersion->ResourceForm);

        if (isset($nodeResourceVersion->ResourceVersionFeature) == true) {
            $this->resourceVersionFeatureList = new ResourceVersionFeatureList($nodeResourceVersion);
        } else {
            $this->resourceVersionFeatureList = null;
        }

        if (isset($nodeResourceVersion->ContentDate) == true) {
            $this->contentDateList = new ContentDateList($nodeResourceVersion);
        } else {
            $this->contentDateList = null;
        }
    }
}

