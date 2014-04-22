Woocommerce Product FAQ Tab
===========================

Makes an FAQ tab on Woocommerce Product pages.

#Usage
1. Install plugin by downloading latest tag zip, and then uploading to wordpress.
2. Activate the plugin.

Go to the edit page for a WooCommerce product. Add this ```wooc_product_faq``` to the Custom Field Name then enter the following code for each question and answer within the textarea next to the ```wooc_product_faq``` custom field:
```[wc-faq q="" a=""]```
Where q="Question" and a="Answer".

The ```[wc-faq]``` shortcode can be used anywhere on the website.

#Changelog
##0.1.0
* Initial release.
* Basic FAQ and custom field function

##0.1.1
* Minor update which makes sure the shortcodes are parsed within the custom field linebreaks are automatically created.
