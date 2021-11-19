<?php
namespace OnixComponents;

use SimpleXMLElement;

class TextItem
{

    public ?NumberOfPages $numberOfPages; // 0,1

    public function __construct(SimpleXMLElement $nodeTextItem)
    {
        if (isset($nodeTextItem->NumberOfPages) == true) {
            $this->numberOfPages = new TextItem($nodeTextItem->NumberOfPages);
        } else {
            $this->numberOfPages = null;
        }
    }
}