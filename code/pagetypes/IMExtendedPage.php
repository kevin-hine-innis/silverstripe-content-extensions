<?php
/**
 * Created by IntelliJ IDEA.
 * User: dave
 * Date: 11/9/17
 * Time: 6:11 PM
 */

class IMExtendedPage extends DataExtension
{
    private static $db = array(
        'H1' => 'varchar',
        'PageTitle'  => 'varchar(250)',
        'MetaKeywords'  => 'Text',
    );

    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldToTab("Root.Main", new TextField("H1", "H1"), "Content");
        $fields->addFieldToTab('Root.Main', new TextField('PageTitle', 'Page Title'), 'MetaDescription');
        // this isn't plugged into a template. For reference for content folks
        $fields->addFieldToTab('Root.Main', new TextareaField('MetaKeywords', 'Keywords'), 'MetaDescription');
    }
}
