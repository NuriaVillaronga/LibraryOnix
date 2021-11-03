<?php
namespace DBOnix;

use OnixComponents\ProductList;

class Repository 
{

    function resourceVersionFeature($resourceVersionFeatureList): string
    {
        $arrayResourceVersionFeature = $resourceVersionFeatureList->arrayResourceVersionFeature;
    
        $resourceVersionFeature = ' ';
    
        foreach ($arrayResourceVersionFeature as $RVF) {
    
            if (isset($RVF->featureValue) == true) {
                $featureValue = $RVF->featureValue->contents;
            } else {
                $featureValue = null;
            }
    
            $resourceVersionFeature = ' ' . $resourceVersionFeature . ' ' . $RVF->resourceVersionFeatureType->contents . ' ' . $featureValue;
        }
    
        return $resourceVersionFeature;
    }
    
    function contentDate($contentDateList): string
    {
        $arrayContentDate = $contentDateList->arrayContentDate;
    
        $contentDate = ' ';
    
        foreach ($arrayContentDate as $CD) {
            $contentDate = ' ' . $contentDate . $this->date_dateformat($CD->date) . ' ' . $CD->contentDateRole->contents;
        }
    
        return $contentDate;
    }
    
    function text($textList): string
    {
        $arrayText = $textList->arrayText;
    
        $text = ' ';
    
        foreach ($arrayText as $T) {
    
            if (isset($T->textformat) == true) {
                $contentText = $T->contents . ' ' . $T->textformat->contents;
            } else {
                $contentText = $T->contents;
            }
    
            $text = ' ' . $text . ' ' . $contentText;
        }
        
        return $text;
    }
    
    function sourceTitle($sourceTitleList): string
    {
        $arraySourceTitle = $sourceTitleList->arraySourceTitle;
    
        $sourceTitle = ' ';
    
        foreach ($arraySourceTitle as $ST) {
            $sourceTitle = ' ' . $sourceTitle . ' ' . $ST->contents;
        }
        
        return $sourceTitle;
    }
    
    function contentAudience($contentAudienceList): string
    {
        $arrayContentAudience = $contentAudienceList->arrayContentAudience;
    
        $contentAudience = ' ';
    
        foreach ($arrayContentAudience as $CA) {
            $contentAudience = ' ' . $contentAudience . '' . $CA->contents;
        }
        
        return $contentAudience;
    }
    
    function citationNote($citationNoteList): string
    {
        $arrayCitationNote = $citationNoteList->arrayCitationNote;
    
        $citationNote = ' ';
    
        foreach ($arrayCitationNote as $CN) {
            $citationNote = ' ' . $citationNote . ' ' . $CN->contents;
        }
    
        return $citationNote;
    }
    
    function resourceLink($resourceLinkList): string
    {
        $arrayResourceLink = $resourceLinkList->arrayResourceLink;
    
        $resourceLink = ' ';
    
        foreach ($arrayResourceLink as $RL) {
            $resourceLink = $resourceLink . ' ' . $RL->contents;
        }
        
        return $resourceLink;
    }
    
    function TextContent($textContentList): string
    {
        $arrayTextContent = $textContentList->arrayTextContent;
    
        $textContent = ' ';
    
        foreach ($arrayTextContent as $TC) {

            if (isset($TC->sourceTitleList) == true) {
                $sourceTitle = $this->sourceTitle($TC->sourceTitleList);
            } else {
                $sourceTitle = null;
            }
    
            $textContent = ' ' . $textContent . ' ' . $TC->textType->contents . $this->contentAudience($TC->contentAudienceList) . $this->text($TC->textList) . $sourceTitle;
        }
    
        return $textContent;
    }
    
    function resourceVersion($resourceVersionList): string
    {
        $arrayResourceVersion = $resourceVersionList->arrayResourceVersion;
    
        $resourceVersion = ' ';
    
        foreach ($arrayResourceVersion as $RV) {
    
            if (isset($RV->resourceVersionFeatureList) == true) {
                $resourceVersionFeature = $this->resourceVersionFeature($RV->resourceVersionFeatureList);
            } else {
                $resourceVersionFeature = null;
            }
    
            if (isset($RV->contentDateList) == true) {
                $contentDate = $this->contentDate($RV->contentDateList);
            } else {
                $contentDate = null;
            }
    
            $resourceVersion = ' ' . $resourceVersion . ' ' . $RV->resourceForm->contents . $resourceVersionFeature . $this->resourceLink($RV->resourceLinkList) . $contentDate;
        }
    
        return $resourceVersion;
    }
    
    function SupportingResource($supportingResourceList): string
    {
        $arraySupportingResource = $supportingResourceList->arraySupportingResource;
    
        $supportingResource = ' ';
    
        foreach ($arraySupportingResource as $SR) {
            $supportingResource = ' ' . $supportingResource . ' ' . $SR->resourceContentType->contents . $this->resourceVersion($SR->resourceVersionList) . $this->contentAudience($SR->contentAudienceList) . ' ' . $SR->resourceMode->contents;
        }
        
        return $supportingResource;
    }
    
    function CitedContent($citedContentList): string
    {
        $arrayCitedContent = $citedContentList->arrayCitedContent;
    
        $citedContent = ' ';
   
        foreach ($arrayCitedContent as $CC) {
    
            if (isset($CC->sourceType) == true) {
                $sourceType = $CC->sourceType->contents;
            } else {
                $sourceType = null;
            }
    
            if (isset($CC->contentDateList) == true) {
                $contentDate = $this->contentDate($CC->contentDateList);
            } else {
                $contentDate = null;
            }
    
            if (isset($CC->contentAudienceList) == true) {
                $contentAudience = $this->contentAudience($CC->contentAudienceList);
            } else {
                $contentAudience = null;
            }
    
            if (isset($CC->resourceLinkList) == true) {
                $resourceLink = $this->resourceLink($CC->resourceLinkList);
            } else {
                $resourceLink = null;
            }
    
            if (isset($CC->citationNoteList) == true) {
                $citationNote = $this->citationNote($CC->citationNoteList);
            } else {
                $citationNote = null;
            }
    
            if (isset($CC->sourceTitleList) == true) {
                $sourceTitle = $this->sourceTitle($CC->sourceTitleList);
            } else {
                $sourceTitle = null;
            }
    
            $citedContent = ' ' . $citedContent . ' ' . $CC->citedContentType->contents . $contentDate . $contentAudience . $resourceLink . $citationNote . $sourceTitle . ' ' . $sourceType;
        }
    
        return $citedContent;
    }

    function COLLATERAL_DETAIL($CD):string{  

        if (isset($CD->textContentList) == true) { 
            $textContent = $this->TextContent($CD->textContentList);   
        } else {
            $textContent = null;
        }
        
        if (isset($CD->citedContentList) == true) { 
            $citedContent = $this->CitedContent($CD->citedContentList);  
        } else {
            $citedContent = null;
        }
        
        if (isset($CD->supportingResourceList) == true) {
            $supportingResource = $this->SupportingResource($CD->supportingResourceList); 
        } else {
            $supportingResource = null;
        }

        return ' '. $textContent . $citedContent . $supportingResource; 
    }

    function nameIdentifier($nameIdentifierList): string
    {
        $arrayNameIdentifier = $nameIdentifierList->arrayNameIdentifier;
    
        $nameIdentifier = ' ';
    
        foreach ($arrayNameIdentifier as $NI) {
    
            if (isset($NI->idTypeName) == true) {
                $idTypeName = $NI->idTypeName->contents;
            } else {
                $idTypeName = null;
            }
    
            $nameIdentifier = ' '. $nameIdentifier . ' ' . $NI->nameIDType->contents . ' ' . $NI->idValue->contents . ' ' . $idTypeName;
        }
        
        return $nameIdentifier;
    }
    
    function biographicalNote($biographicalNoteList): string
    {
        $arrayBiographicalNote = $biographicalNoteList->arrayBiographicalNote;
    
        $biographicalNote = ' ';
    
        foreach ($arrayBiographicalNote as $BN) {
    
            if (isset($BN->textformat) == true) {
                $BN = $BN->contents . ' ' . $BN->textformat->contents;
            } else {
                $BN = $BN->contents;
            }
            
            $biographicalNote = $biographicalNote . ' ' . $BN;
        }
        
        return $biographicalNote;
    }
    
    function fromLanguage($fromLanguageList): string
    {
        $arrayFromLanguage = $fromLanguageList->arrayFromLanguage;
    
        $fromLanguage = ' ';
    
        foreach ($arrayFromLanguage as $FL) {
            $fromLanguage = ' '. $fromLanguage . ' ' . $FL->contents;
        }
        
        return $fromLanguage;
    }
    
    function ProductFormDetail($productFormDetailList): string
    {
        $arrayProductFormDetail = $productFormDetailList->arrayProductFormDetail;
    
        $productFormDetail = ' '; 
 
        foreach ($arrayProductFormDetail as $PFD) { 
            $productFormDetail = ' '. $productFormDetail . ' ' . $PFD->contents;
        }
    
        return $productFormDetail;
    }
    
    function ContributorStatement($contributorStatementList): string
    {
        $arrayContributorStatement = $contributorStatementList->arrayContributorStatement;
    
        $contributorStatement = ' ';
   
        foreach ($arrayContributorStatement as $CS) {
            $contributorStatement = ' '. $contributorStatement . ' ' . $CS->contents;
        }
    
        return $contributorStatement;
    }
    
    function contributorRole($contributorRoleList): string
    {
        $arrayContributorRole = $contributorRoleList->arrayContributorRole;
    
        $contributorRole = ' ';
    
        foreach ($arrayContributorRole as $CR) {
            $contributorRole = ' '. $contributorRole . ' ' . $CR->contents;
        }
    
        return $contributorRole;
    }
    
    function Contributor($contributorList): string
    {
        $arrayContributor = $contributorList->arrayContributor;

        $contributor = ' ';
    
        foreach ($arrayContributor as $C) {
    
            if (isset($C->sequenceNumber) == true) {
                $sequenceNumber = $C->sequenceNumber->contents;
            } else {
                $sequenceNumber = null;
            }
    
            if (isset($C->keyNames) == true) {
                $keyNames = $C->keyNames->contents;
            } else {
                $keyNames = null;
            }
    
            if (isset($C->namesBeforeKey) == true) {
                $namesBeforeKey = $C->namesBeforeKey->contents;
            } else {
                $namesBeforeKey = null;
            }
    
            if (isset($C->nameIdentifierList) == true) {
                $nameIdentifier = $this->nameIdentifier($C->nameIdentifierList);
            } else {
                $nameIdentifier = null;
            }
    
            if (isset($C->biographicalNoteList) == true) {
                $biographicalNote = $this->biographicalNote($C->biographicalNoteList);
            } else {
                $biographicalNote = null;
            }
    
            if (isset($C->fromLanguageList) == true) {
                $fromLanguage = $this->fromLanguage($C->fromLanguageList);
            } else {
                $fromLanguage = null;
            }
    
            $contributor = ' '. $contributor . ' ' . $sequenceNumber . ' ' . $keyNames . ' ' . $namesBeforeKey . $nameIdentifier . $biographicalNote . $fromLanguage . $this->contributorRole($C->contributorRoleList);
        }
        
        return $contributor;
    }
    
    function textcase($titleWithoutPrefix_titlePrefix): string  
    {
        if (isset($titleWithoutPrefix_titlePrefix->textcase) == true) {
            $titleWithoutPrefix_titlePrefix = $titleWithoutPrefix_titlePrefix->contents . ' ' . $titleWithoutPrefix_titlePrefix->textcase->contents;
        } else {
            $titleWithoutPrefix_titlePrefix = $titleWithoutPrefix_titlePrefix->contents;
        }
        
        return ' '. $titleWithoutPrefix_titlePrefix;
    }

    function titleElement($titleElementList): string
    {
        $arrayTitleElement = $titleElementList->arrayTitleElement;
    
        $countTE = 0;
        $titleElement = ' ';
    
        foreach ($arrayTitleElement as $TE) {
    
            $countTE ++;
    
            if (isset($TE->titleText) == true) {
                $titleText = $TE->titleText->contents;
            } else {
                $titleText = null;
            }
    
            if (isset($TE->sequenceNumber) == true) {
                $sequenceNumber = $TE->sequenceNumber->contents;
            } else {
                $sequenceNumber = null;
            }
    
            if (isset($TE->partNumber) == true) {
                $partNumber = $TE->partNumber->contents;
            } else {
                $partNumber = null;
            }
    
            if (isset($TE->noPrefix) == true and $TE->noPrefix->contents == 1) {
                $noPrefix = 'true';
            } else {
                $noPrefix = null;
            }
    
            if (isset($TE->titleWithoutPrefix) == true) {
                $titleWithoutPrefix = $this->textcase($TE->titleWithoutPrefix);
            } else {
                $titleWithoutPrefix = null;
            }
    
            if (isset($TE->titlePrefix) == true) {
                $titlePrefix = $this->textcase($TE->titlePrefix);
            } else {
                $titlePrefix = null;
            }
    
            $titleElement = ' '. $titleElement . ' ' . $TE->titleElementLevel->contents . ' ' . $titleText . ' ' . $sequenceNumber . ' ' . $partNumber . ' ' . $noPrefix . $titleWithoutPrefix . $titlePrefix;
        
        }
        
        return $titleElement;
    }
    
    function TitleDetail($titleDetailList): string
    {
        $arrayTitleDetail = $titleDetailList->arrayTitleDetail;
    
        $titleDetail = ' ';

        foreach ($arrayTitleDetail as $TD) {
            $titleDetail = ' ' . $titleDetail . ' ' . $TD->titleType->contents . $this->titleElement($TD->titleElementList);
        }
    
        return $titleDetail;
    }
    
    function Collection($collectionList): string
    {
        $arrayCollection = $collectionList->arrayCollection;

        $collection = ' ';
    
        foreach ($arrayCollection as $C) {
    
            if (isset($C->titleDetailList) == true) {
                $titleDetail = $this->TitleDetail($C->titleDetailList);
            } else {
                $titleDetail = null;
            }
    
            $collection = ' ' . $collection . ' ' . $C->collectionType->contents . $titleDetail;
        }
    
        return $collection; 
    }
    
    function Measure($measureList): string
    {
        $arrayMeasure = $measureList->arrayMeasure;

        $measure = ' ';
    
        foreach ($arrayMeasure as $M) {
            $measure = ' '. $measure . ' ' . $M->measureType->contents . ' ' . $M->measurement->contents . ' ' . $M->measureUnitCode->contents;
        }
        
        return $measure;
    }
    
    function ProductClassification($productClassificationList): string
    {
        $arrayProductClassification = $productClassificationList->arrayProductClassification;

        $productClassification = ' ';
    
        foreach ($arrayProductClassification as $PC) {
            $productClassification = ' ' . $productClassification . ' ' . $PC->productClassificationType->contents . ' ' . $PC->productClassificationCode->contents;
        }
        
        return $productClassification;
    }
    
    function Language($languageList): string
    {
        $arrayLanguage = $languageList->arrayLanguage;

        $language = ' ';
    
        foreach ($arrayLanguage as $L) {
            $language = ' ' . $language . ' ' . $L->languageRole->contents . ' ' . $L->languageCode->contents;
        }
    
        return $language;
    }
    
    function Extent($extentList): string
    {
        $arrayExtent = $extentList->arrayExtent;
    
        $extent = ' ';
    
        foreach ($arrayExtent as $E) {
    
            if (isset($E->extentValue) == true) {
                $extentValue = $E->extentValue->contents;
            } else {
                $extentValue = null;
            }
    
            $extent = ' ' . $extent . ' ' . $extentValue . ' ' . $E->extentType->contents . ' ' . $E->extentUnit->contents;
        }
    
        return $extent;
    }
    
    function Audience($audienceList): string
    {
        $arrayAudience = $audienceList->arrayAudience;

        $audience = ' ';
    
        foreach ($arrayAudience as $A) {
            $audience = ' ' . $audience . ' ' . $A->audienceCodeType->contents . ' ' . $A->audienceCodeValue->contents;
        }
    
        return $audience;
    }
    
    function subjectHeadingText($subjectHeadingTextList): string
    {
        $arraySubjectHeadingText = $subjectHeadingTextList->arraySubjectHeadingText;
    
        $subjectHeadingText = ' ';
    
        foreach ($arraySubjectHeadingText as $SHT) {
            $subjectHeadingText = ' '. $subjectHeadingText . ' ' . $SHT->contents;
        }
    
        return $subjectHeadingText;
    }
    
    function Subject($subjectList): string
    {
        $arraySubject = $subjectList->arraySubject;

        $subject = ' ';
    
        foreach ($arraySubject as $S) {
    
            if (isset($S->subjectSchemeVersion) == true) {
                $subjectSchemeVersion = $S->subjectSchemeVersion->contents;
            } else {
                $subjectSchemeVersion = null;
            }
    
            if (isset($S->subjectCode) == true) {
                $subjectCode = $S->subjectCode->contents;
            } else {
                $subjectCode = null;
            }
    
            if (isset($S->mainSubject) == true and $S->mainSubject->contents == 1) {
                $mainSubject = 'true';
            } else {
                $mainSubject = null;
            }
    
            if (isset($S->subjectHeadingTextList) == true) {
                $subjectHeadingText = $this->subjectHeadingText($S->subjectHeadingTextList);
            } else {
                $subjectHeadingText = null;
            }
    
            $subject = ' '. $subject . ' ' . $S->subjectSchemeIdentifier->contents . ' ' . $subjectSchemeVersion . ' ' . $subjectCode . ' ' . $mainSubject . $subjectHeadingText;
        }
    
        return $subject;
    }

    function DESCRIPTIVE_DETAIL($descriptiveDetail): string
    {
        if (isset($descriptiveDetail->countryOfManufacture) == true) {
            $countryOfManufacture = $descriptiveDetail->countryOfManufacture->contents;
        } else {
            $countryOfManufacture = null;
        }
    
        if (isset($descriptiveDetail->noEdition) == true and $descriptiveDetail->noEdition->contents == 1) {
            $noEdition = 'true';
        } else {
            $noEdition = null;
        }
    
        if (isset($descriptiveDetail->productFormDetailList) == true) {
            $productFormDetail = $this->ProductFormDetail($descriptiveDetail->productFormDetailList);
        } else {
            $productFormDetail = null;
        }
    
        if (isset($descriptiveDetail->contributorStatementList) == true) {
            $contributorStatement = $this->ContributorStatement($descriptiveDetail->contributorStatementList);
        } else {
            $contributorStatement = null;
        }
    
        if (isset($descriptiveDetail->measureList) == true) {
            $measure = $this->Measure($descriptiveDetail->measureList);
        } else {
            $measure = null;
        }
    
        if (isset($descriptiveDetail->productClassificationList) == true) {
            $productClassification = $this->ProductClassification($descriptiveDetail->productClassificationList);
        } else {
            $productClassification = null;
        }
    
        if (isset($descriptiveDetail->languageList) == true) {
            $language = $this->Language($descriptiveDetail->languageList);
        } else {
            $language = null;
        }
    
        if (isset($descriptiveDetail->audienceList) == true) {
            $audience = $this->Audience($descriptiveDetail->audienceList);
        } else {
            $audience = null;
        }
    
        if (isset($descriptiveDetail->subjectList) == true) {
            $subject = $this->Subject($descriptiveDetail->subjectList);
        } else {
            $subject = null;
        }
    
        if (isset($descriptiveDetail->extentList) == true) {
            $extent = $this->Extent($descriptiveDetail->extentList);
        } else {
            $extent = null;
        }
    
        if (isset($descriptiveDetail->contributorList) == true) {
            $contributor = $this->Contributor($descriptiveDetail->contributorList);
        } else {
            $contributor = null;
        }
    
        if (isset($descriptiveDetail->collectionList) == true) {
            $collection = $this->Collection($descriptiveDetail->collectionList);
        } else {
            $collection = null;
        }
    
        return ' ' . $descriptiveDetail->productComposition->contents . ' ' . $descriptiveDetail->productForm->contents . ' ' . $noEdition . $productFormDetail . $contributorStatement . $measure . $productClassification . $language . $audience . $subject . $extent . $contributor . $collection . $this->TitleDetail($descriptiveDetail->titleDetailList) . ' ' . $countryOfManufacture;
    }

    function PublishingDate($publishingDateList): string
    {
        $arrayPublishingDate = $publishingDateList->arrayPublishingDate;
    
        $publishingDate = ' ';

        foreach ($arrayPublishingDate as $PD) {
            $publishingDate = ' ' . $publishingDate . ' ' . $PD->publishingDateRole->contents . $this->date_dateformat($PD->date);
        }
    
        return $publishingDate;
    }
    
    function SalesRights($salesRightsList): string
    {
        $arraySalesRights = $salesRightsList->arraySalesRights;
    
        $salesRights = ' ';

        foreach ($arraySalesRights as $SR) {
            $salesRights = ' ' . $salesRights . ' ' . $SR->salesRightsType->contents . $this->territory($SR->territory);
        }
    
        return $salesRights;
    }
    
    function CityOfPublication($cityOfPublicationList): string
    {
        $arrayCityOfPublication = $cityOfPublicationList->arrayCityOfPublication;
    
        $cityOfPublication = ' ';
    
        foreach ($arrayCityOfPublication as $COP) {
            $cityOfPublication = ' ' . $cityOfPublication . ' ' . $COP->contents;
        }
        
        return $cityOfPublication;
    }
    
    function website($websiteList): string
    {
        $arrayWebsite = $websiteList->arrayWebsite;
    
        $website = ' ';
    
        foreach ($arrayWebsite as $W) {
    
            if (isset($W->websiteRole) == true) {
                $websiteRole = $W->websiteRole->contents;
            } else {
                $websiteRole = null;
            }
    
            $website = ' ' . $website . ' ' . $websiteRole . ' ' . $W->websiteLink->contents;
        }
    
        return $website;
    }
    
    function publisherIdentifier($publisherIdentifierList): string
    {
        $arrayPublisherIdentifier = $publisherIdentifierList->arrayPublisherIdentifier;
    
        $publisherIdentifier = ' ';
    
        foreach ($arrayPublisherIdentifier as $PI) {
            $publisherIdentifier = ' ' . $publisherIdentifier . ' ' . $PI->publisherIDType->contents . ' ' . $PI->idValue->contents;
        }
    
        return $publisherIdentifier;
    }
    
    function Publisher($publisherList): string
    {
        $arrayPublisher = $publisherList->arrayPublisher;
    
        $publisher = ' ';
    
        foreach ($arrayPublisher as $P) {
    
            if (isset($P->publishingRole) == true) {
                $publishingRole = $P->publishingRole->contents;
            } else {
                $publishingRole = null;
            }
    
            if (isset($P->publisherIdentifierList) == true) {
                $publisherIdentifier = $this->publisherIdentifier($P->publisherIdentifierList);
            } else {
                $publisherIdentifier = null;
            }
    
            if (isset($P->websiteList) == true) {
                $website = $this->website($P->websiteList);
            } else {
                $website = null;
            }
    
            if (isset($P->publisherName) == true) {
                $publisherName = $P->publisherName->contents;
            } else {
                $publisherName = null;
            }
    
            $publisher = ' ' . $publisher . ' ' . $publishingRole . $publisherIdentifier . $website . ' ' . $publisherName;
        }
    
        return $publisher;
    }
    
    function Imprint($imprintList): string
    {
        $arrayImprint = $imprintList->arrayImprint;
    
        $imprint = ' ';
    
        foreach ($arrayImprint as $I) {
    
            if (isset($I->imprintName) == true) {
                $imprintName = $I->imprintName->contents;
            } else {
                $imprintName = null;
            }
    
            $imprint = ' ' . $imprint . ' ' . $imprintName;
        }
    
        return $imprint;
    }

    function PUBLISHING_DETAIL($PD): string
    {
        if (isset($PD->cityOfPublicationList) == true) {
            $cityOfPublication = $this->CityOfPublication($PD->cityOfPublicationList);
        } else {
            $cityOfPublication = null;
        }
    
        if (isset($PD->imprintList) == true) {
            $imprint = $this->Imprint($PD->imprintList);
        } else {
            $imprint = null;
        }
    
        if (isset($PD->publisherList) == true) {
            $publisher = $this->Publisher($PD->publisherList);
        } else {
            $publisher = null;
        }
    
        if (isset($PD->publishingDateList) == true) {
            $publishingDate = $this->PublishingDate($PD->publishingDateList);
        } else {
            $publishingDate = null;
        }
    
        if (isset($PD->salesRightsList) == true) {
            $salesRights = $this->SalesRights($PD->salesRightsList);
        } else {
            $salesRights = null;
        }
    
        if (isset($PD->countryOfPublication) == true) {
            $countryOfPublication = $PD->countryOfPublication->contents;
        } else {
            $countryOfPublication = null;
        }
    
        if (isset($PD->publishingStatus) == true) {
            $publishingStatus = $PD->publishingStatus->contents;
        } else {
            $publishingStatus = null;
        }
    
        if (isset($PD->rowSalesRightsType) == true) {
            $rowSalesRightsType = $PD->rowSalesRightsType->contents;
        } else {
            $rowSalesRightsType = null;
        }
        
        return $cityOfPublication . $imprint . $publisher . $publishingDate . $salesRights . ' ' . $countryOfPublication . ' ' . $publishingStatus . ' ' . $rowSalesRightsType;
    }

    function marketDate($marketDateList): string
    {
        $arrayMarketDate = $marketDateList->arrayMarketDate;
    
        $marketDate = ' ';
    
        foreach ($arrayMarketDate as $MD) {
            $marketDate = ' ' . $marketDate . ' ' . $MD->marketDateRole->contents . ' ' . $this->date_dateformat($MD->date);
        }
    
        return $marketDate;
    }
    
    function date_dateformat($D): string
    {
        if (isset($D->dateformat) == true) {
            $date = $D->contents . ' ' . $D->dateformat->contents;
        } else {
            $date = $D->contents;
        }
    
        return ' ' . $date;
    }
    
    function Market($marketList): string
    {
        $arrayMarket = $marketList->arrayMarket;
    
        $market = ' ';
    
        foreach ($arrayMarket as $M) {
            $market = ' ' . $market . ' ' . $this->territory($M->territory);
        }
        
        return $market;
    }
    
    function territory($T): string
    {
        if (isset($T->countriesExcluded) == true) {
            $countriesExcluded = $T->countriesExcluded->contents;
        } else {
            $countriesExcluded = null;
        }
    
        if (isset($T->countriesIncluded) == true) {
            $countriesIncluded = $T->countriesIncluded->contents;
        } else {
            $countriesIncluded = null;
        }
    
        if (isset($T->regionsIncluded) == true) {
            $regionsIncluded = $T->regionsIncluded->contents;
        } else {
            $regionsIncluded = null;
        }

        return ' ' .$countriesExcluded . ' ' . $countriesIncluded . ' ' . $regionsIncluded;
    }
    
    function returnsConditions($returnsConditionsList): string
    {
        $arrayReturnsConditions = $returnsConditionsList->arrayReturnsConditions;
    
        $returnsConditions = ' ';
    
        foreach ($arrayReturnsConditions as $RC) {
            $returnsConditions = ' ' . $returnsConditions . ' ' . $RC->returnsCodeType->contents . ' ' . $RC->returnsCode->contents;
        }
    
        return $returnsConditions;
    }
    
    function discountCoded($discountCodedList): string
    {
        $arrayDiscountCoded = $discountCodedList->arrayDiscountCoded;
    
        $discountCoded = ' ';
    
        foreach ($arrayDiscountCoded as $DC) {
            $discountCoded = ' ' . $discountCoded . ' ' . $DC->discountCodeType->contents . ' ' . $DC->discountCode->contents;
        }
    
        return $discountCoded;
    }
    
    function tax($taxList): string
    {
        $arrayTax = $taxList->arrayTax;
    
        $tax = ' ';
    
        foreach ($arrayTax as $T) {
    
            if (isset($T->taxType) == true) {
                $taxType = $T->taxType->contents;
            } else {
                $taxType = null;
            }
    
            if (isset($T->taxRateCode) == true) {
                $taxRateCode = $T->taxRateCode->contents;
            } else {
                $taxRateCode = null;
            }
    
            if (isset($T->taxRatePercent) == true) {
                $taxRatePercent = $T->taxRatePercent->contents;
            } else {
                $taxRatePercent = null;
            }
    
            if (isset($T->taxableAmount) == true) {
                $taxableAmount = $T->taxableAmount->contents;
            } else {
                $taxableAmount = null;
            }
    
            if (isset($T->taxAmount) == true) {
                $taxAmount = $T->taxAmount->contents;
            } else {
                $taxAmount = null;
            }
    
            $tax = ' ' . $tax . ' ' . $taxType . ' ' . $taxRateCode . ' ' . $taxRatePercent . ' ' . $taxableAmount . ' ' . $taxAmount;
        }
    
        return $tax;
    }
    
    function price($priceList): string
    {
        $arrayPrice = $priceList->arrayPrice;
    
        $price = ' ';
    
        foreach ($arrayPrice as $P) {

            if (isset($P->priceType) == true) {
                $priceType = $P->priceType->contents;
            } else {
                $priceType = null;
            }
    
            if (isset($P->priceStatus) == true) {
                $priceStatus = $P->priceStatus->contents;
            } else {
                $priceStatus = null;
            }
    
            if (isset($P->priceAmount) == true) {
                $priceAmount = $P->priceAmount->contents;
            } else {
                $priceAmount = null;
            }
    
            if (isset($P->printedOnProduct) == true) {
                $printedOnProduct = $P->printedOnProduct->contents;
            } else {
                $printedOnProduct = null;
            }
    
            if (isset($P->positionOnProduct) == true) {
                $positionOnProduct = $P->positionOnProduct->contents;
            } else {
                $positionOnProduct = null;
            }
    
            if (isset($P->currencyCode) == true) {
                $currencyCode = $P->currencyCode->contents;
            } else {
                $currencyCode = null;
            }
    
            if (isset($P->discountCodedList) == true) {
                $discountCoded = $this->discountCoded($P->discountCodedList);
            } else {
                $discountCoded = null;
            }
    
            if (isset($P->taxList) == true) {
                $tax = $this->tax($P->taxList);
            } else {
                $tax = null;
            }
    
            if (isset($P->discountList) == true) {
                $discount = $this->discount($P->discountList);
            } else {
                $discount = null;
            }
    
            if (isset($P->territory) == true) {
                $territory = $this->territory($P->territory);
            } else {
                $territory = null;
            }
    
            $price = ' ' . $price . ' ' . $priceType . ' ' . $priceStatus . ' ' . $priceAmount . ' ' . $printedOnProduct . ' ' . $positionOnProduct . ' ' . $currencyCode . $discountCoded . $tax . $discount . $territory;
        }
    
        return $price;
    }
    
    function discount($discountList): string
    {
        $arrayDiscount = $discountList->arrayDiscount;
    
        $discount = ' ';

        foreach ($arrayDiscount as $D) {
    
            if (isset($D->discountPercent) == true) {
                $discountPercent = $D->discountPercent->contents;
            } else {
                $discountPercent = null;
            }
    
            $discount = ' ' . $discount . ' ' . $discountPercent;
        }
    
        return $discount;
    }
    
    function telephoneNumber($telephoneNumberList): string
    {
        $arrayTelephoneNumber = $telephoneNumberList->arrayTelephoneNumber;
    
        $telephoneNumber = ' ';
    
        foreach ($arrayTelephoneNumber as $TN) {
            $telephoneNumber = ' ' . $telephoneNumber . ' ' . $TN->contents;
        }
    
        return $telephoneNumber;
    }
    
    function supplierIdentifier($supplierIdentifierList): string
    {
        $arraySupplierIdentifier = $supplierIdentifierList->arraySupplierIdentifier;
    
        $supplierIdentifier = ' ';
    
        foreach ($arraySupplierIdentifier as $SI) {
            $supplierIdentifier = ' ' . $supplierIdentifier . ' ' . $SI->supplierIDType->contents . '' . $SI->idValue->contents;
        }
        
        return $supplierIdentifier;
    }
    
    function supplier($S): string  
    {   
        if (isset($S->supplierName) == true) {
            $supplierName = $S->supplierName->contents;
        } else {
            $supplierName = null;
        }
    
        if (isset($S->supplierIdentifierList) == true) {
            $supplierIdentifier = $this->supplierIdentifier($S->supplierIdentifierList);
        } else {
            $supplierIdentifier = null;
        }
    
        if (isset($S->telephoneNumberList) == true) {
            $telephoneNumber = $this->telephoneNumber($S->telephoneNumberList);
        } else {
            $telephoneNumber = null;
        }

        return ' ' . $S->supplierRole->contents . ' ' . $supplierName . $supplierIdentifier . $telephoneNumber;
    }
    
    function SupplyDetail($supplyDetailList): string
    {
        $arraySupplyDetail = $supplyDetailList->arraySupplyDetail;
    
        $supplyDetail = ' ';
        $countSD = 0;
    
        foreach ($arraySupplyDetail as $SD) {
    
            $countSD ++;
    
            if (isset($SD->returnsConditionsList) == true) {
                $returnsConditions = $this->returnsConditions($SD->returnsConditionsList);
            } else {
                $returnsConditions = null;
            }
    
            if (isset($SD->priceList) == true) {
                $price = $this->price($SD->priceList);
            } else {
                $price = null;
            }
    
            if (isset($SD->packQuantity) == true) {
                $packQuantity = $SD->packQuantity->contents;
            } else {
                $packQuantity = null;
            }
    
            $supplyDetail = ' ' . $supplyDetail . ' ' . $SD->productAvailability->contents . $this->supplier($SD->supplier) . ' ' . $packQuantity . $price . $returnsConditions;
        }
    
        return $supplyDetail;
    }
    
    function marketPublishingDetail($MPD) 
    {
        if (isset($MPD->marketDateList) == true) {
            $marketDate = $this->marketDate($MPD->marketDateList);
        } else {
            $marketDate = null;
        }
    
        return ' ' . $MPD->marketPublishingStatus->contents . $marketDate;
    }

    function PRODUCT_SUPPLY($productSupplyList): string
    {
        $arrayProductSupply = $productSupplyList->arrayProductSupply;
    
        $countPS = 0;
        $productSupply = ' ';
    
        foreach ($arrayProductSupply as $PS) {
    
            $countPS ++;
    
            if (isset($PS->marketPublishingDetail) == true) {
                $marketPublishingDetail = $this->marketPublishingDetail($PS->marketPublishingDetail);
            } else {
                $marketPublishingDetail = null;
            }
    
            if (isset($PS->marketList) == true) {
                $market = $this->Market($PS->marketList);
            } else {
                $market = null;
            }
    
            $productSupply = ' ' . $productSupply . $marketPublishingDetail . $market . $this->SupplyDetail($PS->supplyDetailList);
        }
    
        return $productSupply;
    }

    function RECORD_SOURCE_IDENTIFIER($recordSourceIdentifierList): string
    {
        $arrayRecordSourceIdentifier = $recordSourceIdentifierList->arrayRecordSourceIdentifier;

        $recordSourceIdentifier = ' ';
    
        foreach ($arrayRecordSourceIdentifier as $RSI) {
            $recordSourceIdentifier = ' ' . $recordSourceIdentifier . ' ' . $RSI->recordSourceIDType->contents . ' ' . $RSI->idValue->contents;
        }
    
        return $recordSourceIdentifier;
    }

    function Product_Identifier($productIdentifierList): string
    {
        $arrayProductIdentifier = $productIdentifierList->arrayProductIdentifier;

        $productIdentifier = ' ';
    
        foreach ($arrayProductIdentifier as $PI) {
            $productIdentifier = ' ' . $productIdentifier . ' ' . $PI->productIDType->contents . ' ' . $PI->idValue->contents;
        }
    
        return $productIdentifier;
    }

    function productRelationCode($productRelationCodeList): string
    {
        $arrayProductRelationCode = $productRelationCodeList->arrayProductRelationCode;
    
        $productRelationCode = ' ';
    
        foreach ($arrayProductRelationCode as $PRC) {
            $productRelationCode = ' ' . $productRelationCode . ' ' . $PRC->contents;
        }
        
        return $productRelationCode;
    }

    function RelatedProduct($relatedProductList): string
    {
        $arrayRelatedProduct = $relatedProductList->arrayRelatedProduct;
    
        $relatedProduct = ' ';
    
        foreach ($arrayRelatedProduct as $RP) {
            $relatedProduct = ' ' . $relatedProduct .  $this->Product_Identifier($RP->productIdentifierList) . $this->productRelationCode($RP->productRelationCodeList);
        }
    
        return $relatedProduct;
    }
    
    function workIdentifier($workIdentifierList): string
    {
        $arrayWorkIdentifier = $workIdentifierList->arrayWorkIdentifier;
    
        $workIdentifier = ' ';
    
        foreach ($arrayWorkIdentifier as $WI) {
            $workIdentifier = ' ' . $workIdentifier . ' ' . $WI->workIDType->contents . ' ' . $WI->idValue->contents;
        }
    
        return $workIdentifier;
    }
    
    function RelatedWork($relatedWorkList): string
    {
        $arrayRelatedWork = $relatedWorkList->arrayRelatedWork;
    
        $relatedWork = ' ';

        foreach ($arrayRelatedWork as $RW) {
            $relatedWork = ' ' . $relatedWork . $this->workIdentifier($RW->workIdentifierList) . ' ' . $RW->workRelationCode->contents;
        }
    
        return $relatedWork;
    }
    
    function RELATED_MATERIAL($relatedMaterial): string
    {
        if (isset($relatedMaterial->relatedProductList) == true) {
            $relatedProduct = $this->RelatedProduct($relatedMaterial->relatedProductList);
        } else {
            $relatedProduct = null;
        }
    
        if (isset($relatedMaterial->relatedWorkList) == true) {
            $relatedWork = $this->RelatedWork($relatedMaterial->relatedWorkList);
        } else {
            $relatedWork = null;
        }
    
        return $relatedProduct . $relatedWork;
    }
    
    public function getProduct($P): string
    {
        if (isset($P->recordSourceType) == true) {
            $recordSourceType = $P->recordSourceType->contents;
        } else {
            $recordSourceType = null;
        }
        
        if (isset($P->relatedMaterial) == true) {
            $relatedMaterial = $this->RELATED_MATERIAL($P->relatedMaterial);
        } else {
            $relatedMaterial = null;
        }
        
        if (isset($P->recordSourceName) == true) {
            $recordSourceName = $P->recordSourceName->contents;
        } else {
            $recordSourceName = null;
        }
        
        if (isset($P->recordSourceIdentifierList) == true) {
            $recordSourceIdentifier = $this->RECORD_SOURCE_IDENTIFIER($P->recordSourceIdentifierList);
        } else {
            $recordSourceIdentifier = null;
        }
        
        if (isset($P->descriptiveDetail) == true) {
            $descriptiveDetail = $this->DESCRIPTIVE_DETAIL($P->descriptiveDetail);
        } else {
            $descriptiveDetail = null;
        }
        
        if (isset($P->collateralDetail) == true) {
            $collateralDetail = $this->COLLATERAL_DETAIL($P->collateralDetail);
        } else {
            $collateralDetail = null;
        }
        
        if (isset($P->productSupplyList) == true) {
            $productSupply = $this->PRODUCT_SUPPLY($P->productSupplyList);
        } else {
            $productSupply = null;
        }
        
        if (isset($P->publishingDetail) == true) {
            $publishingDetail = $this->PUBLISHING_DETAIL($P->publishingDetail);
        } else {
            $publishingDetail = null;
        }
        
        return $recordSourceIdentifier . $descriptiveDetail . $collateralDetail . $productSupply . $publishingDetail . ' ' . $P->notificationType->contents . ' ' . $recordSourceType . ' ' . $recordSourceName . $relatedMaterial . ' ' . $P->recordReference->contents . $this->Product_Identifier($P->productIdentifierList);
    }
    
    public function DataBase() 
    {
        $nodoONIXMessage = simplexml_load_file(__DIR__.'/book.xml');
        
        $productList = new ProductList($nodoONIXMessage);
        $arrayProducts = $productList->arrayProduct;

        $rowsProduct = 0;  
        
        $idProduct = 0;
        
        foreach ($arrayProducts as $P) {
            $idProduct ++;
            
            $product = $this->getProduct($P);
            $sql = "INSERT INTO Product(idProduct, contents) VALUES ('$idProduct','$product')";

            $connection = new Connection();
            $connection->update_db($connection->set_connection("localhost", "root", "Ouroverde7.", "db_onix", "3306"), $sql, $rowsProduct);

        }
    }
}

