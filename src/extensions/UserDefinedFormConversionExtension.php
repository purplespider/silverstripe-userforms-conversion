<?php

namespace PurpleSpider\UserFormsConversion;

use SilverStripe\Core\Extension;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\ReadonlyField;
use SilverStripe\Forms\TextareaField;

class UserDefinedFormConversionExtension extends Extension
{
    private static $db = [
        'ConversionTrackingCode' => 'HTMLText',
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.FormOptions', [
            TextareaField::create('ConversionTrackingCode', 'Conversion Tracking Code')->setDescription('Script to be included on the form "success" screen, e.g. for tracking a goal conversion in your analytics.'),
        ]);
    }
}
