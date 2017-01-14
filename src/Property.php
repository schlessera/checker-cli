<?php namespace WPTRT\CheckerCli;

/**
 * Interface Property.
 *
 * This colelcts common property IDs to keep them consistent over several analysers/checks.
 */
interface Property
{

    const HEADER_THEME_NAME  = 'header_theme_name';
    const HEADER_THEME_URI   = 'header_theme_uri';
    const HEADER_DESCRIPTION = 'header_description';
    const HEADER_AUTHOR      = 'header_author';
    const HEADER_AUTHOR_URI  = 'header_author_uri';
    const HEADER_VERSION     = 'header_version';
    const HEADER_TEMPLATE    = 'header_template';
    const HEADER_STATUS      = 'header_status';
    const HEADER_TAGS        = 'header_tags';
    const HEADER_TEXT_DOMAIN = 'header_text_domain';
    const HEADER_DOMAIN_PATH = 'header_domain_path';
}
