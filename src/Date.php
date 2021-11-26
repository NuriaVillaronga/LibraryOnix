<?php
namespace OnixComponents;

use DateTime;
use SimpleXMLElement;

class Date
{
    public ?dateformat $dateformat; // (0,1)

    public string $contents;
    
    public ?DateTime $valor;

    public function __construct(SimpleXMLElement $nodoPublishingDate)
    {
        $this->contents = (string)($nodoPublishingDate->Date);

        if (isset($nodoPublishingDate->Date['dateformat']) == true) {
            $this->dateformat = new dateformat($nodoPublishingDate->Date['dateformat']);
        } 
        elseif(isset($nodoPublishingDate->DateFormat) == true) {
            $this->dateformat = new dateformat($nodoPublishingDate->DateFormat);
        }
        else {
            $this->dateformat = new dateformat();
        }

        $fecha = DateTime::createFromFormat($this->dateformat->contents, $this->contents);

        if (isset($fecha) == true) {
            $this->valor = $fecha;
        } 
        else {
            $this->valor = null;
        }

        var_dump($this->valor);
        die(); 
    }
}

