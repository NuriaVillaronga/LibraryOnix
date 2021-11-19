<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContentDetail
{

    public ContentItemList $contentItemList; // (1,n) 

    public function __construct(SimpleXMLElement $nodeContentDetail)
    {
        $this->contentItemList = new ContentItemList($nodeContentDetail);
    }
}

