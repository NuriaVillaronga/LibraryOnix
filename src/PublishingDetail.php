<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublishingDetail
{
      
    public ?CountryOfPublication $countryOfPublication; //(0,1)
    
    public ?PublishingStatus $publishingStatus; //(0,1)
    
    public ?ROWSalesRightsType $rowSalesRightsType; //(0,1)
    
    public ?CityOfPublicationList $cityOfPublicationList; //(0,n)
    
    public ?ImprintList $imprintList; //(0,n)
    
    public ?PublisherList $publisherList; //(0,n)

    public ?CopyrightStatementList $copyrightStatementList; //(0,n)
    
    public ?PublishingDateList $publishingDateList; //(0,n)
    
    public ?SalesRightsList $salesRightsList; //(0,n)
    
    public function __construct(SimpleXMLElement $nodePublishingDetail)
    {
        if (isset($nodePublishingDetail->PublishingStatus) == true) {
            $this->publishingStatus = new PublishingStatus($nodePublishingDetail->PublishingStatus);
        } else {
            $this->publishingStatus = null;
        }

        if (isset($nodePublishingDetail->CopyrightStatement) == true) {
            $this->copyrightStatementList = new CopyrightStatementList($nodePublishingDetail);
        } else {
            $this->copyrightStatementList = null;
        }

        if (isset($nodePublishingDetail->CountryOfPublication) == true) {
            $this->countryOfPublication = new CountryOfPublication($nodePublishingDetail->CountryOfPublication);
        } else {
            $this->countryOfPublication = null;
        }

        if (isset($nodePublishingDetail->ROWSalesRightsType) == true) {
            $this->rowSalesRightsType = new ROWSalesRightsType($nodePublishingDetail->ROWSalesRightsType);
        } else {
            $this->rowSalesRightsType = null;
        }

        if (isset($nodePublishingDetail->CityOfPublication) == true) {
            $this->cityOfPublicationList = new CityOfPublicationList($nodePublishingDetail);
        } else {
            $this->cityOfPublicationList = null;
        }

        if (isset($nodePublishingDetail->Imprint) == true) {
            $this->imprintList = new ImprintList($nodePublishingDetail);
        } else {
            $this->imprintList = null;
        }

        if (isset($nodePublishingDetail->Publisher) == true) {
            $this->publisherList = new PublisherList($nodePublishingDetail);
        } else {
            $this->publisherList = null;
        }

        if (isset($nodePublishingDetail->PublishingDate) == true) {
            $this->publishingDateList = new PublishingDateList($nodePublishingDetail);
        } else {
            $this->publishingDateList = null;
        }

        if (isset($nodePublishingDetail->SalesRights) == true) {
            $this->salesRightsList = new SalesRightsList($nodePublishingDetail);
        } else {
            $this->salesRightsList = null;
        }
    }
}

