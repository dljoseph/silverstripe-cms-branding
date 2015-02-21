# SilverStripe CMS Branding Module
Set the Application Name and Link, Change the CMS Logo, Loading Screen Image and choose to show or hide the Help and Report Admin link from the CMS Settings.


Maintainer Contacts
-------------------
*  Darren-Lee Joseph `<darrenleejoseph (at) gmail (dot) com>`


Requirements
------------
* SilverStripe 3.1


Installation Instructions
-------------------------

Installation can be done either by composer or by manually downloading a release.

### Via composer (best practice)

`composer require "thisisbd/silverstripe-cms-branding:*"`

### Manually

 1.  Download the module from [the releases page](https://github.com/thisisbd/silverstripe-cms-branding/releases).
 2.  Extract the file (if you are on windows try 7-zip for extracting tar.gz files
 3.  Make sure the folder after being extracted is named 'cms-branding'
 4.  Place this directory in your sites root directory. This is the one with framework and cms in it.
 5.  Visit `<yoursite.com>/dev/build/?flush` to build the database and clear the manifest cache.


Usage Overview
--------------
After installing, login into the admin and click on the Settings->CMS Branding to customise.


Known Issues
------------
This is an early version and, although, stable, should be considered to be an alpha release... more changes/additions to come...