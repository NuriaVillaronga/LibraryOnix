<?php
include 'Connection.php';
use OnixComponents\ProductList;

class Repository 
{
    
    public function resourceVersionFeature($resourceVersionFeatureList): string
    {
        $arrayResourceVersionFeature = $resourceVersionFeatureList->arrayResourceVersionFeature;
        
        $resourceVersionFeature = ' ';
        $countRVF = 0;
        
        foreach ($arrayResourceVersionFeature as $RVF) {
            
            $countRVF ++;
            
            if (isset($RVF->featureValue) == true) {
                $featureValue = '-FeatureValue:' . $RVF->featureValue->contents;
            } else {
                $featureValue = null;
            }
            
            $resourceVersionFeature = $resourceVersionFeature . ' -ResourceVersionFeature[' . $countRVF . ']:(-ResourceVersionFeatureType:' . $RVF->resourceVersionFeatureType->contents . ' ' . $featureValue . ')';
        }
        
        return $resourceVersionFeature;
    }
    
    public function date_dateformat($D): string
    {
        if (isset($D->dateformat) == true) {
            $date = '-Date:(' . $D->contents . ', ·dateformat:' . $D->dateformat->contents . ')';
        } else {
            $date = '-Date:' . $D->contents;
        }
        
        return $date;
    }
    
    public function contentDate($contentDateList): string
    {
        $arrayContentDate = $contentDateList->arrayContentDate;
        
        $contentDate = ' ';
        $countCD = 0;
        
        foreach ($arrayContentDate as $CD) {
            $countCD ++;
            $contentDate = $contentDate . ' -ContentDate[' . $countCD . ']:(' . date_dateformat($CD->date) . ', -ContentDateRole:' . $CD->contentDateRole->contents . ')';
        }
        
        return $contentDate;
    }
    
    public function text($textList): string
    {
        $arrayText = $textList->arrayText;
        
        $text = ' ';
        $countT = 0;
        
        foreach ($arrayText as $T) {
            $countT ++;
            
            if (isset($T->textformat) == true) {
                $contentText = '(' . $T->contents . ', ·textformat:' . $T->textformat->contents . ')';
            } else {
                $contentText = $T->contents;
            }
            
            $text = $text . ' -Text[' . $countT . ']:' . $contentText;
        }
        
        return $text;
    }
    
    public function sourceTitle($sourceTitleList): string
    {
        $arraySourceTitle = $sourceTitleList->arraySourceTitle;
        
        $sourceTitle = ' ';
        $countST = 0;
        
        foreach ($arraySourceTitle as $ST) {
            $countST ++;
            $sourceTitle = $sourceTitle . ' -SourceTitle[' . $countST . ']:' . $ST->contents;
        }
        
        return $sourceTitle;
    }
    
    public function contentAudience($contentAudienceList): string
    {
        $arrayContentAudience = $contentAudienceList->arrayContentAudience;
        
        $contentAudience = ' ';
        $countCA = 0;
        
        foreach ($arrayContentAudience as $CA) {
            $countCA ++;
            $contentAudience = $contentAudience . ' -ContentAudience[' . $countCA . ']:' . $CA->contents;
        }
        
        return $contentAudience;
    }
    
    public function citationNote($citationNoteList): string
    {
        $arrayCitationNote = $citationNoteList->arrayCitationNote;
        
        $citationNote = ' ';
        $countCN = 0;
        
        foreach ($arrayCitationNote as $CN) {
            $countCN ++;
            $citationNote = $citationNote . ' -CitationNote[' . $countCN . ']:' . $CN->contents;
        }
        
        return $citationNote;
    }
    
    public function resourceLink($resourceLinkList): string
    {
        $arrayResourceLink = $resourceLinkList->arrayResourceLink;
        
        $resourceLink = ' ';
        $countRL = 0;
        
        foreach ($arrayResourceLink as $RL) {
            $countRL ++;
            $resourceLink = $resourceLink . ' -ResourceLink[' . $countRL . ']:' . $RL->contents;
        }
        
        return $resourceLink;
    }
    
    public function TextContent($textContentList): string
    {
        $arrayTextContent = $textContentList->arrayTextContent;
        
        $sourceTitle = ' ';
        $countTC = 0;
        
        foreach ($arrayTextContent as $TC) {
            
            $countTC ++;
            
            if (isset($TC->sourceTitleList) == true) {
                $sourceTitle = sourceTitle($TC->sourceTitleList);
            } else {
                $sourceTitle = null;
            }
            
            $sourceTitle = $sourceTitle . ' -TextContent[' . $countTC . ']:(-TextType:' . $TC->textType->contents . contentAudience($TC->contentAudienceList) . text($TC->textList) . $sourceTitle . ')';
        }
        
        return $sourceTitle;
    }
    
    public function resourceVersion($resourceVersionList): string
    {
        $arrayResourceVersion = $resourceVersionList->arrayResourceVersion;
        
        $resourceVersion = ' ';
        $countRV = 0;
        
        foreach ($arrayResourceVersion as $RV) {
            $countRV ++;
            
            if (isset($RV->resourceVersionFeatureList) == true) {
                $resourceVersionFeature = resourceVersionFeature($RV->resourceVersionFeatureList);
            } else {
                $resourceVersionFeature = null;
            }
            
            if (isset($RV->contentDateList) == true) {
                $contentDate = contentDate($RV->contentDateList);
            } else {
                $contentDate = null;
            }
            
            $resourceVersion = $resourceVersion . ' -ResourceVersion[' . $countRV . ']:(-ResourceForm: ' . $RV->resourceForm->contents . $resourceVersionFeature . resourceLink($RV->resourceLinkList) . $contentDate . ')';
        }
        
        return $resourceVersion;
    }
    
    public function SupportingResource($supportingResourceList): string
    {
        $arraySupportingResource = $supportingResourceList->arraySupportingResource;
        
        $supportingResource = ' ';
        $countSR = 0;
        
        foreach ($arraySupportingResource as $SR) {
            $countSR ++;
            $supportingResource = $supportingResource . ' -SupportingResource[' . $countSR . ']:(-ResourceContentType:' . $SR->resourceContentType->contents . resourceVersion($SR->resourceVersionList) . contentAudience($SR->contentAudienceList) . ' -ResourceMode:' . $SR->resourceMode->contents . ')';
        }
        
        return $supportingResource;
    }
    
    public function CitedContent($citedContentList): string
    {
        $arrayCitedContent = $citedContentList->arrayCitedContent;
        
        $citedContent = ' ';
        $countCC = 0;
        
        foreach ($arrayCitedContent as $CC) {
            
            $countCC ++;
            
            if (isset($CC->sourceType) == true) {
                $sourceType = '-SourceType:' . $CC->sourceType->contents;
            } else {
                $sourceType = null;
            }
            
            if (isset($CC->contentDateList) == true) {
                $contentDate = contentDate($CC->contentDateList);
            } else {
                $contentDate = null;
            }
            
            if (isset($CC->contentAudienceList) == true) {
                $contentAudience = contentAudience($CC->contentAudienceList);
            } else {
                $contentAudience = null;
            }
            
            if (isset($CC->resourceLinkList) == true) {
                $resourceLink = resourceLink($CC->resourceLinkList);
            } else {
                $resourceLink = null;
            }
            
            if (isset($CC->citationNoteList) == true) {
                $citationNote = citationNote($CC->citationNoteList);
            } else {
                $citationNote = null;
            }
            
            if (isset($CC->sourceTitleList) == true) {
                $sourceTitle = sourceTitle($CC->sourceTitleList);
            } else {
                $sourceTitle = null;
            }
            
            $citedContent = $citedContent . ' -CitedContent[' . $countCC . ']:(-CitedContentType:' . $CC->citedContentType->contents . $contentDate . $contentAudience . $resourceLink . $citationNote . $sourceTitle . ' ' . $sourceType . ')';
        }
        
        return $citedContent;
    }
    
    public function COLLATERAL_DETAIL($CD):string{
        
        if (isset($CD->textContentList) == true) {
            $textContent = TextContent($CD->textContentList);
        } else {
            $textContent = null;
        }
        
        if (isset($CD->citedContentList) == true) {
            $citedContent = CitedContent($CD->citedContentList);
        } else {
            $citedContent = null;
        }
        
        if (isset($CD->supportingResourceList) == true) {
            $supportingResource = SupportingResource($CD->supportingResourceList);
        } else {
            $supportingResource = null;
        }
        
        return ' *COLLATERAL DETAIL:('.$textContent.$citedContent.$supportingResource.')';
    }
    
    public function nameIdentifier($nameIdentifierList): string
    {
        $arrayNameIdentifier = $nameIdentifierList->arrayNameIdentifier;
        
        $nameIdentifier = ' ';
        $countNI = 0;
        
        foreach ($arrayNameIdentifier as $NI) {
            
            $countNI ++;
            
            if (isset($NI->idTypeName) == true) {
                $idTypeName = '-IDTypeName:' . $NI->idTypeName->contents;
            } else {
                $idTypeName = null;
            }
            
            $nameIdentifier = $nameIdentifier . ' -NameIdentifier[' . $countNI . ']:(-NameIDType:' . $NI->nameIDType->contents . ' -IDValue:' . $NI->idValue->contents . ' ' . $idTypeName . ')';
        }
        
        return $nameIdentifier;
    }
    
    public function biographicalNote($biographicalNoteList): string
    {
        $arrayBiographicalNote = $biographicalNoteList->arrayBiographicalNote;
        
        $biographicalNote = ' ';
        $countBN = 0;
        
        foreach ($arrayBiographicalNote as $BN) {
            
            $countBN ++;
            
            if (isset($BN->textformat) == true) {
                $BN = '(' . $BN->contents . ', ·textformat:' . $BN->textformat->contents . ')';
            } else {
                $BN = $BN->contents;
            }
            
            $biographicalNote = $biographicalNote . ' -BiographicalNote[' . $countBN . ']:' . $BN;
        }
        
        return $biographicalNote;
    }
    
    public function fromLanguage($fromLanguageList): string
    {
        $arrayFromLanguage = $fromLanguageList->arrayFromLanguage;
        
        $fromLanguage = ' ';
        $countFL = 0;
        
        foreach ($arrayFromLanguage as $FL) {
            $countFL ++;
            $fromLanguage = $fromLanguage . ' -FromLanguage[' . $countFL . ']:' . $FL->contents;
        }
        
        return $fromLanguage;
    }
    
    public function ProductFormDetail($productFormDetailList): string
    {
        $arrayProductFormDetail = $productFormDetailList->arrayProductFormDetail;
        
        $productFormDetail = ' ';
        $countPFD = 0;
        
        foreach ($arrayProductFormDetail as $PFD) {
            $countPFD ++;
            $productFormDetail = $productFormDetail . ' -ProductFormDetail[' . $countPFD . ']:' . $PFD->contents;
        }
        
        return $productFormDetail;
    }
    
    public function ContributorStatement($contributorStatementList): string
    {
        $arrayContributorStatement = $contributorStatementList->arrayContributorStatement;
        
        $contributorStatement = ' ';
        $countCS = 0;
        
        foreach ($arrayContributorStatement as $CS) {
            $countCS ++;
            $contributorStatement = $contributorStatement . ' -ContributorStatement[' . $countCS . ']:' . $CS->contents;
        }
        
        return $contributorStatement;
    }
    
    public function contributorRole($contributorRoleList): string
    {
        $arrayContributorRole = $contributorRoleList->arrayContributorRole;
        
        $contributorRole = ' ';
        $countCR = 0;
        
        foreach ($arrayContributorRole as $CR) {
            $countCR ++;
            $contributorRole = $contributorRole . ' -ContributorRole[' . $countCR . ']:' . $CR->contents;
        }
        
        return $contributorRole;
    }
    
    public function Contributor($contributorList): string
    {
        $arrayContributor = $contributorList->arrayContributor;
        
        $countC = 0;
        $contributor = ' ';
        
        foreach ($arrayContributor as $C) {
            
            $countC ++;
            
            if (isset($C->sequenceNumber) == true) {
                $sequenceNumber = '-SequenceNumber:' . $C->sequenceNumber->contents;
            } else {
                $sequenceNumber = null;
            }
            
            if (isset($C->keyNames) == true) {
                $keyNames = '-KeyNames:' . $C->keyNames->contents;
            } else {
                $keyNames = null;
            }
            
            if (isset($C->namesBeforeKey) == true) {
                $namesBeforeKey = '-NamesBeforeKey:' . $C->namesBeforeKey->contents;
            } else {
                $namesBeforeKey = null;
            }
            
            if (isset($C->nameIdentifierList) == true) {
                $nameIdentifier = nameIdentifier($C->nameIdentifierList);
            } else {
                $nameIdentifier = null;
            }
            
            if (isset($C->biographicalNoteList) == true) {
                $biographicalNote = biographicalNote($C->biographicalNoteList);
            } else {
                $biographicalNote = null;
            }
            
            if (isset($C->fromLanguageList) == true) {
                $fromLanguage = fromLanguage($C->fromLanguageList);
            } else {
                $fromLanguage = null;
            }
            
            $contributor = $contributor . ' -Contributor[' . $countC . ']:(' . $sequenceNumber . ' ' . $keyNames . ' ' . $namesBeforeKey . ' ' . $nameIdentifier . ' ' . $biographicalNote . ' ' . $fromLanguage . contributorRole($C->contributorRoleList) . ')';
        }
        
        return $contributor;
    }
    
    public function textcase($titleWithoutPrefix_titlePrefix): string
    {
        if (isset($titleWithoutPrefix_titlePrefix->textcase) == true) {
            $titleWithoutPrefix_titlePrefix = '(' . $titleWithoutPrefix_titlePrefix->contents . ', ·textcase:' . $titleWithoutPrefix_titlePrefix->textcase->contents . ')';
        } else {
            $titleWithoutPrefix_titlePrefix = $titleWithoutPrefix_titlePrefix->contents;
        }
        
        return $titleWithoutPrefix_titlePrefix;
    }
    
    public function titleElement($titleElementList): string
    {
        $arrayTitleElement = $titleElementList->arrayTitleElement;
        
        $countTE = 0;
        $titleElement = ' ';
        
        foreach ($arrayTitleElement as $TE) {
            
            $countTE ++;
            
            if (isset($TE->titleText) == true) {
                $titleText = '-TitleText:' . $TE->titleText->contents;
            } else {
                $titleText = null;
            }
            
            if (isset($TE->sequenceNumber) == true) {
                $sequenceNumber = '-SequenceNumber:' . $TE->sequenceNumber->contents;
            } else {
                $sequenceNumber = null;
            }
            
            if (isset($TE->partNumber) == true) {
                $partNumber = '-PartNumber:' . $TE->partNumber->contents;
            } else {
                $partNumber = null;
            }
            
            if (isset($TE->noPrefix) == true && empty($TE->noPrefix) == true) {
                $noPrefix = '-NoPrefix:' . $TE->noPrefix->contents;
            } else {
                $noPrefix = null;
            }
            
            if (isset($TE->titleWithoutPrefix) == true) {
                $titleWithoutPrefix = '-TitleWithoutPrefix:' . textcase($TE->titleWithoutPrefix);
            } else {
                $titleWithoutPrefix = null;
            }
            
            if (isset($TE->titlePrefix) == true) {
                $titlePrefix = '-TitlePrefix:' . textcase($TE->titlePrefix);
            } else {
                $titlePrefix = null;
            }
            
            $titleElement = $titleElement . ' -Title Element[' . $countTE . ']:(-TitleElementLevel:' . $TE->titleElementLevel->contents . ' ' . $titleText . ' ' . $sequenceNumber . ' ' . $partNumber . ' ' . $noPrefix . ' ' . $titleWithoutPrefix . ' ' . $titlePrefix . ')';
            
        }
        
        return $titleElement;
    }
    
    public function TitleDetail($titleDetailList): string
    {
        $arrayTitleDetail = $titleDetailList->arrayTitleDetail;
        
        $titleDetail = ' ';
        $countTD = 0;
        
        foreach ($arrayTitleDetail as $TD) {
            $countTD ++;
            $titleDetail = $titleDetail . ' -Title Detail[' . $countTD . ']:(-TitleType:' . $TD->titleType->contents . titleElement($TD->titleElementList) . ')';
        }
        
        return $titleDetail;
    }
    
    public function Collection($collectionList): string
    {
        $arrayCollection = $collectionList->arrayCollection;
        
        $countC = 0;
        $collection = ' ';
        
        foreach ($arrayCollection as $C) {
            
            $countC ++;
            
            if (isset($C->titleDetailList) == true) {
                $titleDetail = TitleDetail($C->titleDetailList);
            } else {
                $titleDetail = null;
            }
            
            $collection = $collection . ' -Collection[' . $countC . ']:(-CollectionType:' . $C->collectionType->contents . $titleDetail . ')';
        }
        
        return $collection;
    }
    
    public function Measure($measureList): string
    {
        $arrayMeasure = $measureList->arrayMeasure;
        
        $countM = 0;
        $measure = ' ';
        
        foreach ($arrayMeasure as $M) {
            $countM ++;
            $measure = $measure . ' -Measure[' . $countM . ']:(-MeasureType:' . $M->measureType->contents . ' -Measurement:' . $M->measurement->contents . ' -MeasureUnitCode:' . $M->measureUnitCode->contents . ')';
        }
        
        return $measure;
    }
    
    public function ProductClassification($productClassificationList): string
    {
        $arrayProductClassification = $productClassificationList->arrayProductClassification;
        
        $countPC = 0;
        $productClassification = ' ';
        
        foreach ($arrayProductClassification as $PC) {
            $countPC ++;
            $productClassification = $productClassification . ' -ProductClassification[' . $countPC . ']:(-ProductClassificationType:' . $PC->productClassificationType->contents . ' -ProductClassificationCode:' . $PC->productClassificationCode->contents . ')';
        }
        
        return $productClassification;
    }
    
    public function Language($languageList): string
    {
        $arrayLanguage = $languageList->arrayLanguage;
        
        $countL = 0;
        $language = ' ';
        
        foreach ($arrayLanguage as $L) {
            $countL ++;
            $language = $language . ' -Language[' . $countL . ']:(-LanguageRole:' . $L->languageRole->contents . ' -LanguageCode:' . $L->languageCode->contents . ')';
        }
        
        return $language;
    }
    
    public function Extent($extentList): string
    {
        $arrayExtent = $extentList->arrayExtent;
        
        $countE = 0;
        $extent = ' ';
        
        foreach ($arrayExtent as $E) {
            
            $countE ++;
            
            if (isset($E->extentValue) == true) {
                $extentValue = '-ExtentValue:' . $E->extentValue->contents;
            } else {
                $extentValue = null;
            }
            
            $extent = $extent . ' -Extent[' . $countE . ']:(' . $extentValue . ' -ExtentType:' . $E->extentType->contents . ' -ExtentUnit:' . $E->extentUnit->contents . ')';
        }
        
        return $extent;
    }
    
    public function Audience($audienceList): string
    {
        $arrayAudience = $audienceList->arrayAudience;
        
        $countA = 0;
        $audience = ' ';
        
        foreach ($arrayAudience as $A) {
            $countA ++;
            $audience = $audience . ' -Language[' . $countA . ']:(-AudienceCodeType:' . $A->audienceCodeType->contents . ' -AudienceCodeValue:' . $A->audienceCodeValue->contents . ')';
        }
        
        return $audience;
    }
    
    public function subjectHeadingText($subjectHeadingTextList): string
    {
        $arraySubjectHeadingText = $subjectHeadingTextList->arraySubjectHeadingText;
        
        $subjectHeadingText = ' ';
        $countSHT = 0;
        
        foreach ($arraySubjectHeadingText as $SHT) {
            $countSHT ++;
            $subjectHeadingText = $subjectHeadingText . ' -SubjectHeadingText[' . $countSHT . ']:' . $SHT->contents;
        }
        
        return $subjectHeadingText;
    }
    
    public function Subject($subjectList): string
    {
        $arraySubject = $subjectList->arraySubject;
        
        $countS = 0;
        $subject = ' ';
        
        foreach ($arraySubject as $S) {
            
            $countS ++;
            
            if (isset($S->subjectSchemeVersion) == true) {
                $subjectSchemeVersion = '-SubjectSchemeVersion:' . $S->subjectSchemeVersion->contents;
            } else {
                $subjectSchemeVersion = null;
            }
            
            if (isset($S->subjectCode) == true) {
                $subjectCode = '-SubjectCode:' . $S->subjectCode->contents;
            } else {
                $subjectCode = null;
            }
            
            if (isset($S->mainSubject) == true && empty($S->mainSubject) == true) {
                $mainSubject = '-MainSubject:' . $S->mainSubject->contents;
            } else {
                $mainSubject = null;
            }
            
            if (isset($S->subjectHeadingTextList) == true) {
                $subjectHeadingText = subjectHeadingText($S->subjectHeadingTextList);
            } else {
                $subjectHeadingText = null;
            }
            
            $subject = $subject . ' -Subject[' . $countS . ']:(-SubjectSchemeIdentifier:' . $S->subjectSchemeIdentifier->contents . ' ' . $subjectSchemeVersion . ' ' . $subjectCode . ' ' . $mainSubject . $subjectHeadingText . ')';
        }
        
        return $subject;
    }
    
    public function DESCRIPTIVE_DETAIL($descriptiveDetail): string
    {
        if (isset($descriptiveDetail->countryOfManufacture) == true) {
            $countryOfManufacture = '-CountryOfManufacture:' . $descriptiveDetail->countryOfManufacture->contents;
        } else {
            $countryOfManufacture = null;
        }
        
        if (isset($descriptiveDetail->noEdition) == true && empty($descriptiveDetail->noEdition) == true) {
            $noEdition = '-NoEdition:' . $descriptiveDetail->noEdition->contents;
        } else {
            $noEdition = null;
        }
        
        if (isset($descriptiveDetail->productFormDetailList) == true) {
            $productFormDetail = ProductFormDetail($descriptiveDetail->productFormDetailList);
        } else {
            $productFormDetail = null;
        }
        
        if (isset($descriptiveDetail->contributorStatementList) == true) {
            $contributorStatement = ContributorStatement($descriptiveDetail->contributorStatementList);
        } else {
            $contributorStatement = null;
        }
        
        if (isset($descriptiveDetail->measureList) == true) {
            $measure = Measure($descriptiveDetail->measureList);
        } else {
            $measure = null;
        }
        
        if (isset($descriptiveDetail->productClassificationList) == true) {
            $productClassification = ProductClassification($descriptiveDetail->productClassificationList);
        } else {
            $productClassification = null;
        }
        
        if (isset($descriptiveDetail->languageList) == true) {
            $language = Language($descriptiveDetail->languageList);
        } else {
            $language = null;
        }
        
        if (isset($descriptiveDetail->audienceList) == true) {
            $audience = Audience($descriptiveDetail->audienceList);
        } else {
            $audience = null;
        }
        
        if (isset($descriptiveDetail->subjectList) == true) {
            $subject = Subject($descriptiveDetail->subjectList);
        } else {
            $subject = null;
        }
        
        if (isset($descriptiveDetail->extentList) == true) {
            $extent = Extent($descriptiveDetail->extentList);
        } else {
            $extent = null;
        }
        
        if (isset($descriptiveDetail->contributorList) == true) {
            $contributor = Contributor($descriptiveDetail->contributorList);
        } else {
            $contributor = null;
        }
        
        if (isset($descriptiveDetail->collectionList) == true) {
            $collection = Collection($descriptiveDetail->collectionList);
        } else {
            $collection = null;
        }
        
        return ' *DESCRIPTIVE DETAIL:(-ProductComposition:' . $descriptiveDetail->productComposition->contents . ' -ProductForm:' . $descriptiveDetail->productForm->contents . ' ' . $noEdition . $productFormDetail . $contributorStatement . $measure . $productClassification . $language . $audience . $subject . $extent . $contributor . $collection . TitleDetail($descriptiveDetail->titleDetailList) . ' ' . $countryOfManufacture . ')';
    }
    
    public function RECORD_SOURCE_IDENTIFIER($recordSourceIdentifierList): string
    {
        $arrayRecordSourceIdentifier = $recordSourceIdentifierList->arrayRecordSourceIdentifier;
        
        $countRSI = 0;
        $recordSourceIdentifier = ' ';
        
        foreach ($arrayRecordSourceIdentifier as $RSI) {
            $countRSI ++;
            $recordSourceIdentifier = $recordSourceIdentifier . ' *RECORD SOURCE IDENTIFIER[' . $countRSI . ']:(-RecordSourceIDType:' . $RSI->recordSourceIDType->contents . ' -IDValue:' . $RSI->idValue->contents . ')';
        }
        
        return $recordSourceIdentifier;
    }
    
    public function Product_Identifier($productIdentifierList): string
    {
        $arrayProductIdentifier = $productIdentifierList->arrayProductIdentifier;
        
        $countPI = 0;
        $productIdentifier = ' ';
        
        foreach ($arrayProductIdentifier as $PI) {
            $countPI ++;
            $productIdentifier = $productIdentifier . ' *Product_Identifier[' . $countPI . ']:(-ProductIDType:' . $PI->productIDType->contents . ' -IDValue:' . $PI->idValue->contents . ')';
        }
        
        return $productIdentifier;
    }
    
    public function workIdentifier($workIdentifierList): string
    {
        $arrayWorkIdentifier = $workIdentifierList->arrayWorkIdentifier;
        
        $countWI = 0;
        $workIdentifier = ' ';
        
        foreach ($arrayWorkIdentifier as $WI) {
            $countWI ++;
            $workIdentifier = $workIdentifier . ' -WorkIdentifier[' . $countWI . ']:(-WorkIDType:' . $WI->productIDType->contents . ' -IDValue:' . $WI->idValue->contents . ')';
        }
        
        return $workIdentifier;
    }
    
    public function RelatedProduct($relatedProductList): string
    {
        $arrayRelatedProduct = $relatedProductList->arrayRelatedProduct;
        
        $relatedProduct = ' ';
        $countRP = 0;
        
        foreach ($arrayRelatedProduct as $RP) {
            $countRP ++;
            $relatedProduct = $relatedProduct . ' -RelatedProduct[' . $countRP . ']:(' . Product_Identifier($RP->productIdentifierList) . productRelationCode($RP->productRelationCodeList) . ')';
        }
        
        return $relatedProduct;
    }
    
    public function RelatedWork($relatedWorkList): string
    {
        $arrayRelatedWork = $relatedWorkList->arrayRelatedWork;
        
        $relatedWork = ' ';
        $countRW = 0;
        
        foreach ($arrayRelatedWork as $RW) {
            $countRW ++;
            $relatedWork = $relatedWork . ' -RelatedWork[' . $countRW . ']:(' . workIdentifier($RW->WorkIdentifierList) . ' -WorkRelationCode: ' . $RW->workRelationCode->contents . ')';
        }
        
        return $relatedWork;
    }
    
    public function productRelationCode($productRelationCodeList): string
    {
        $arrayProductRelationCode = $productRelationCodeList->arrayProductRelationCode;
        
        $productRelationCode = ' ';
        $countPRC = 0;
        
        foreach ($arrayProductRelationCode as $PRC) {
            $countPRC ++;
            $productRelationCode = $productRelationCode . ' -ProductRelationCode[' . $countPRC . ']:' . $PRC->contents;
        }
        
        return $productRelationCode;
    }
    
    public function RELATED_MATERIAL($relatedMaterial): string
    {
        if (isset($relatedMaterial->relatedProductList) == true) {
            $relatedProduct = RelatedProduct($relatedMaterial->relatedProductList);
        } else {
            $relatedProduct = null;
        }
        
        if (isset($relatedMaterial->relatedWorkList) == true) {
            $relatedWork = RelatedWork($relatedMaterial->relatedWorkList);
        } else {
            $relatedWork = null;
        }
        
        return ' *RELATED MATERIAL:(' . $relatedProduct . $relatedWork . ')';
    }
    
    public function marketDate($marketDateList): string
    {
        $arrayMarketDate = $marketDateList->arrayMarketDate;
        
        $marketDate = ' ';
        $countMD = 0;
        
        foreach ($arrayMarketDate as $MD) {
            $countMD ++;
            $marketDate = $marketDate . ' -MarketDate[' . $countMD . ']:(-MarketDateRole:' . $MD->marketDateRole->contents . ' ' . date_dateformat($MD->date) . ')';
        }
        
        return $marketDate;
    }
    
    public function Market($marketList): string
    {
        $arrayMarket = $marketList->arrayMarket;
        
        $market = ' ';
        $countM = 0;
        
        foreach ($arrayMarket as $M) {
            $countM ++;
            $market = $market . ' -Market[' . $countM . ']:(' . territory($M->territory) . ')';
        }
        
        return $market;
    }
    
    public function territory($T): string
    {
        if (isset($T->countriesExcluded) == true) {
            $countriesExcluded = '-CountriesExcluded:' . $T->countriesExcluded->contents;
        } else {
            $countriesExcluded = null;
        }
        
        if (isset($T->countriesIncluded) == true) {
            $countriesIncluded = '-CountriesIncluded:' . $T->countriesIncluded->contents;
        } else {
            $countriesIncluded = null;
        }
        
        if (isset($T->regionsIncluded) == true) {
            $regionsIncluded = '-RegionsIncluded:' . $T->regionsIncluded->contents;
        } else {
            $regionsIncluded = null;
        }
        
        return '-Territory:(' . $countriesExcluded . ' ' . $countriesIncluded . ' ' . $regionsIncluded . ')';
    }
    
    public function returnsConditions($returnsConditionsList): string
    {
        $arrayReturnsConditions = $returnsConditionsList->arrayReturnsConditions;
        
        $returnsConditions = ' ';
        $countRC = 0;
        
        foreach ($arrayReturnsConditions as $RC) {
            $countRC ++;
            $returnsConditions = $returnsConditions . ' -ReturnsConditions[' . $countRC . ']:(-ReturnsCodeType:' . $RC->returnsCodeType->contents . ' -ReturnsCode:' . $RC->returnsCode->contents . ')';
        }
        
        return $returnsConditions;
    }
    
    public function discountCoded($discountCodedList): string
    {
        $arrayDiscountCoded = $discountCodedList->arrayDiscountCoded;
        
        $discountCoded = ' ';
        $countDC = 0;
        
        foreach ($arrayDiscountCoded as $DC) {
            $countDC ++;
            $discountCoded = $discountCoded . ' -DiscountCoded[' . $countDC . ']:(-DiscountCodeType:' . $DC->discountCodeType->contents . ' -DiscountCode:' . $DC->discountCode->contents . ')';
        }
        
        return $discountCoded;
    }
    
    public function tax($taxList): string
    {
        $arrayTax = $taxList->arrayTax;
        
        $tax = ' ';
        $countT = 0;
        
        foreach ($arrayTax as $T) {
            
            $countT ++;
            
            if (isset($T->taxType) == true) {
                $taxType = '-TaxType:' . $T->taxType->contents;
            } else {
                $taxType = null;
            }
            
            if (isset($T->taxRateCode) == true) {
                $taxRateCode = '-TaxRateCode:' . $T->taxRateCode->contents;
            } else {
                $taxRateCode = null;
            }
            
            if (isset($T->taxRatePercent) == true) {
                $taxRatePercent = '-TaxRatePercent:' . $T->taxRatePercent->contents;
            } else {
                $taxRatePercent = null;
            }
            
            if (isset($T->taxableAmount) == true) {
                $taxableAmount = '-TaxableAmount:' . $T->taxableAmount->contents;
            } else {
                $taxableAmount = null;
            }
            
            if (isset($T->taxAmount) == true) {
                $taxAmount = '-TaxAmount:' . $T->taxAmount->contents;
            } else {
                $taxAmount = null;
            }
            
            $tax = $tax . ' -Tax[' . $countT . ']:(' . $taxType . ' ' . $taxRateCode . ' ' . $taxRatePercent . ' ' . $taxableAmount . ' ' . $taxAmount . ')';
        }
        
        return $tax;
    }
    
    public function price($priceList): string
    {
        $arrayPrice = $priceList->arrayPrice;
        
        $price = ' ';
        $countP = 0;
        
        foreach ($arrayPrice as $P) {
            
            $countP ++;
            
            if (isset($P->priceType) == true) {
                $priceType = '-PriceType:' . $P->priceType->contents;
            } else {
                $priceType = null;
            }
            
            if (isset($P->priceStatus) == true) {
                $priceStatus = '-PriceStatus:' . $P->priceStatus->contents;
            } else {
                $priceStatus = null;
            }
            
            if (isset($P->priceAmount) == true) {
                $priceAmount = '-PriceAmount:' . $P->priceAmount->contents;
            } else {
                $priceAmount = null;
            }
            
            if (isset($P->printedOnProduct) == true) {
                $printedOnProduct = '-PrintedOnProduct:' . $P->printedOnProduct->contents;
            } else {
                $printedOnProduct = null;
            }
            
            if (isset($P->positionOnProduct) == true) {
                $positionOnProduct = '-PositionOnProduct:' . $P->positionOnProduct->contents;
            } else {
                $positionOnProduct = null;
            }
            
            if (isset($P->currencyCode) == true) {
                $currencyCode = '-CurrencyCode:' . $P->currencyCode->contents;
            } else {
                $currencyCode = null;
            }
            
            if (isset($P->discountCodedList) == true) {
                $discountCoded = discountCoded($P->discountCodedList);
            } else {
                $discountCoded = null;
            }
            
            if (isset($P->taxList) == true) {
                $tax = tax($P->taxList);
            } else {
                $tax = null;
            }
            
            if (isset($P->discountList) == true) {
                $discount = discount($P->discountList);
            } else {
                $discount = null;
            }
            
            if (isset($P->territory) == true) {
                $territory = territory($P->territory);
            } else {
                $territory = null;
            }
            
            $price = $price . ' -Price[' . $countP . ']:(' . $priceType . ' ' . $priceStatus . ' ' . $priceAmount . ' ' . $printedOnProduct . ' ' . $positionOnProduct . ' ' . $currencyCode . $discountCoded . $tax . $discount . ' ' . $territory . ')';
        }
        
        return $price;
    }
    
    public function discount($discountList): string
    {
        $arrayDiscount = $discountList->arrayDiscount;
        
        $discount = ' ';
        $countDiscount = 0;
        
        foreach ($arrayDiscount as $D) {
            
            $countDiscount ++;
            
            if (isset($D->discountPercent) == true) {
                $discountPercent = '-DiscountPercent:' . $D->discountPercent->contents;
            } else {
                $discountPercent = null;
            }
            
            $discount = $discount . ' -Discount[' . $countDiscount . ']:(' . $discountPercent . ')';
        }
        
        return $discount;
    }
    
    public function telephoneNumber($telephoneNumberList): string
    {
        $arrayTelephoneNumber = $telephoneNumberList->arrayTelephoneNumber;
        
        $telephoneNumber = ' ';
        $countTN = 0;
        
        foreach ($arrayTelephoneNumber as $TN) {
            $countTN ++;
            $telephoneNumber = $telephoneNumber . ' -TelephoneNumber[' . $countTN . ']:' . $TN->contents;
        }
        
        return $telephoneNumber;
    }
    
    public function supplierIdentifier($supplierIdentifierList): string
    {
        $arraySupplierIdentifier = $supplierIdentifierList->arraySupplierIdentifier;
        
        $supplierIdentifier = ' ';
        $countSI = 0;
        
        foreach ($arraySupplierIdentifier as $SI) {
            $countSI ++;
            $supplierIdentifier = $supplierIdentifier . ' -SupplierIdentifier[' . $countSI . ']:(-SupplierIDType:' . $SI->supplierIDType->contents . ' -IDValue:' . $SI->idValue->contents . ')';
        }
        
        return $supplierIdentifier;
    }
    
    public function supplier($S): string
    {
        if (isset($S->supplierName) == true) {
            $supplierName = '-SupplierName: ' . $S->supplierName->contents;
        } else {
            $supplierName = null;
        }
        
        if (isset($S->supplierIdentifierList) == true) {
            $supplierIdentifier = supplierIdentifier($S->supplierIdentifierList);
        } else {
            $supplierIdentifier = null;
        }
        
        if (isset($S->telephoneNumberList) == true) {
            $telephoneNumber = telephoneNumber($S->telephoneNumberList);
        } else {
            $telephoneNumber = null;
        }
        
        return '-Supplier:(-SupplierRole:' . $S->supplierRole->contents . ' ' . $supplierName . $supplierIdentifier . $telephoneNumber . ')';
    }
    
    public function SupplyDetail($supplyDetailList): string
    {
        $arraySupplyDetail = $supplyDetailList->arraySupplyDetail;
        
        $supplyDetail = ' ';
        $countSD = 0;
        
        foreach ($arraySupplyDetail as $SD) {
            
            $countSD ++;
            
            if (isset($SD->returnsConditionsList) == true) {
                $returnsConditions = returnsConditions($SD->returnsConditionsList);
            } else {
                $returnsConditions = null;
            }
            
            if (isset($SD->priceList) == true) {
                $price = price($SD->priceList);
            } else {
                $price = null;
            }
            
            if (isset($SD->packQuantity) == true) {
                $packQuantity = '-PackQuantity:' . $SD->packQuantity->contents;
            } else {
                $packQuantity = null;
            }
            
            $supplyDetail = $supplyDetail . ' -SupplyDetail[' . $countSD . ']:(-ProductAvailability:' . $SD->productAvailability->contents . ' ' . supplier($SD->supplier) . ' ' . $packQuantity . $price . $returnsConditions . ')';
        }
        
        return $supplyDetail;
    }
    
    public function marketPublishingDetail($MPD)
    {
        if (isset($MPD->marketDateList) == true) {
            $marketDate = marketDate($MPD->marketDateList);
        } else {
            $marketDate = null;
        }
        
        return '-MarketPublishingDetail:(-MarketPublishingStatus:' . $MPD->marketPublishingStatus->contents . $marketDate . ')';
    }
    
    public function PRODUCT_SUPPLY($productSupplyList): string
    {
        $arrayProductSupply = $productSupplyList->arrayProductSupply;
        
        $countPS = 0;
        $productSupply = ' ';
        
        foreach ($arrayProductSupply as $PS) {
            
            $countPS ++;
            
            if (isset($PS->marketPublishingDetail) == true) {
                $marketPublishingDetail = marketPublishingDetail($PS->marketPublishingDetail);
            } else {
                $marketPublishingDetail = null;
            }
            
            if (isset($PS->marketList) == true) {
                $market = Market($PS->marketList);
            } else {
                $market = null;
            }
            
            $productSupply = $productSupply . ' *PRODUCT SUPPLY[' . $countPS . ']:(' . $marketPublishingDetail . $market . SupplyDetail($PS->supplyDetailList) . ')';
        }
        
        return $productSupply;
    }
    
    public function PublishingDate($publishingDateList): string
    {
        $arrayPublishingDate = $publishingDateList->arrayPublishingDate;
        
        $publishingDate = ' ';
        $countPD = 0;
        
        foreach ($arrayPublishingDate as $PD) {
            $countPD ++;
            $publishingDate = $publishingDate . ' -PublishingDate[' . $countPD . ']:(-PublishingDateRole:' . $PD->publishingDateRole->contents . ' ' . date_dateformat($PD->date) . ')';
        }
        
        return $publishingDate;
    }
    
    public function SalesRights($salesRightsList): string
    {
        $arraySalesRights = $salesRightsList->arraySalesRights;
        
        $salesRights = ' ';
        $countSR = 0;
        
        foreach ($arraySalesRights as $SR) {
            $countSR ++;
            $salesRights = $salesRights . ' -SalesRights[' . $countSR . ']:(-SalesRightsType:' . $SR->salesRightsType->contents . ' ' . territory($SR->territory) . ')';
        }
        
        return $salesRights;
    }
    
    public function CityOfPublication($cityOfPublicationList): string
    {
        $arrayCityOfPublication = $cityOfPublicationList->arrayCityOfPublication;
        
        $cityOfPublication = ' ';
        $countCOP = 0;
        
        foreach ($arrayCityOfPublication as $COP) {
            $countCOP ++;
            $cityOfPublication = $cityOfPublication . ' -CityOfPublication[' . $countCOP . ']:' . $COP->contents;
        }
        
        return $cityOfPublication;
    }
    
    public function website($websiteList): string
    {
        $arrayWebsite = $websiteList->arrayWebsite;
        
        $website = ' ';
        $countW = 0;
        
        foreach ($arrayWebsite as $W) {
            
            $countW ++;
            
            if (isset($W->websiteRole) == true) {
                $websiteRole = '-WebsiteRole:' . $W->websiteRole->contents;
            } else {
                $websiteRole = null;
            }
            
            $website = $website . ' -Website[' . $countW . ']:(' . $websiteRole . ' -WebsiteLink:' . $W->websiteLink->contents . ')';
        }
        
        return $website;
    }
    
    public function publisherIdentifier($publisherIdentifierList): string
    {
        $arrayPublisherIdentifier = $publisherIdentifierList->arrayPublisherIdentifier;
        
        $publisherIdentifier = ' ';
        $countPI = 0;
        
        foreach ($arrayPublisherIdentifier as $PI) {
            $countPI ++;
            $publisherIdentifier = $publisherIdentifier . ' -PublisherIdentifier[' . $countPI . ']:(-PublisherIDType:' . $PI->publisherIDType->contents . ' -IDValue:' . $PI->idValue->contents . ')';
        }
        
        return $publisherIdentifier;
    }
    
    public function Publisher($publisherList): string
    {
        $arrayPublisher = $publisherList->arrayPublisher;
        
        $publisher = ' ';
        $countP = 0;
        
        foreach ($arrayPublisher as $P) {
            
            $countP ++;
            
            if (isset($P->publishingRole) == true) {
                $publishingRole = '-PublishingRole:' . $P->publishingRole->contents;
            } else {
                $publishingRole = null;
            }
            
            if (isset($P->publisherIdentifierList) == true) {
                $publisherIdentifier = publisherIdentifier($P->publisherIdentifierList);
            } else {
                $publisherIdentifier = null;
            }
            
            if (isset($P->websiteList) == true) {
                $website = website($P->websiteList);
            } else {
                $website = null;
            }
            
            if (isset($P->publisherName) == true) {
                $publisherName = '-PublisherName:' . $P->publisherName->contents;
            } else {
                $publisherName = null;
            }
            
            $publisher = $publisher . ' -Publisher[' . $countP . ']:(' . $publishingRole . $publisherIdentifier . $website . ' ' . $publisherName . ')';
        }
        
        return $publisher;
    }
    
    public function Imprint($imprintList): string
    {
        $arrayImprint = $imprintList->arrayImprint;
        
        $imprint = ' ';
        $countI = 0;
        
        foreach ($arrayImprint as $I) {
            
            $countI ++;
            
            if (isset($I->imprintName) == true) {
                $imprintName = '-ImprintName:' . $I->imprintName->contents;
            } else {
                $imprintName = null;
            }
            
            $imprint = $imprint . ' -Imprint[' . $countI . ']:(' . $imprintName . ')';
        }
        
        return $imprint;
    }
    
    public function PUBLISHING_DETAIL($PD): string
    {
        if (isset($PD->cityOfPublicationList) == true) {
            $cityOfPublication = CityOfPublication($PD->cityOfPublicationList);
        } else {
            $cityOfPublication = null;
        }
        
        if (isset($PD->imprintList) == true) {
            $imprint = Imprint($PD->imprintList);
        } else {
            $imprint = null;
        }
        
        if (isset($PD->publisherList) == true) {
            $publisher = Publisher($PD->publisherList);
        } else {
            $publisher = null;
        }
        
        if (isset($PD->publishingDateList) == true) {
            $publishingDate = PublishingDate($PD->publishingDateList);
        } else {
            $publishingDate = null;
        }
        
        if (isset($PD->salesRightsList) == true) {
            $salesRights = SalesRights($PD->salesRightsList);
        } else {
            $salesRights = null;
        }
        
        if (isset($PD->countryOfPublication) == true) {
            $countryOfPublication = '-CountryOfPublication:' . $PD->countryOfPublication->contents;
        } else {
            $countryOfPublication = null;
        }
        
        if (isset($PD->publishingStatus) == true) {
            $publishingStatus = '-PublishingStatus:' . $PD->publishingStatus->contents;
        } else {
            $publishingStatus = null;
        }
        
        if (isset($PD->rowSalesRightsType) == true) {
            $rowSalesRightsType = '-ROWSalesRightsType:' . $PD->rowSalesRightsType->contents;
        } else {
            $rowSalesRightsType = null;
        }
        
        return ' *PUBLISHING DETAIL:(' . $cityOfPublication . $imprint . $publisher . $publishingDate . $salesRights . ' ' . $countryOfPublication . ' ' . $publishingStatus . ' ' . $rowSalesRightsType . ')';
    }
    
    public function getProduct($P): string
    {
        if (isset($P->recordSourceType) == true) {
            $recordSourceType = ' *RECORD SOURCE TYPE:' . $P->recordSourceType->contents;
        } else {
            $recordSourceType = null;
        }
        
        if (isset($P->relatedMaterial) == true) {
            $relatedMaterial = RELATED_MATERIAL($P->relatedMaterial);
        } else {
            $relatedMaterial = null;
        }
        
        if (isset($P->recordSourceName) == true) {
            $recordSourceName = ' *RECORD SOURCE NAME:' . $P->recordSourceName->contents;
        } else {
            $recordSourceName = null;
        }
        
        if (isset($P->recordSourceIdentifierList) == true) {
            $recordSourceIdentifier = RECORD_SOURCE_IDENTIFIER($P->recordSourceIdentifierList);
        } else {
            $recordSourceIdentifier = null;
        }
        
        if (isset($P->descriptiveDetail) == true) {
            $descriptiveDetail = DESCRIPTIVE_DETAIL($P->descriptiveDetail);
        } else {
            $descriptiveDetail = null;
        }
        
        if (isset($P->collateralDetail) == true) {
            $collateralDetail = COLLATERAL_DETAIL($P->collateralDetail);
        } else {
            $collateralDetail = null;
        }
        
        if (isset($P->productSupplyList) == true) {
            $productSupply = PRODUCT_SUPPLY($P->productSupplyList);
        } else {
            $productSupply = null;
        }
        
        if (isset($P->publishingDetail) == true) {
            $publishingDetail = PUBLISHING_DETAIL($P->publishingDetail);
        } else {
            $publishingDetail = null;
        }
        
        return $recordSourceIdentifier . $descriptiveDetail . $collateralDetail . $productSupply . $publishingDetail . ' *NOTIFICATION TYPE:' . $P->notificationType->contents . $recordSourceType . $recordSourceName . $relatedMaterial . ' *RECORD REFERENCE:' . $P->recordReference->contents . Product_Identifier($P->productIdentifierList);
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
            
            $product = getProduct($P);
            $sql = "INSERT INTO Product(idProduct, contents) VALUES ('$idProduct','$product')";

            $connection = new Connection();
            $connection->update_db($connection->set_connection("localhost", "root", "ouroverde7.", "db_onix", "3306"), $sql, $rowsProduct);

        }
    }
}

