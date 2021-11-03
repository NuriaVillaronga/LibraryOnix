<?php
namespace OnixComponents;

use SimpleXMLElement;

class Measure
{
    
    public MeasureType $measureType; //(1)
    
    public Measurement $measurement; //(1)
    
    public MeasureUnitCode $measureUnitCode; //(1)
    
    public function __construct(SimpleXMLElement $nodeMeasure)
    {
        $this->measureType = new MeasureType($nodeMeasure->MeasureType);
        $this->measurement = new Measurement($nodeMeasure->Measurement);
        $this->measureUnitCode = new MeasureUnitCode($nodeMeasure->MeasureUnitCode);
    }
}

