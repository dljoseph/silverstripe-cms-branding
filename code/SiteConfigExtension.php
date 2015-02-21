<?php

class CMSBrandingSiteConfigExtension extends DataExtension {

    private static $db = array(
        "CustomApplicationName" => "Varchar",
        "CustomApplicationLink" => "Varchar(255)",
        "ShowReportAdmin" => "Boolean",
        "ShowHelpLink" => "Boolean"
    );

    private static $has_one = array(
        "CustomCMSLogo" => "Image",
//        "CustomCMSLogoFullWidth" => "Image",
        "CustomCMSLoading" => "Image"
    );

    private static $has_many = array(
    );

    private static $defaults = array(
        "ShowReportAdmin" => true,
        "ShowHelpLink" => true
    );


    public function updateCMSFields(FieldList $fields) {

        //create new tabsets
        $fields->addFieldToTab("Root.CMS Branding", FieldGroup::create(
                HeaderField::create("CMSBrandingHeader", 'CMS Branding Options'),

                TextField::create("CustomApplicationName", "Application Name"),
                TextField::create("CustomApplicationLink", "Application Link"),

                UploadField::create('CustomCMSLogo', 'CMS Logo <br>(dimensions: 25 x 25)')->setAllowedFileCategories('image')->setFolderName("Uploads/CMSBranding"),
//                UploadField::create('CustomCMSLogoFullWidth', 'CMS Logo Full Width (optional)<br>(dimensions: 160 x 44)')->setAllowedFileCategories('image')->setFolderName("Uploads/CMSBranding"),
                UploadField::create('CustomCMSLoading', 'CMS Loading Image <br>(dimensions: 470 x 300)')->setAllowedFileCategories('image')->setFolderName("Uploads/CMSBranding"),

                CheckboxField::create("ShowReportAdmin"),
                CheckboxField::create("ShowHelpLink")

            )
        );

    }

}