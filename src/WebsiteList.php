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

    public function __construct(SimpleXMLElement $nodePublisher_Contributor)
    {
        foreach ($nodePublisher_Contributor->Website as $nodeWebsite) { 
            $this->arrayWebsite[] = new Website($nodeWebsite);
        }
    }
}

