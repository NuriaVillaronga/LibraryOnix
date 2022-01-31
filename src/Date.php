<?php
namespace OnixComponents;

use DateTime;
use SimpleXMLElement;

class Date
{
    public ?dateformatAttr $dateformat; // (0,1)

    public string $contents;
    
    public ?DateTime $valor;

    public function __construct(SimpleXMLElement $nodeDate) 
    {
        if (isset($nodeDate['dateformat']) == true) {
            $this->dateformat = new dateformatAttr($nodeDate['dateformat']);
        } 
        else {
            $this->dateformat = new dateformatAttr();
        }

        $this->contents = (string)($nodeDate);
        
        if (DateTime::createFromFormat($this->dateformat->contents, $this->contents) != null) {
            $this->valor = DateTime::createFromFormat($this->dateformat->contents, $this->contents);
        } 
        else {
            $this->valor = null;
        }
    }
}

