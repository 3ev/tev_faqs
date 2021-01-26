#
# Table structure for table 'tx_tevfaqs_domain_model_category'
#

CREATE TABLE tx_tevfaqs_domain_model_category (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    code varchar(255),
    title varchar(255) DEFAULT '' NOT NULL,
    faqs int(11) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY deleted (deleted),
    KEY hidden (hidden)
);

#
# Table structure for table 'tx_tevfaqs_domain_model_faq'
#

CREATE TABLE tx_tevfaqs_domain_model_faq (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    code varchar(255),
    question varchar(255) DEFAULT '' NOT NULL,
    answer text NOT NULL,
    category int(11) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY deleted (deleted),
    KEY hidden (hidden),
    KEY category (category)
);
