<?php
namespace OnixComponents;

use SimpleXMLElement;

class Collection
{

    public CollectionType $collectionType;//1

    public ?TitleDetailList $titleDetailList;//0,n

    public function __construct(SimpleXMLElement $nodeCollection)
    {
        $this->collectionType = new CollectionType($nodeCollection->CollectionType);

        if (isset($nodeCollection->TitleDetail) == true) {
            $this->titleDetailList = new TitleDetailList($nodeCollection);
        } else {
            $this->titleDetailList = null;
        }
    }
}

