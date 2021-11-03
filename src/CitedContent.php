<?php
namespace OnixComponents;

use SimpleXMLElement;

class CitedContent
{

    public ?SourceTitleList $sourceTitleList; // (0,n)

    public ?ContentAudienceList $contentAudienceList; // (0,n)

    public ?CitationNoteList $citationNoteList; // (0,n)

    public ?ResourceLinkList $resourceLinkList; // (0,n)

    public ?ContentDateList $contentDateList; // (0,n)

    public CitedContentType $citedContentType; // (1)

    public ?SourceType $sourceType; // (0,1)

    public function __construct(SimpleXMLElement $nodeCitedContent)
    {
        $this->citedContentType = new CitedContentType($nodeCitedContent->CitedContentType);

        if (isset($nodeCitedContent->SourceTitle) == true) {
            $this->sourceTitleList = new SourceTitleList($nodeCitedContent);
        } else {
            $this->sourceTitleList = null;
        }

        if (isset($nodeCitedContent->ContentAudience) == true) {
            $this->contentAudienceList = new ContentAudienceList($nodeCitedContent);
        } else {
            $this->contentAudienceList = null;
        }

        if (isset($nodeCitedContent->CitationNote) == true) {
            $this->citationNoteList = new CitationNoteList($nodeCitedContent);
        } else {
            $this->citationNoteList = null;
        }

        if (isset($nodeCitedContent->ResourceLink) == true) {
            $this->resourceLinkList = new ResourceLinkList($nodeCitedContent);
        } else {
            $this->resourceLinkList = null;
        }

        if (isset($nodeCitedContent->ContentDate) == true) {
            $this->contentDateList = new ContentDateList($nodeCitedContent);
        } else {
            $this->contentDateList = null;
        }

        if (isset($nodeCitedContent->SourceType) == true) {
            $this->sourceType = new SourceType($nodeCitedContent->SourceType);
        } else {
            $this->sourceType = null;
        }
    }
}


