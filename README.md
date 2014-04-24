Woocommerce Product FAQ Tab
===========================

#Features
Creates an extra tab at the end of the tabs WooCommerce Product page for the FAQ section. Also includes a shortcode for a show/hide function for the FAQ answers.

#Usage
1. Install plugin by downloading latest tag zip, and then uploading to wordpress.
2. Activate the plugin.

Go to the edit page for a WooCommerce product. Add this ```wooc_product_faq``` to the Custom Field Name then enter the following code for each question and answer within the textarea next to the ```wooc_product_faq``` custom field:
```[wc-faq q="" a=""]```
Where q="Question" and a="Answer".

The ```[wc-faq]``` shortcode can be used anywhere on the website.
##Configure
You can configure settings in the woocommerce-product-faq-tab.php file.

#Changelog
##0.1.0
* Initial release.
* Basic FAQ and custom field function

##0.1.1
* Minor update which makes sure the shortcodes are parsed within the custom field linebreaks are automatically created.

##0.2.0-beta
* Can now change the name of the FAQ tab.
* Can enable or disable the FAQ shortcode.
