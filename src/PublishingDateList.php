<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublishingDateList
{

    /**
     *
     * @var PublishingDate[]
     */
    public $arrayPublishingDate = array();

    public function __construct(SimpleXMLElement $nodePublishingDetail)
    {
        foreach ($nodePublishingDetail->PublishingDate as $nodePublishingDate) {
            $this->arrayPublishingDate[] = new PublishingDate($nodePublishingDate);
        }
    }
}

