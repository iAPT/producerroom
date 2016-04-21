=== Breezing Forms ===
Contributors: crosstec
Donate link: https://crosstec.org/en/wordpress-forms-download.html
Tags:  builder, captcha form, contact form, contact form builder, contact form plugin, contact form with auto reply, contact forms, contact us form, contacts form plugin, custom contact form, custom forms, email form, feedback, feedback form, feedback forms, form, form builder, form creation, form creator, form manager, form plugin, form to email, form widget, form with recaptcha, forms, forms plugin, Formular, formulario, multiple forms, paypal form, recaptcha contact form, secure form, survey form, web form, widget contact form, wordpress contact form
Requires at least: 3.0
Tested up to: 5.0
Stable tag: 1.2.7.38
License: GPL 2

Form builder for beginners and experts. Create contact forms or any kind of form you can think of. Powerful and flexible, yet easy to use.

== Description ==

[Pro Version](https://crosstec.org/en/wordpress-forms-download.html) |
[Demo Forms](https://crosstec.org/en/wordpress-forms-demos.html) |
[Form Themes](https://crosstec.org/en/markets/breezingforms-themes.html) | 
[Pre-Made Forms](https://crosstec.org/en/markets/breezingforms-form-apps.html) | 
[Documentation](https://crosstec.org/en/support/breezingforms-documentation.html "View Documentation") |
[Support Forum](https://crosstec.org/en/forums/51-breezingforms-for-wordpress.html) 

[Breezing Forms](https://crosstec.org/en/wordpress-forms-download.html) is a professional form builder to create contact forms and any kind of custom forms for WordPress you can think of. Breezing Forms is suited for both, beginners and experts. You may create from simple to very sophisticated and complex multi step forms as it provides a clever interface to add and manage form elements quickly -- while quick means easy.

Breezing Forms supports responsiveness and theme support but it also gives you the ability to display your form optimized for mobile devices.

As example, open this form with your desktop and mobile browser:
[Mobile Form Demo](https://crosstec.org/.sub-breezingformswpdemo/)

The admin ui feels like home in WordPress and helps you to keep track of your form structure. No matter if simple or complex forms, you never get lost in the process and this makes it a huge advantage over classic drag-from-left-to-right form builders.

See the [demo forms](https://crosstec.org/en/wordpress-forms-demos.html) for a some examples and you will get an idea of what is possible.

All kinds of forms are possible: [contact forms](https://crosstec.org/en/wordpress-forms-download.html), job application forms, feedback forms, order forms, questionnaires, payments, pay to download files and anything else you can think of that requires to collect data from your visitors.

BreezingForms is well supported, frequently updated and one of the most popular form builders. We also add new features if demanded. Don't hesitate to contact us if you find something is missing.

= Key Features =

* Unlimited Fields in Pro Version (up to 5 fields in free version)
* [Mobile Forms](https://crosstec.org/en/mobile-wordpress-forms.html) ***(Pro Version)***
* Business/CRM: Salesforce® integration ***(Pro Version)***
* Sharing: Dropbox® integration ***(Pro Version)***
* Upload image preview ***(Pro Version)***
* 25+ pre-made, great looking form themes ***(Pro Version)***
* Pre-made form samples ***(Pro Version)***
* Responsive forms
* Multi step / multi page forms
* MailChimp Newsletter integration
* Conditional Fields
* Responsive forms
* 18 and counting form items (from simple input to captcha items)
* Ajax file uploads with progress bars
* Native Captcha and reCaptcha
* Summary item: Create summary pages quickly (including calculations if you need them)
* Maxlength for textareas including "chars left" display
* Calendar item
* PayPal and Direct Payment (sofort.com)
* "Pay to download file" feature
* Custom email subjects
* Reply-to fields
* File attachments from uploads for admin and reply-to emails
* Reply-to files: attach files from your server to reply-to addresses
* Reply-to for select lists
* Reply-to addresses as sender addresses
* Data filter for reply-tos
* Multiple recipients for the admin notification mails (themeable)
* User data  email notifications
* PDF, CSV & XML export (in records and as attachments)
* Many pre-defined validations and actions
* Custom scripting
* Database storage of all submitted data
* Package system: Create your forms once and export them to other sites
* Developer friendly: Extend your forms within BreezingForms by using its PHP & Javascript API -- no hacking required.
* Documentation/tutorial videos
* Scripts and CSS only printed when there is a form on the page (not in the entire site as this often happens with plugins)
* Widget Support
* Shortcode helper for posts and pages

***If you got any questions on the pro, please don't hesitate to contact us at <sales@crosstec.de>***

Building forms introduction:
[vimeo https://vimeo.com/51411276]

== Installation ==

Minimum requirements:    
    
 Wordpress 3.0+    
 PHP 5.x    
 MySQL 4.x+  

Installation from within backend:

1. In plugin manager, click "Add New"
2. Search for "breezingforms"
3. Click "install"
4. Activate the plugin once it is installed
5. Click on "BreezingForms" from the left menu and follow the instructions to complete the installation

FTP upload installation method:

1. Upload the `breezing-forms` folder to the `/wp-content/plugins/` directory using your FTP client
2. Activate the plugin through the 'Plugins' menu
3. Go to the BreezingForms menu, finish the installation and create a new custom form or install the sample form package that ships with BreezingForms
4. Use shortcode [breezingforms name="FORM NAME"] in pages and posts. Use the editor helper to create shortcodes with more options.
5. Or add a new Widget and select the forms to display

Zip upload installation method (make sure uploads up to 5MB are allowed for your hosting):

1. Login to your WordPress site administrator panel and head over the 'Plugins' menu  
2. Click 'Add New'  
3. Choose the 'Upload' option
4. Click **Choose file** (**Browse**) and select the breezing-forms.*.zip file.   
5. Click **Install Now** button.    
6. Once it is complete, activate the plugin.   
7. Go to the BreezingForms menu, finish the installation and create a new custom form or install the sample form package that ships with BreezingForms
8. Use shortcode [breezingforms name="FORM NAME"] in pages and posts. Use the editor helper to create shortcodes with more options.
9. Or add a new Widget and select the forms to display


== Screenshots ==
1. Job application form with "Aqua" form-theme
2. Example job application form with "Glossy Blue" form-theme
3. Form settings admin
4. Sample record with image previews

== Frequently Asked Questions ==

= Q. After installation, I always get the configuration screen. How can I get past it? =

A. Please make sure the file and folder permissions are set correctly. The webserver use has to be able to write into the /wp-content/ folder. 

= Q. When I save a form I get a "catchable fatal error". What to do? =

A. This is most likely a permission issue. Please make sure to apply the appropriate rights to your files and folders. You can also try to 777 the folder /wp-content/breezingforms/ajax_cache/ (or create it if it doesn't exist). Please revert the permissions once you are sure that this was the reason.

= Q. My form doesn't send emails. What did I do wrong? =

A. Most likely nothing. Please go to BreezingForms => Configuration => and enable SMTP. The default PHP email system often causes trouble. Usually, SMTP works best. Also make sure you enter the SMTP login and server data correctly (if required by the server) and that you give a proper Mailfrom address. Also make sure that email notifications are enabled in your form.

= Q. I am pretty sure the permissions on my server are correct, but I still can't get past the setup screen (or still getting "catchable fatal error"). What else can I do? =

A. If not exists, create the folder /wp-content/breezingforms/. Inside that folder, create an empty file called "facileforms.process.php". Open BreezingForms again and see if you can get past the setup this time. If you still get "catchable fatal error", try the FTP layer settings in the facileforms.config.php. The FTP can help fixing permission issues.

= Q. Where do I find uploaded files? =

A. By default, all uploads go into /wp-content/breezingforms/uploads/. You can change the upload folder in the main configuration or for each upload element in its advanced configuration.

= Q. Where do I put a form theme? =

A. All themes go into the folder /wp-content/breezingforms/themes/. After that, the theme will be available from the theme selection in the form editor.

= Q. I want to edit the appearance of the PDF. How can I do that? =

A. You find the templates for the PDFs in /wp-content/breezingforms/pdftpl/. One template is for record exports, the other for attachments.

[Ask more questions in our forums](https://crosstec.org/en/forums/51-breezingforms-for-wordpress.html "BreezingForms Forums")

== Changelog ==

= 1.2.7.38 =
 * forced to use mysqli db adapter as it has been removed from newer php versions

= 1.2.7.37 =
 * fixed /e deprecated warnings

= 1.2.7.36 =
 * replaced WP_PLUGIN_URL occurences by proper use of plugins_url() instead

= 1.2.7.35 =
 * removed fragments of inline script and css tags, replaced by wp_enqueue_* functions.

= 1.2.7.34 =
 ! removed Uploadify references due to possible XSS vulnerabilities. Please update Breezing Forms immediately to make sure everything's fine.

= 1.2.7.33 =
 * minor style adjustments for WP 4.3

= 1.2.7.32 =
 * edited all necessary links and assets to match the new domain

= 1.2.7.31 =
 * fixed an important security issue!

= 1.2.7.30 =
 * fixed menu bug for configuration

= 1.2.7.29 =
 * fixed email sending issues (also in pro version)

= 1.2.7.28 =
 * another round of wp 4.0 relevant css fixes

= 1.2.7.27 =
 * small wp 4.0 relevant css fixes

= 1.2.7.26 =
 * js function was causing issues under certain circumstances (undefined)

= 1.2.7.25 =
 * fixed dropbox integration

= 1.2.7.24 =
 * autoheight iframe fix
 * readme.txt modifications

= 1.2.7.23 =
 * slight css fix for latest WP 

= 1.2.7.22 =
 * fixed a redirection bug upon using end submit pieces

= 1.2.7.21 =
 * minor WP 3.9 related changes regarding tinymce and mysqli

= 1.2.7.19 =
 * Minor update reflecting some changes since wp 3.8.1

= 1.2.7.18 =
 * edited readme.txt

= 1.2.7.17 =
 * Minor WP related CSS fixes

= 1.2.7.15 =
* readme.txt adjustments

= 1.2.7.11 =
* Fixed a 404 issue upon submit that could happen under certain circumstances

= 1.2.7.1 =
* Fixed an issue with footer display (missing data)
* Fixed php strict mode issues
* Refurbished theme engine for better responsiveness (on updates, please copy your themes from /wp-content/plugins/breezing-forms/platform/components/com_breezingforms/themes/quickmode/ into /wp-content/breezingforms/themes/

= 1.2.5.20 =
* Tested with WordPress 3.6 final and everything appears to be working well. WP_DEBUG should for now be turned off, because not everything is yet php strict mode compatible. Will address that in the next updates.

= 1.2.5.18 =
* Fixed a captcha bug that happened under certain server configurations

= 1.2.5.16 =
* Complete backend interface overhaul. Now feels like home in WordPress
* Fixed session based issues that happen under certain circumstances in administration

= 1.2.5.12 =
* backend message colors changed

= 1.2.5.9 =
* fixed theme load order
* fixed themes's button and fieldset label css

= 1.2.5.6 =
* fixed iframe autoheight for forms, now also works with google chrome and mobile devices

= 1.2.5.1 =
* main plugin code cleanup, added new screenshot and text changes to readme.txt

= 1.2.4 =
* Removed deprecated the_editor call for newer WP versions. Will now fallback depending on the WP version that is in use.

= 1.2.3 =
* Added ipv6 support in record management search

= 1.2.2 =
* Fixed a mysql bug upon installation, relevant for mysql >= 5.6
* Adjusted readme.txt

= 1.2.1 =
* Swaped submission values in manage records with the head data as requested by users

= 1.2.0 =
* Fixed non-working summarize bug

= 1.1.9 =
* Fixed frontend query error with super cache

= 1.1.8 =
* Fixed caching problems (Fatal Error)
* Fixed non-working shortcode helper in WP 3.5.1
* Fixed backend action button styles in WP 3.5.1
* Fixed reply-to address problems on shared hosts that prevent manipulating the sender address

= 1.1.4 =
* Fixed a bug in manage records that appears after record deletion
* Added a tutorial video to the listing page

= 1.1.1 =
* Fixed an issue with the navigation opening in popups rather than in a new page

= 1.0.4 =
* Added direct payment (sofortüberweisung)

= 1.0.3 =
* Base path now dynamic, you may name the plugin folder as you like

= 1.0.2 =
* Fixed all references from plugins/breezingforms to plugins/breezing-forms. Sorry for that.

= 1.0.1 =
* Fixed a critical bug that caused BF not to run on windows servers
* Fixed CSS in tables according to new wp version 3.4.2

= 1.0 =
* Initial Revision