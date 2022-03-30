<?php
namespace OnixComponents;

use DateTime;
use SimpleXMLElement;

class Date
{
    public string $contents;
    
    public ?DateTime $valor;

    public ?DateFormatNode $dateFormat;

    public ?dateformatAttr $dateformat; // (0,1)

    public function __construct(SimpleXMLElement $nodePublishingDate)  
    {
        $this->contents = (string)($nodePublishingDate->Date);

        if (isset($nodePublishingDate->DateFormat) == true && isset($nodePublishingDate->Date['dateformat']) == false) {
            $this->dateFormat = new DateFormatNode($nodePublishingDate->DateFormat);
            $this->dateformat = null;
            $this->valor= $this->getValor($this->dateFormat);
        }

        if (isset($nodePublishingDate->Date['dateformat']) == true && isset($nodePublishingDate->DateFormat) == false) {
            $this->dateformat = new dateformatAttr($nodePublishingDate->Date['dateformat']);
            $this->dateFormat = null;
            $this->valor= $this->getValor($this->dateformat);
        } 
        
        if (isset($nodePublishingDate->DateFormat) == false && isset($nodePublishingDate->Date['dateformat']) == false) {
            $this->dateFormat = null;
            $this->dateformat = new dateformatAttr();
            $this->valor= $this->getValor($this->dateformat);
        }
    }

    private function getValor($format) {
        if (DateTime::createFromFormat($format->contents, $this->contents) != null) {
            $valor = DateTime::createFromFormat($format->contents, $this->contents);
        } 
        else {
            $valor = null;
        }
        return $valor;
    }
}

