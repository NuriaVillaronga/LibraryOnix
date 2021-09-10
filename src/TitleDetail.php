<?php
namespace OnixComponents;

use SimpleXMLElement;

class TitleDetail
{
    
    public TitleType $titleType; //(1)
    
    public TitleElementList $titleElementList; //(1,n) 
    
    public function __construct(SimpleXMLElement $nodeTitleDetail)
    {
        $this->titleType = new TitleType($nodeTitleDetail->TitleType);
        $this->titleElementList = new TitleElementList($nodeTitleDetail);
    }
}

