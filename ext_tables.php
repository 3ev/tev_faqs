<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// Configure the faq individual category plugin

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Tev.' . $_EXTKEY,
    'FaqCategory',
    'FAQs Plugin',
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('tev_faqs') . 'ext_icon.png'
);

// Register the wizard icon

if (TYPO3_MODE === 'BE') {
    $TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['Tev\\TevFaqs\\Utility\\WizIcon'] =
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Utility/WizIcon.php';
}

// Register FluidTYPO3 providers

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['tevfaqs_faqcategory'] = 'pi_flexform';
\FluidTYPO3\Flux\Core::registerConfigurationProvider(
    'Tev\\TevFaqs\\Provider\\Configuration\\FaqCategoryConfigurationProvider'
);
