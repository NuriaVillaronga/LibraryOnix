<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContentItem
{

    public TextItem $textItem;//1

    public function __construct(SimpleXMLElement $nodeContentItem)
    {
        $this->textItem = new TextItem($nodeContentItem->TextItem);
    }
}