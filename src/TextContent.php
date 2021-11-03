<?php
namespace OnixComponents;

use SimpleXMLElement;

class TextContent
{
    
    public ?SourceTitleList $sourceTitleList; //(0,n)
    
    public TextList $textList; //(1,n)
    
    public ContentAudienceList $contentAudienceList; //(1,n)
    
    public TextType $textType; //(1)
    
    public function __construct(SimpleXMLElement $nodeTextContent)
    {
        if (isset($nodeTextContent->SourceTitle) == true) {
            $this->sourceTitleList = new SourceTitleList($nodeTextContent);
        } else {
            $this->sourceTitleList = null;
        }

        $this->textList = new TextList($nodeTextContent);
        $this->contentAudienceList = new ContentAudienceList($nodeTextContent);
        $this->textType = new TextType($nodeTextContent->TextType);
    }
}

