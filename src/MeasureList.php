<?php
namespace OnixComponents;

use SimpleXMLElement;

class MeasureList
{

    /**
     *
     * @var Measure[]
     */
    public $arrayMeasure = array();

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail)
    {
        foreach ($nodeDescriptiveDetail->Measure as $nodeMeasure) {
            $this->arrayMeasure[] = new Measure($nodeMeasure);
        }
    }
}

