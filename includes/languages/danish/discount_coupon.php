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
// $Id: discount_coupon.php 4591 2006-09-23 04:25:15Z ajeh $
//

define('NAVBAR_TITLE', 'Discount Coupon');
define('HEADING_TITLE', 'Discount Coupon');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> does not appear to be a valid Coupon Redemption Code. Please try typing it in again.');

define('HEADING_COUPON_HELP', 'Discount Coupon Help');
define('TEXT_CLOSE_WINDOW', 'Close Window [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">The Discount Coupon Redemption Code you have entered is for ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Discount Offer:</span> %s</p><p class="smallText">Certain other restrictions may apply. Please see below for other details.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>The coupon is valid between %s and %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Discount Coupon Restrictions</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Category Restrictions:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Product Restrictions:</p>');
define('TEXT_ALLOW', 'Allow');
define('TEXT_DENY', 'Deny');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>This coupon is valid for all categories.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>This coupon is valid for all products.</p>');
define('TEXT_CAT_ALLOWED', ' (Valid for this category)');
define('TEXT_CAT_DENIED', ' (Not allowed on this category)');
define('TEXT_PROD_ALLOWED', ' (Valid for this product)');
define('TEXT_PROD_DENIED', ' (Not allowed product)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">Discount Coupons may not be applied towards the purchase of ' . TEXT_GV_NAMES . '. Limit 1 coupon per order.</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Look-up Discount Coupon ... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Your Code: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Billing Address Restrictions apply.');
?>