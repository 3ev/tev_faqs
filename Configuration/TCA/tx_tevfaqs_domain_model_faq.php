<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:tev_faqs/Resources/Private/Language/locallang_tca.xml:tx_tevfaqs_domain_model_faq',
        'label' => 'question',
        'crdate' => 'crdate',
        'tstamp' => 'tstamp',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'default_sortby' => 'ORDER BY question',
        'searchFields' => 'question,answer',
        'enablecolumns' => [
            'disabled' => 'hidden'
        ],
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('tev_faqs') . 'ext_icon.png',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden, question, answer, category'
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, question, answer, category'
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
        'question' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:tev_faqs/Resources/Private/Language/locallang_tca.xml:tx_tevfaqs_domain_model_faq.question',
            'config' => [
                'type' => 'text',
                'eval' => 'trim, required'
            ]
        ],
        'answer' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:tev_faqs/Resources/Private/Language/locallang_tca.xml:tx_tevfaqs_domain_model_faq.answer',
            'config' => [
                'type' => 'text',
                'eval' => 'trim, required'
            ]
        ],
        'category' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:tev_faqs/Resources/Private/Language/locallang_tca.xml:tx_tevfaqs_domain_model_faq.category',
            'config' => [
                'type' => 'select',
                'foreign_table' => 'tx_tevfaqs_domain_model_category',
                'minitems' => 0,
                'maxitems' => 1,
                'size' => 1
            ]
        ]
    ]
];
