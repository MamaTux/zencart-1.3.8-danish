<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: usps.php 4867 2006-10-31 09:59:01Z drbyte $
 */

define('MODULE_SHIPPING_USPS_TEXT_TITLE', 'United States Postal Service');
define('MODULE_SHIPPING_USPS_TEXT_DESCRIPTION', 'United States Postal Service<br /><br />You will need to have registered a Web Tools account with USPS at <a href="http://www.usps.com/webtools/" target="_blank">their website</a> to use this module.<br /><br />USPS expects you to <strong>use pounds as weight measure</strong> for your products.' . ((MODULE_SHIPPING_USPS_USERID == 'NONE' || MODULE_SHIPPING_USPS_USERID == '' || MODULE_SHIPPING_USPS_SERVER == 'test') ? '<br /><br /><strong>Creating a customer account for USPS realtime shipping quotes</strong><br />
1. <a href="http://www.usps.com/webtools/rate.htm" target="_blank">Info on USPS and Rate Quotes</a><br />
2. <a href="https://secure.shippingapis.com/registration/" target="_blank">Create a USPS Web Tools account</a><br />
3. Fill in your customer information details and click Submit<br />
4. You will receive an email containing your USPS rate-quote Web Tools User ID<br />
5. Insert the Web Tools User ID in the Zen Cart USPS shipping module.<br />
6. Telephone USPS 1-800-344-7779 and ask them to move your account to the Production Server or email them at icustomercare@usps.com, quoting your Web Tools User ID.<br />
7. They will send another confirmation email. Set the Zen Cart module into Production mode (instead of Test mode) to finish activation.': ''));
define('MODULE_SHIPPING_USPS_TEXT_OPT_PP', 'Parcel Post');
define('MODULE_SHIPPING_USPS_TEXT_OPT_PM', 'Priority Mail');
define('MODULE_SHIPPING_USPS_TEXT_OPT_EX', 'Express Mail');
define('MODULE_SHIPPING_USPS_TEXT_ERROR', 'We are unable to find a USPS shipping quote suitable for your mailing address and the shipping methods we typically use.<br />If you prefer to use USPS as your shipping method, please contact us for assistance.<br />(Please check that your Zip Code is entered correctly.)');
define('MODULE_SHIPPING_USPS_TEXT_SERVER_ERROR', 'An error occurred in obtaining USPS shipping quotes.<br />If you prefer to use USPS as your shipping method, please contact the store owner.');
define('MODULE_SHIPPING_USPS_TEXT_DAY', 'day');
define('MODULE_SHIPPING_USPS_TEXT_DAYS', 'days');
define('MODULE_SHIPPING_USPS_TEXT_WEEKS', 'weeks');
define('MODULE_SHIPPING_USPS_TEXT_TEST_MODE_NOTICE', '<br /><span class="alert">Your account is in TEST MODE. Do not expect to see usable rate quotes until your USPS account is moved to the production server (1-800-344-7779) and you have set the module to production mode in Zen Cart admin.</span>');

?>