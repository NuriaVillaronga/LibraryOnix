<?php
namespace OnixComponents;

use SimpleXMLElement;

class Extent
{

    public ExtentType $extentType; // (1)

    public ?ExtentValue $extentValue; // (0,1)

    public ExtentUnit $extentUnit; // (1)

    public function __construct(SimpleXMLElement $nodeExtent)
    {
        $this->extentType = new ExtentType($nodeExtent->ExtentType);

        if (isset($nodeExtent->ExtentValue) == true) {
            $this->extentValue = new ExtentValue($nodeExtent->ExtentValue);
        } else {
            $this->extentValue = null;
        }

        $this->extentUnit = new ExtentUnit($nodeExtent->ExtentUnit);
    }
}

