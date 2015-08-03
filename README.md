#TYPO3 FAQS Extension

[![Latest Stable Version](https://poser.pugx.org/3ev/tev_faqs/version)](https://packagist.org/packages/3ev/tev_faqs) [![License](https://poser.pugx.org/3ev/tev_faqs/license)](https://packagist.org/packages/3ev/tev_faqs)

> Add a list of FAQs to your TYPO3 site.

##Installation

```
$ composer require "3ev/tev_faqs"
```

##Usage

Install the TYPO3 extension through the Extension Manager. You'll then be able
to add FAQ Categories and FAQs from the List View. Each FAQ **must** be categorised
under a single category. You can add FAQs to any storage folder or page - they
will be found globally.

You can then add the FAQs plugin to any page on your site. This plugin will
display a list of all of the FAQ Categories, with links to the set of the FAQs
in each category.

##Styling

The FAQs plugin generates a [Bootstrap 3](http://getbootstrap.com/) compatible
template, with some custom classes so that you're able to target and style each
element easily.

Checkout the [plugin template](https://github.com/3ev/tev_faqs/blob/master/Resources/Private/Templates/Category/Show.html)
for more information.

##License

MIT © 3ev
