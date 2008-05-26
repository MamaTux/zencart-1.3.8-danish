<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: paypal.php 4834 2006-10-25 03:24:31Z drbyte $
 */

  define('MODULE_PAYMENT_NOCHEX_TEXT_ADMIN_TITLE', 'Nochex APC');
  define('MODULE_PAYMENT_NOCHEX_TEXT_CATALOG_TITLE', 'Credit or Debit Card (Nochex)');
  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_NOCHEX_TEXT_DESCRIPTION', '<strong>Nochex APC</strong><br /><br />This module is designed for both Nochex Sellers and Nochex Merchants, and uses the latest Payments Page provided by Nochex to give your buyers a smooth and seamless checkout. Very little configuration is required, but please read the documentation before use.' );
  } else {
    define('MODULE_PAYMENT_NOCHEX_TEXT_DESCRIPTION', '<strong>Nochex</strong>');
  }
  define('MODULE_PAYMENT_NOCHEX_ENTRY_TRANSACTION_ID', 'Transaction ID');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_TRANSACTION_DATE', 'Transaction Date');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_TO_EMAIL', 'Payment To');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_FROM_EMAIL', 'Payment From');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_ORDER_ID', 'Order ID');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_CUSTOM', 'Custom Field(s)');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_AMOUNT', 'Amount Paid');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_SECURITY_KEY', 'Security Key');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_STATUS', 'Payment Status');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_NOCHEX_RESPONSE', 'Nochex Response');
  define('MODULE_PAYMENT_NOCHEX_PURCHASE_DECRIPTION_TITLE', STORE_NAME . ' Purchase');

  define('MODULE_PAYMENT_NOCHEX_NOT_CONFIGURED_MERCHANT_ID', ' <span class="alert"> (not configured - needs Merchant ID)</span>');
?>