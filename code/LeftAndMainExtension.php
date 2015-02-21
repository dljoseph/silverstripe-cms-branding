<?php

class CMSBrandingLeftAndMainExtension extends LeftAndMainExtension {

    public function init(){
        $config = SiteConfig::current_site_config();

        if($config->CustomApplicationLink) {
            Config::inst()->update('LeftAndMain', 'application_link', $config->CustomApplicationLink);
        }

        if($config->CustomApplicationName) {
            Config::inst()->update('LeftAndMain', 'application_name', $config->CustomApplicationName);
        }

        if(!$config->ShowReportAdmin) {
            CMSMenu::remove_menu_item('ReportAdmin');
        }

        if(!$config->ShowHelpLink) {
            CMSMenu::remove_menu_item('Help');
        }

    }

}