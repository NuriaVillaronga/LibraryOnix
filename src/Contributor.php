<?php
namespace OnixComponents;

use SimpleXMLElement;

class Contributor
{
    public ?PersonNameInverted $personNameInverted; // (0,1) -

    public ?CorporateName $corporateName; // (0,1) -

    public ?ContributorPlaceList $contributorPlaceList; // (0,n) -

    public ?SequenceNumber $sequenceNumber; // (0,1) -

    public ContributorRoleList $contributorRoleList; // (1,n) -

    public ?NameIdentifierList $nameIdentifierList; // (0,n) -

    public ?NamesBeforeKey $namesBeforeKey; // (0,1) -

    public ?KeyNames $keyNames; // (0,1) -

    public ?BiographicalNoteList $biographicalNoteList; // (0,n) -

    public ?FromLanguageList $fromLanguageList; // (0,n) -  

    public ?PersonName $personName; // (0,1) -

    public ?WebsiteList $websiteList; // (0,n)

    public function __construct(SimpleXMLElement $nodeContributor)
    {
        
        if (isset($nodeContributor->Website) == true) {
            $this->websiteList = new WebsiteList($nodeContributor);
        } else {
            $this->websiteList = null;
        }
        
        if (isset($nodeContributor->CorporateName) == true) {
            $this->corporateName = new CorporateName($nodeContributor->CorporateName);
        } else {
            $this->corporateName = null;
        }

        if (isset($nodeContributor->PersonNameInverted) == true) {
            $this->personNameInverted = new PersonNameInverted($nodeContributor->PersonNameInverted);
        } else {
            $this->personNameInverted = null;
        }

        if (isset($nodeContributor->ContributorPlace) == true) {
            $this->contributorPlaceList = new ContributorPlaceList($nodeContributor);
        } else {
            $this->contributorPlaceList = null;
        }

        $this->contributorRoleList = new ContributorRoleList($nodeContributor);

        if (isset($nodeContributor->PersonName) == true) {
            $this->personName = new PersonName($nodeContributor->PersonName);
        } else {
            $this->personName = null;
        }

        if (isset($nodeContributor->SequenceNumber) == true) {
            $this->sequenceNumber = new SequenceNumber($nodeContributor->SequenceNumber);
        } else {
            $this->sequenceNumber = null;
        }

        if (isset($nodeContributor->NameIdentifier) == true) {
            $this->nameIdentifierList = new NameIdentifierList($nodeContributor);
        } else {
            $this->nameIdentifierList = null;
        }

        if (isset($nodeContributor->NamesBeforeKey) == true) {
            $this->namesBeforeKey = new NamesBeforeKey($nodeContributor->NamesBeforeKey);
        } else {
            $this->namesBeforeKey = null;
        }

        if (isset($nodeContributor->KeyNames) == true) {
            $this->keyNames = new KeyNames($nodeContributor->KeyNames);
        } else {
            $this->keyNames = null;
        }

        if (isset($nodeContributor->BiographicalNote) == true) {
            $this->biographicalNoteList = new BiographicalNoteList($nodeContributor);
        } else {
            $this->biographicalNoteList = null;
        }

        if (isset($nodeContributor->FromLanguage) == true) {
            $this->fromLanguageList = new FromLanguageList($nodeContributor);
        } else {
            $this->fromLanguageList = null;
        }
    }
}

