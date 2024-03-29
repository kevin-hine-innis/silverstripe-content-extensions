<?php

namespace InnisMaggiore\SilverstripeContentExtensions;

use Silverstripe\ORM\DataExtension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;

class IMExtendedPage extends DataExtension
{
    private static $db = array(
        'H1'            => 'Varchar(250)',
        'PageTitle'     => 'Varchar(250)',
        'MetaKeywords'  => 'Text',
    );

    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldToTab("Root.Main", TextField::create("H1", "H1"), "Content");
        $fields->addFieldToTab('Root.Main', TextField::create('PageTitle', 'Page Title'), 'MetaDescription');
        // this isn't plugged into a template. For reference for content folks
        $fields->addFieldToTab('Root.Main', TextareaField::create('MetaKeywords', 'Keywords'), 'MetaDescription');
    }
}
