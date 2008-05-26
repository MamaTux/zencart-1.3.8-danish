<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: developers_tool_kit.php 6082 2007-03-31 04:26:08Z ajeh $
//
  define('HEADING_TITLE', 'Developers Tool Kit');
  define('TABLE_CONFIGURATION_TABLE', 'Lookup CONSTANT Definitions');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Successful</strong> update for Products Price Sorter Values');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Error:</strong> No matching Configuration Keys were found ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Error:</strong> No Configuration Key or Text was entered to search for ... Search was terminated');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Update ALL Products Price Sorter</strong><br />to be able to sort by displayed prices: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Look-up CONSTANT or Language File defines</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Key or Name:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>NOTE:</strong> CONSTANTS are written in uppercase.<br />Language file, functions, classes, etc. lookups are performed when nothing has been found in the database tables, if selected in dropdown');

  define('TABLE_TITLE_KEY', '<strong>Key:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Title:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Description:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Group:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Value:</strong>');

  define('TEXT_LOOKUP_NONE', 'None');
  define('TEXT_INFO_SEARCHING', 'Searching ');
  define('TEXT_INFO_FILES_FOR', ' files ... for: ');
  define('TEXT_INFO_MATCHES_FOUND', 'Match Lines found: ');

  define('TEXT_LANGUAGE_LOOKUPS', 'Language File Look-ups:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'All Language Files for ' . strtoupper($_SESSION['language']) . ' - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'All Main Language files - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'All Current Selected Language Files - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'All Main Language files - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'All Current Selected Language Files - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'All Current Selected Language files - Catalog/Admin');

  define('TEXT_FUNCTION_CONSTANT', '<strong>Look-up Functions or things in Function files</strong>');
  define('TEXT_FUNCTION_LOOKUPS', 'Function File Look-ups:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', 'All Function files - Catalog/Admin');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', 'All Functions files - Catalog');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', 'All Functions files - Admin');

  define('TEXT_CLASS_CONSTANT', '<strong>Look-up Classes or things in Classes files</strong>');
  define('TEXT_CLASS_LOOKUPS', 'Classes File Look-ups:');
  define('TEXT_CLASS_LOOKUP_CURRENT', 'All Classes files - Catalog/Admin');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', 'All Classes files - Catalog');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', 'All Classes files - Admin');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>Look-up Template things</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', 'Template File Look-ups:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', 'All Template files - /templates sideboxes /pages etc.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', 'All Template files - /templates');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', 'All Template files - /sideboxes');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', 'All Template files - /pages');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>Look-up in all files</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', 'All Files Look-ups:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', 'All Files - Catalog/Admin');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', 'All Files - Catalog');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', 'All Files - Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','No edit available');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' or, HIDDEN');

  define('TEXT_SEARCH_ALL_FILES', 'Search ALL files for: ');
  define('TEXT_SEARCH_DATABASE_TABLES', 'Search database configuration tables for: ');
?>