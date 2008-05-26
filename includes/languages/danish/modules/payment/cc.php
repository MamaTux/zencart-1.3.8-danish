<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: cc.php 6361 2007-05-24 21:17:14Z drbyte $
 */
 
  define('MODULE_PAYMENT_CC_TEXT_ADMIN_TITLE', 'Credit Card - Offline Processing');
  define('MODULE_PAYMENT_CC_TEXT_CATALOG_TITLE', 'Credit Card');
  define('MODULE_PAYMENT_CC_TEXT_DESCRIPTION', 'Credit Card Test Info:<br /><br />CC#: 4111111111111111<br />Expiration: Any');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_TYPE', 'Credit Card Type:');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_OWNER', 'Card Owner\'s Name:');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_NUMBER', 'Card Number:');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_CVV', 'CVV Number (<a href="javascript:popupWindow(\'' . zen_href_link(FILENAME_POPUP_CVV_HELP) . '\')">' . 'More Info' . '</a>)');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_EXPIRES', 'Expiration Date:');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_OWNER', '* The owner\'s name of the credit card must be at least ' . CC_OWNER_MIN_LENGTH . ' characters.\n');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_NUMBER', '* The credit card number must be at least ' . CC_NUMBER_MIN_LENGTH . ' characters.\n');
  define('MODULE_PAYMENT_CC_TEXT_ERROR', 'Credit Card Error:');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_CVV', '* The CVV number must be at least ' . CC_CVV_MIN_LENGTH . ' characters.\n');
  define('MODULE_PAYMENT_CC_TEXT_EMAIL_ERROR','Warning - Configuration Error: ');
  define('MODULE_PAYMENT_CC_TEXT_EMAIL_WARNING','WARNING: You have enabled the CC payment module but have not properly configured it to send CC information to you by email. As a result, you will not be able to process the CC number for orders placed using this method.  Go to Admin->Modules->Payment->CC->Edit and set the preferred email address for sending CC information.' . "\n\n\n\n");
  define('MODULE_PAYMENT_CC_TEXT_MIDDLE_DIGITS_MESSAGE', 'Please direct this email to the Accounting department so that it may be filed along with the online order it relates to: ' . "\n\n" . 'Order: %s' . "\n\n" . 'Middle Digits: %s' . "\n\n");
?>