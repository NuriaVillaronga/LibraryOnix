<?php
namespace OnixComponents;

use SimpleXMLElement;

class SupportingResource
{

    public ResourceVersionList $resourceVersionList; //(1,n)
    
    public ContentAudienceList $contentAudienceList; //(1,n)
    
    public ResourceContentType $resourceContentType; //(1)
    
    public ResourceMode $resourceMode; //(1)
    
    public function __construct(SimpleXMLElement $nodeSupportingResource)
    {
        $this->resourceVersionList = new ResourceVersionList($nodeSupportingResource);
        $this->contentAudienceList = new ContentAudienceList($nodeSupportingResource);
        $this->resourceContentType = new ResourceContentType($nodeSupportingResource->ResourceContentType);
        $this->resourceMode = new ResourceMode($nodeSupportingResource->ResourceMode);
    }
}

