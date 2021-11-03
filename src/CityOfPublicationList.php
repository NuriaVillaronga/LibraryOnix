<?php
namespace OnixComponents;

use SimpleXMLElement;

class CityOfPublicationList
{

    /**
     *
     * @var CityOfPublication[]
     */
    public $arrayCityOfPublication = array();

    public function __construct(SimpleXMLElement $nodePublishingDetail)
    {
        foreach ($nodePublishingDetail->CityOfPublication as $nodeCityOfPublication) {
            $this->arrayCityOfPublication[] = new CityOfPublication($nodeCityOfPublication);
        }
    }
}

