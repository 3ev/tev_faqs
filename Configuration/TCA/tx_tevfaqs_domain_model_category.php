<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:tev_faqs/Resources/Private/Language/locallang_tca.xml:tx_tevfaqs_domain_model_category',
        'label' => 'title',
        'crdate' => 'crdate',
        'tstamp' => 'tstamp',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'default_sortby' => 'ORDER BY title',
        'searchFields' => 'title',
        'enablecolumns' => [
            'disabled' => 'hidden'
        ],
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('tev_faqs') . 'ext_icon.png',
        'dividers2tabs' => 2
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden, title'
    ],
    'types' => [
        '0' => [
            'showitem' => '
                --div--;Details,
                hidden,
                title,
                --div--;LLL:EXT:tev_faqs/Resources/Private/Language/locallang_tca.xml:tx_tevfaqs_domain_model_category.faqs,
                faqs
            '
        ]
    ],
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => '0'
            ]
        ],
        'title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:tev_faqs/Resources/Private/Language/locallang_tca.xml:tx_tevfaqs_domain_model_category.title',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim, required'
            ]
        ],
        'faqs' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:tev_faqs/Resources/Private/Language/locallang_tca.xml:tx_tevfaqs_domain_model_category.faqs',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_tevfaqs_domain_model_faq',
                'foreign_field' => 'category',
                'foreign_sortby' => 'sorting',
                'appearance' => [
                    'expandSingle' => true,
                    'newRecordLinkAddTitle' => true
                ]
            ]
        ]
    ]
];
