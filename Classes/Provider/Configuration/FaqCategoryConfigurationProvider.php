<?php
namespace Tev\TevFaqs\Provider\Configuration;

use FluidTYPO3\Flux\Provider\ContentProvider;

/**
 * FAQ Category plugin BE configuration provider.
 */
class FaqCategoryConfigurationProvider extends ContentProvider
{
    /**
     * {@inheritdoc}
     */
    protected $extensionKey = 'tev_faqs';

    /**
     * {@inheritdoc}
     */
    protected $listType = 'tevfaqs_faqcategory';

    /**
     * {@inheritdoc}
     */
    protected $templatePathAndFilename = 'EXT:tev_faqs/Configuration/FlexForms/Plugin/FaqCategory.html';
}
