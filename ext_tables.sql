-- A
CREATE TABLE tx_adsense_domain_model_display
(
    title       varchar(255) NOT NULL DEFAULT '',
    code text,
);
-- P
CREATE TABLE pages
(
    enable_adsense smallint(1) unsigned NOT NULL DEFAULT '1'
);
-- T
CREATE TABLE tt_content
(
    adsense_display_before varchar(255) NOT NULL DEFAULT '',
    adsense_display_after  varchar(255) NOT NULL DEFAULT ''
);