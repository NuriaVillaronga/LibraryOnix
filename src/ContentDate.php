<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContentDate
{

    public Date $date;//1

    public ContentDateRole $contentDateRole;//1

    public function __construct(SimpleXMLElement $nodeContentDate)
    {
        $this->date = new Date($nodeContentDate->Date);
        $this->contentDateRole = new ContentDateRole($nodeContentDate->ContentDateRole);
    }
}

