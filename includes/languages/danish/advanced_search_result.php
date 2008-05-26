<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
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
// $Id: advanced_search_result.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE_1', 'Advanced Search');
define('NAVBAR_TITLE_2', 'Search Results');

//define('HEADING_TITLE_1', 'Advanced Search');
define('HEADING_TITLE', 'Advanced Search');

define('HEADING_SEARCH_CRITERIA', 'Search Criteria');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Search In Product Descriptions');
define('ENTRY_CATEGORIES', 'Categories:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Include Subcategories');
define('ENTRY_MANUFACTURERS', 'Manufacturers:');
define('ENTRY_PRICE_FROM', 'Price From:');
define('ENTRY_PRICE_TO', 'Price To:');
define('ENTRY_DATE_FROM', 'Date From:');
define('ENTRY_DATE_TO', 'Date To:');

define('TEXT_SEARCH_HELP_LINK', 'Search Help [?]');

define('TEXT_ALL_CATEGORIES', 'All Categories');
define('TEXT_ALL_MANUFACTURERS', 'All Manufacturers');

define('HEADING_SEARCH_HELP', 'Search Help');
define('TEXT_SEARCH_HELP', 'Keywords may be separated by AND and/or OR statements for greater control of the search results.<br /><br />For example, Microsoft AND mouse would generate a result set that contain both words. However, for mouse OR keyboard, the result set returned would contain both or either words.<br /><br />Exact matches can be searched for by enclosing keywords in double-quotes.<br /><br />For example, "notebook computer" would generate a result set which match the exact string.<br /><br />Brackets can be used for further control on the result set.<br /><br />For example, Microsoft and (keyboard or mouse or "visual basic").');
define('TEXT_CLOSE_WINDOW', 'Close Window [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Model');
define('TABLE_HEADING_PRODUCTS', 'Product Name');
define('TABLE_HEADING_MANUFACTURER', 'Manufacturer');
define('TABLE_HEADING_QUANTITY', 'Quantity');
define('TABLE_HEADING_PRICE', 'Price');
define('TABLE_HEADING_WEIGHT', 'Weight');
define('TABLE_HEADING_BUY_NOW', 'Buy Now');

define('TEXT_NO_PRODUCTS', 'There is no product that matches the search criteria.');

define('ERROR_AT_LEAST_ONE_INPUT', 'At least one of the fields in the search form must be entered.');
define('ERROR_INVALID_FROM_DATE', 'Invalid From Date.');
define('ERROR_INVALID_TO_DATE', 'Invalid To Date.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', 'To Date must be greater than or equal to From Date.');
define('ERROR_PRICE_FROM_MUST_BE_NUM', 'Price From must be a number.');
define('ERROR_PRICE_TO_MUST_BE_NUM', 'Price To must be a number.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', 'Price To must be greater than or equal to Price From.');
define('ERROR_INVALID_KEYWORDS', 'Invalid keywords.');
?>
