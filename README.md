#TYPO3 FAQs Extension

[![Latest Stable Version](https://poser.pugx.org/3ev/tev_faqs/version)](https://packagist.org/packages/3ev/tev_faqs) [![License](https://poser.pugx.org/3ev/tev_faqs/license)](https://packagist.org/packages/3ev/tev_faqs)

> Add a list of FAQs to your TYPO3 site.

##Installation

```
$ composer require "3ev/tev_faqs"
```

##Usage

Install the TYPO3 extension through the Extension Manager.

Using the Constants Editor, you should then set the 'TEV_FAQS -> Storage Folder' constant, most likely on your root page template. This will be the main folder that the FAQ Categories and FAQs are stored in.

You'll then be able to add FAQ Categories and FAQs from the List View. Each FAQ **must** be categorised under a single category.

You can then add the FAQs plugin to any page on your site. This plugin will
display a list of all of the FAQ Categories, with links to the set of the FAQs
in each category.

You can set the 'Storage Folder' constant on a per page basis if you want a particular page using the FAQs plugin to display a specific set of FAQ categories and FAQs.

##Styling

The FAQs plugin generates a [Bootstrap 3](http://getbootstrap.com/) compatible
template, with some custom classes so that you're able to target and style each
element easily.

Checkout the [plugin template](https://github.com/3ev/tev_faqs/blob/master/Resources/Private/Templates/Category/Show.html)
for more information.

###Overriding Templates

You can fully override any templates in this extension in the normal Extbase way,
by adding the following Typoscript in your own extension:

```
plugin.tx_tevfaqs {
    view {
        templateRootPaths {
            # The default index is 0, so use any index from 1 upwards

            1 = EXT:your_ext/Path/To/Template/Overrides/
        }
    }
}
```

You can do the same for `partialRootPaths` or `layoutRootPaths` too. Any templates
added to the configured directories will be preferred over the default ones.

##License

MIT © 3ev
