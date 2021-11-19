<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContentItemList
{

    /**
     *
     * @var ContentItem[] 
     */
    public $arrayContentItem = array();

    public function __construct(SimpleXMLElement $nodeContentDetail)
    {
        foreach ($nodeContentDetail->ContentItem as $nodeContentItem) {
            $this->arrayContentItem[] = new ContentItem($nodeContentItem);
        }
    }
}