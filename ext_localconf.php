<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// Automatically include extension Typoscript

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/Typoscript/constants.ts">'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/Typoscript/setup.ts">'
);

// Configure the faq individual category plugin

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Tev.' . $_EXTKEY,
    'FaqCategory',
    [
        'Category' => 'show'
    ]
);
