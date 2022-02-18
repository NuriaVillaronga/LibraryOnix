<?php
namespace OnixComponents;

use DateTime;
use SimpleXMLElement;

class Date
{
    public ?dateformatAttr $dateformat; // (0,1)

    public string $contents;
    
    public ?DateTime $valor;

    public ?DateFormatNode $dateFormat;

    private function getDateValue($formato) {
        if (DateTime::createFromFormat($this->$formato->contents, $this->contents) != null) {
            $this->valor = DateTime::createFromFormat($this->dateformat->contents, $this->contents);
        } 
        else {
            $this->valor = null;
        }
    }

    public function __construct(SimpleXMLElement $nodePublishingDate)  
    {
        $this->contents = (string)($nodePublishingDate->Date);

        if (isset($nodePublishingDate->Date['dateformat']) == true && isset($nodePublishingDate->DateFormat) == false) {
            $this->dateformat = new dateformatAttr($nodePublishingDate->Date['dateformat']);
            $this->dateFormat = null;
            $this->getDateValue($this->dateformat);
        } 
        if (isset($nodePublishingDate->DateFormat) == true && isset($nodePublishingDate->Date['dateformat']) == false) {
            $this->dateFormat = new DateFormatNode($nodePublishingDate->DateFormat);
            $this->dateformat = null;
            $this->getDateValue($this->dateFormat);
        }
        if (isset($nodePublishingDate->DateFormat) == false && isset($nodePublishingDate->Date['dateformat']) == false) {
            $this->dateFormat = null;
            $this->dateformat = new dateformatAttr();
            $this->getDateValue($this->dateformat);
        }
    }
}

