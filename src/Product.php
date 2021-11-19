<?php
namespace OnixComponents;

use SimpleXMLElement;

class Product
{
    public RecordReference $recordReference; //(1)-
    
    public NotificationType $notificationType; //(1)-
    
    public ?RecordSourceType $recordSourceType; //(0,1)-
    
    public ?RecordSourceName $recordSourceName; //(0,1)-
    
    public ?DescriptiveDetail $descriptiveDetail; //(0,1)

    public ?ContentDetail $contentDetail; //(0,1)
    
    public ?CollateralDetail $collateralDetail; //(0,1)
    
    public ?PublishingDetail $publishingDetail; //(0,1)
    
    public ?RelatedMaterial $relatedMaterial; //(0,1)
    
    public ?ProductSupplyList $productSupplyList; //(0,n)
    
    public ?RecordSourceIdentifierList $recordSourceIdentifierList; //(0,n)
    
    public ProductIdentifierList $productIdentifierList; //(1,n) -
    
    public function __construct(SimpleXMLElement $nodeProduct)
    {
        $this->recordReference = new RecordReference($nodeProduct->RecordReference);
        $this->notificationType = new NotificationType($nodeProduct->NotificationType);
        $this->productIdentifierList = new ProductIdentifierList($nodeProduct);

        if (isset($nodeProduct->ContentDetail) == true) {
            $this->contentDetail = new ContentDetail($nodeProduct->ContentDetail);
        } else {
            $this->contentDetail = null;
        }

        if (isset($nodeProduct->ProductSupply) == true) {
            $this->productSupplyList = new ProductSupplyList($nodeProduct);
        } else {
            $this->productSupplyList = null;
        }

        if (isset($nodeProduct->RecordSourceIdentifier) == true) {
            $this->recordSourceIdentifierList = new RecordSourceIdentifierList($nodeProduct);
        } else {
            $this->recordSourceIdentifierList = null;
        }

        if (isset($nodeProduct->RelatedMaterial) == true) {
            $this->relatedMaterial = new RelatedMaterial($nodeProduct->RelatedMaterial);
        } else {
            $this->relatedMaterial = null;
        }

        if (isset($nodeProduct->PublishingDetail) == true) {
            $this->publishingDetail = new PublishingDetail($nodeProduct->PublishingDetail);
        } else {
            $this->publishingDetail = null;
        }

        if (isset($nodeProduct->CollateralDetail) == true) {
            $this->collateralDetail = new CollateralDetail($nodeProduct->CollateralDetail);
        } else {
            $this->collateralDetail = null;
        }

        if (isset($nodeProduct->RecordSourceType) == true) {
            $this->recordSourceType = new RecordSourceType($nodeProduct->RecordSourceType);
        } else {
            $this->recordSourceType = null;
        }

        if (isset($nodeProduct->RecordSourceName) == true) {
            $this->recordSourceName = new RecordSourceName($nodeProduct->RecordSourceName);
        } else {
            $this->recordSourceName = null;
        }

        if (isset($nodeProduct->DescriptiveDetail) == true) {
            $this->descriptiveDetail = new DescriptiveDetail($nodeProduct->DescriptiveDetail);
        } else {
            $this->descriptiveDetail = null;
        }
    }
}

