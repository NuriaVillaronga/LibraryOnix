<?php
namespace OnixComponents;

use SimpleXMLElement;

class WebsiteList
{

    /**
     *
     * @var Website[]
     */
    public $arrayWebsite = array();

    public function __construct(SimpleXMLElement $nodePublisher)
    {
        foreach ($nodePublisher->Website as $nodeWebsite) {
            $this->arrayWebsite[] = new Website($nodeWebsite);
        }
    }
}

