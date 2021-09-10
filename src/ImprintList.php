<?php
namespace OnixComponents;

use SimpleXMLElement;

class ImprintList
{

    /**
     *
     * @var Imprint[]
     */
    public $arrayImprint = array();

    public function __construct(SimpleXMLElement $nodePublishingDetail)
    {
        foreach ($nodePublishingDetail->Imprint as $nodeImprint) {
            $this->arrayImprint[] = new Imprint($nodeImprint);
        }
    }
}

