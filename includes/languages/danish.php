<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: english.php 7440 2007-11-17 21:51:35Z drbyte $
 */

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'The Art of E-commerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
  @setlocale(LC_TIME, 'en_US.ISO_8859-1');
  define('DATE_FORMAT_SHORT', '%m/%d/%Y');  // this is used for strftime()
  define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
  define('DATE_FORMAT', 'm/d/Y'); // this is used for date()
  define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
  if (!function_exists('zen_date_raw')) {
    function zen_date_raw($date, $reverse = false) {
      if ($reverse) {
        return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
      } else {
        return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
      }
    }
  }

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
  define('LANGUAGE_CURRENCY', 'USD');

// Global entries for the <html> tag
  define('HTML_PARAMS','dir="ltr" lang="en"');

// charset for web pages and emails
  define('CHARSET', 'iso-8859-1');

// footer text in includes/footer.php
  define('FOOTER_TEXT_REQUESTS_SINCE', 'requests since');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Gift Certificate');
  define('TEXT_GV_NAMES','Gift Certificates');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Redemption Code');

// used for redeem code sidebox
  define('BOX_HEADING_GV_REDEEM', TEXT_GV_NAME);
  define('BOX_GV_REDEEM_INFO', 'Redemption code: ');

// text for gender
  define('MALE', 'Mr.');
  define('FEMALE', 'Ms.');
  define('MALE_ADDRESS', 'Mr.');
  define('FEMALE_ADDRESS', 'Ms.');

// text for date of birth example
  define('DOB_FORMAT_STRING', 'mm/dd/yyyy');

//text for sidebox heading links
  define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[more]');

// categories box text in sideboxes/categories.php
  define('BOX_HEADING_CATEGORIES', 'Categories');

// manufacturers box text in sideboxes/manufacturers.php
  define('BOX_HEADING_MANUFACTURERS', 'Manufacturers');

// whats_new box text in sideboxes/whats_new.php
  define('BOX_HEADING_WHATS_NEW', 'New Products');
  define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'New Products ...');

  define('BOX_HEADING_FEATURED_PRODUCTS', 'Featured');
  define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Featured Products ...');
  define('TEXT_NO_FEATURED_PRODUCTS', 'More featured products will be added soon. Please check back later.');

  define('TEXT_NO_ALL_PRODUCTS', 'More products will be added soon. Please check back later.');
  define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'All Products ...');

// quick_find box text in sideboxes/quick_find.php
  define('BOX_HEADING_SEARCH', 'Search');
  define('BOX_SEARCH_ADVANCED_SEARCH', 'Advanced Search');

// specials box text in sideboxes/specials.php
  define('BOX_HEADING_SPECIALS', 'Specials');
  define('CATEGORIES_BOX_HEADING_SPECIALS','Specials ...');

// reviews box text in sideboxes/reviews.php
  define('BOX_HEADING_REVIEWS', 'Reviews');
  define('BOX_REVIEWS_WRITE_REVIEW', 'Write a review on this product.');
  define('BOX_REVIEWS_NO_REVIEWS', 'There are currently no product reviews.');
  define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s of 5 Stars!');

// shopping_cart box text in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', 'Shopping Cart');
  define('BOX_SHOPPING_CART_EMPTY', 'Your cart is empty.');
  define('BOX_SHOPPING_CART_DIVIDER', 'ea.-&nbsp;');

// order_history box text in sideboxes/order_history.php
  define('BOX_HEADING_CUSTOMER_ORDERS', 'Quick Re-Order');

// best_sellers box text in sideboxes/best_sellers.php
  define('BOX_HEADING_BESTSELLERS', 'Bestsellers');
  define('BOX_HEADING_BESTSELLERS_IN', 'Bestsellers in<br />&nbsp;&nbsp;');

// notifications box text in sideboxes/products_notifications.php
  define('BOX_HEADING_NOTIFICATIONS', 'Notifications');
  define('BOX_NOTIFICATIONS_NOTIFY', 'Notify me of updates to <strong>%s</strong>');
  define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Do not notify me of updates to <strong>%s</strong>');

// manufacturer box text
  define('BOX_HEADING_MANUFACTURER_INFO', 'Manufacturer Info');
  define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s Homepage');
  define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Other products');

// languages box text in sideboxes/languages.php
  define('BOX_HEADING_LANGUAGES', 'Languages');

// currencies box text in sideboxes/currencies.php
  define('BOX_HEADING_CURRENCIES', 'Currencies');

// information box text in sideboxes/information.php
  define('BOX_HEADING_INFORMATION', 'Information');
  define('BOX_INFORMATION_PRIVACY', 'Privacy Notice');
  define('BOX_INFORMATION_CONDITIONS', 'Conditions of Use');
  define('BOX_INFORMATION_SHIPPING', 'Shipping &amp; Returns');
  define('BOX_INFORMATION_CONTACT', 'Contact Us');
  define('BOX_BBINDEX', 'Forum');
  define('BOX_INFORMATION_UNSUBSCRIBE', 'Newsletter Unsubscribe');

  define('BOX_INFORMATION_SITE_MAP', 'Site Map');

// information box text in sideboxes/more_information.php - were TUTORIAL_
  define('BOX_HEADING_MORE_INFORMATION', 'More Information');
  define('BOX_INFORMATION_PAGE_2', 'Page 2');
  define('BOX_INFORMATION_PAGE_3', 'Page 3');
  define('BOX_INFORMATION_PAGE_4', 'Page 4');

// tell a friend box text in sideboxes/tell_a_friend.php
  define('BOX_HEADING_TELL_A_FRIEND', 'Tell A Friend');
  define('BOX_TELL_A_FRIEND_TEXT', 'Tell someone you know about this product.');

// wishlist box text in includes/boxes/wishlist.php
  define('BOX_HEADING_CUSTOMER_WISHLIST', 'My Wishlist');
  define('BOX_WISHLIST_EMPTY', 'You have no items on your Wishlist');
  define('IMAGE_BUTTON_ADD_WISHLIST', 'Add to Wishlist');
  define('TEXT_WISHLIST_COUNT', 'Currently %s items are on your Wishlist.');
  define('TEXT_DISPLAY_NUMBER_OF_WISHLIST', 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> items on your wishlist)');

//New billing address text
  define('SET_AS_PRIMARY' , 'Set as Primary Address');
  define('NEW_ADDRESS_TITLE', 'Billing Address');

// javascript messages
  define('JS_ERROR', 'Errors have occurred during the processing of your form.\n\nPlease make the following corrections:\n\n');

  define('JS_REVIEW_TEXT', '* Please add a few more words to your comments. The review needs to have at least ' . REVIEW_TEXT_MIN_LENGTH . ' characters.');
  define('JS_REVIEW_RATING', '* Please choose a rating for this item.');

  define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Please select a payment method for your order.');

  define('JS_ERROR_SUBMITTED', 'This form has already been submitted. Please press OK and wait for this process to be completed.');

  define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Please select a payment method for your order.');
  define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Please confirm the terms and conditions bound to this order by ticking the box below.');
  define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Please confirm the privacy statement by ticking the box below.');

  define('CATEGORY_COMPANY', 'Company Details');
  define('CATEGORY_PERSONAL', 'Your Personal Details');
  define('CATEGORY_ADDRESS', 'Your Address');
  define('CATEGORY_CONTACT', 'Your Contact Information');
  define('CATEGORY_OPTIONS', 'Options');
  define('CATEGORY_PASSWORD', 'Your Password');
  define('CATEGORY_LOGIN', 'Login');
  define('PULL_DOWN_DEFAULT', 'Please Choose Your Country');
  define('PLEASE_SELECT', 'Please select ...');
  define('TYPE_BELOW', 'Type a choice below ...');

  define('ENTRY_COMPANY', 'Company Name:');
  define('ENTRY_COMPANY_ERROR', 'Please enter a company name.');
  define('ENTRY_COMPANY_TEXT', '');
  define('ENTRY_GENDER', 'Salutation:');
  define('ENTRY_GENDER_ERROR', 'Please choose a salutation.');
  define('ENTRY_GENDER_TEXT', '*');
  define('ENTRY_FIRST_NAME', 'First Name:');
  define('ENTRY_FIRST_NAME_ERROR', 'Is your first name correct? Our system requires a minimum of ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' characters. Please try again.');
  define('ENTRY_FIRST_NAME_TEXT', '*');
  define('ENTRY_LAST_NAME', 'Last Name:');
  define('ENTRY_LAST_NAME_ERROR', 'Is your last name correct? Our system requires a minimum of ' . ENTRY_LAST_NAME_MIN_LENGTH . ' characters. Please try again.');
  define('ENTRY_LAST_NAME_TEXT', '*');
  define('ENTRY_DATE_OF_BIRTH', 'Date of Birth:');
  define('ENTRY_DATE_OF_BIRTH_ERROR', 'Is your birth date correct? Our system requires the date in this format: MM/DD/YYYY (eg 05/21/1970)');
  define('ENTRY_DATE_OF_BIRTH_TEXT', '* (eg. 05/21/1970)');
  define('ENTRY_EMAIL_ADDRESS', 'Email Address:');
  define('ENTRY_EMAIL_ADDRESS_ERROR', 'Is your email address correct? It should contain at least ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' characters. Please try again.');
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Sorry, my system does not understand your email address. Please try again.');
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Our system already has a record of that email address - please try logging in with that email address. If you do not use that address any longer you can correct it in the My Account area.');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
  define('ENTRY_NICK', 'Forum Nick Name:');
  define('ENTRY_NICK_TEXT', '*'); // note to display beside nickname input field
  define('ENTRY_NICK_DUPLICATE_ERROR', 'That Nick Name is already being used. Please try another.');
  define('ENTRY_NICK_LENGTH_ERROR', 'Please try again. Your Nick Name must contain at least ' . ENTRY_NICK_MIN_LENGTH . ' characters.');
  define('ENTRY_STREET_ADDRESS', 'Street Address:');
  define('ENTRY_STREET_ADDRESS_ERROR', 'Your Street Address must contain a minimum of ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' characters.');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');
  define('ENTRY_SUBURB', 'Address Line 2:');
  define('ENTRY_SUBURB_ERROR', '');
  define('ENTRY_SUBURB_TEXT', '');
  define('ENTRY_POST_CODE', 'Post/Zip Code:');
  define('ENTRY_POST_CODE_ERROR', 'Your Post/ZIP Code must contain a minimum of ' . ENTRY_POSTCODE_MIN_LENGTH . ' characters.');
  define('ENTRY_POST_CODE_TEXT', '*');
  define('ENTRY_CITY', 'City:');
  define('ENTRY_CUSTOMERS_REFERRAL', 'Referral Code:');

  define('ENTRY_CITY_ERROR', 'Your City must contain a minimum of ' . ENTRY_CITY_MIN_LENGTH . ' characters.');
  define('ENTRY_CITY_TEXT', '*');
  define('ENTRY_STATE', 'State/Province:');
  define('ENTRY_STATE_ERROR', 'Your State must contain a minimum of ' . ENTRY_STATE_MIN_LENGTH . ' characters.');
  define('ENTRY_STATE_ERROR_SELECT', 'Please select a state from the States pull down menu.');
  define('ENTRY_STATE_TEXT', '*');
  define('JS_STATE_SELECT', '-- Please Choose --');
  define('ENTRY_COUNTRY', 'Country:');
  define('ENTRY_COUNTRY_ERROR', 'You must select a country from the Countries pull down menu.');
  define('ENTRY_COUNTRY_TEXT', '*');
  define('ENTRY_TELEPHONE_NUMBER', 'Telephone:');
  define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Your Telephone Number must contain a minimum of ' . ENTRY_TELEPHONE_MIN_LENGTH . ' characters.');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
  define('ENTRY_FAX_NUMBER', 'Fax Number:');
  define('ENTRY_FAX_NUMBER_ERROR', '');
  define('ENTRY_FAX_NUMBER_TEXT', '');
  define('ENTRY_NEWSLETTER', 'Subscribe to Our Newsletter.');
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_NEWSLETTER_YES', 'Subscribed');
  define('ENTRY_NEWSLETTER_NO', 'Unsubscribed');
  define('ENTRY_NEWSLETTER_ERROR', '');
  define('ENTRY_PASSWORD', 'Password:');
  define('ENTRY_PASSWORD_ERROR', 'Your Password must contain a minimum of ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.');
  define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'The Password Confirmation must match your Password.');
  define('ENTRY_PASSWORD_TEXT', '* (at least ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters)');
  define('ENTRY_PASSWORD_CONFIRMATION', 'Confirm Password:');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT', 'Current Password:');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT_ERROR', 'Your Password must contain a minimum of ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.');
  define('ENTRY_PASSWORD_NEW', 'New Password:');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
  define('ENTRY_PASSWORD_NEW_ERROR', 'Your new Password must contain a minimum of ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.');
  define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'The Password Confirmation must match your new Password.');
  define('PASSWORD_HIDDEN', '--HIDDEN--');

  define('FORM_REQUIRED_INFORMATION', '* Required information');
  define('ENTRY_REQUIRED_SYMBOL', '*');

  // constants for use in zen_prev_next_display function
  define('TEXT_RESULT_PAGE', '');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> products)');
  define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> orders)');
  define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> reviews)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> new products)');
  define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> specials)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> featured products)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> products)');

  define('PREVNEXT_TITLE_FIRST_PAGE', 'First Page');
  define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Previous Page');
  define('PREVNEXT_TITLE_NEXT_PAGE', 'Next Page');
  define('PREVNEXT_TITLE_LAST_PAGE', 'Last Page');
  define('PREVNEXT_TITLE_PAGE_NO', 'Page %d');
  define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Previous Set of %d Pages');
  define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Next Set of %d Pages');
  define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;FIRST');
  define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Prev]');
  define('PREVNEXT_BUTTON_NEXT', '[Next&nbsp;&gt;&gt;]');
  define('PREVNEXT_BUTTON_LAST', 'LAST&gt;&gt;');

  define('TEXT_BASE_PRICE','Starting at: ');

  define('TEXT_CLICK_TO_ENLARGE', 'larger image');

  define('TEXT_SORT_PRODUCTS', 'Sort products ');
  define('TEXT_DESCENDINGLY', 'descendingly');
  define('TEXT_ASCENDINGLY', 'ascendingly');
  define('TEXT_BY', ' by ');

  define('TEXT_REVIEW_BY', 'by %s');
  define('TEXT_REVIEW_WORD_COUNT', '%s words');
  define('TEXT_REVIEW_RATING', 'Rating: %s [%s]');
  define('TEXT_REVIEW_DATE_ADDED', 'Date Added: %s');
  define('TEXT_NO_REVIEWS', 'There are currently no product reviews.');

  define('TEXT_NO_NEW_PRODUCTS', 'More new products will be added soon. Please check back later.');

  define('TEXT_UNKNOWN_TAX_RATE', 'Sales Tax');

  define('TEXT_REQUIRED', '<span class="errorText">Required</span>');

  define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Warning: Installation directory exists at: %s. Please remove this directory for security reasons.');
  define('WARNING_CONFIG_FILE_WRITEABLE', 'Warning: I am able to write to the configuration file: %s. This is a potential security risk - please set the right user permissions on this file (read-only, CHMOD 644 or 444 are typical). You may need to use your webhost control panel/file-manager to change the permissions effectively. Contact your webhost for assistance. <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">See this FAQ</a>');
  define('ERROR_FILE_NOT_REMOVEABLE', 'Error: Could not remove the file specified. You may have to use FTP to remove the file, due to a server-permissions configuration limitation.');
  define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Warning: The sessions directory does not exist: ' . zen_session_save_path() . '. Sessions will not work until this directory is created.');
  define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Warning: I am not able to write to the sessions directory: ' . zen_session_save_path() . '. Sessions will not work until the right user permissions are set.');
  define('WARNING_SESSION_AUTO_START', 'Warning: session.auto_start is enabled - please disable this PHP feature in php.ini and restart the web server.');
  define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Warning: The downloadable products directory does not exist: ' . DIR_FS_DOWNLOAD . '. Downloadable products will not work until this directory is valid.');
  define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Warning: The SQL cache directory does not exist: ' . DIR_FS_SQL_CACHE . '. SQL caching will not work until this directory is created.');
  define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Warning: I am not able to write to the SQL cache directory: ' . DIR_FS_SQL_CACHE . '. SQL caching will not work until the right user permissions are set.');
  define('WARNING_DATABASE_VERSION_OUT_OF_DATE', 'Your database appears to need patching to a higher level. See Admin->Tools->Server Information to review patch levels.');
  define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'WARNING: Could not locate language file: ');

  define('TEXT_CCVAL_ERROR_INVALID_DATE', 'The expiration date entered for the credit card is invalid. Please check the date and try again.');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'The credit card number entered is invalid. Please check the number and try again.');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'The credit card number starting with %s was not entered correctly, or we do not accept that kind of card. Please try again or use another credit card.');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Discount Coupons');
  define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' FAQ');
  define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Balance ');
  define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' Account');
  define('GV_FAQ', TEXT_GV_NAME . ' FAQ');
  define('ERROR_REDEEMED_AMOUNT', 'Congratulations, you have redeemed ');
  define('ERROR_NO_REDEEM_CODE', 'You did not enter a ' . TEXT_GV_REDEEM . '.');
  define('ERROR_NO_INVALID_REDEEM_GV', 'Invalid ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM);
  define('TABLE_HEADING_CREDIT', 'Credits Available');
  define('GV_HAS_VOUCHERA', 'You have funds in your ' . TEXT_GV_NAME . ' Account. If you want <br />
                           you can send those funds by <a class="pageResults" href="');

  define('GV_HAS_VOUCHERB', '"><strong>email</strong></a> to someone');
  define('ENTRY_AMOUNT_CHECK_ERROR', 'You do not have enough funds to send this amount.');
  define('BOX_SEND_TO_FRIEND', 'Send ' . TEXT_GV_NAME . ' ');

  define('VOUCHER_REDEEMED',  TEXT_GV_NAME . ' Redeemed');
  define('CART_COUPON', 'Coupon :');
  define('CART_COUPON_INFO', 'more info');
  define('TEXT_SEND_OR_SPEND','You have a balance available in your ' . TEXT_GV_NAME . ' account. You may spend it or send it to someone else. To send click the button below.');
  define('TEXT_BALANCE_IS', 'Your ' . TEXT_GV_NAME . ' balance is: ');
  define('TEXT_AVAILABLE_BALANCE', 'Your ' . TEXT_GV_NAME . ' Account');

// payment method is GV/Discount
  define('PAYMENT_METHOD_GV', 'Gift Certificate/Coupon');
  define('PAYMENT_MODULE_GV', 'GV/DC');

  define('TABLE_HEADING_CREDIT_PAYMENT', 'Credits Available');

  define('TEXT_INVALID_REDEEM_COUPON', 'Invalid Coupon Code');
  define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'You must spend at least %s to redeem this coupon');
  define('TEXT_INVALID_STARTDATE_COUPON', 'This coupon is not available yet');
  define('TEXT_INVALID_FINISHDATE_COUPON', 'This coupon has expired');
  define('TEXT_INVALID_USES_COUPON', 'This coupon could only be used ');
  define('TIMES', ' times.');
  define('TIME', ' time.');
  define('TEXT_INVALID_USES_USER_COUPON', 'You have used coupon code: %s the maximum number of times allowed per customer. ');
  define('REDEEMED_COUPON', 'a coupon worth ');
  define('REDEEMED_MIN_ORDER', 'on orders over ');
  define('REDEEMED_RESTRICTIONS', ' [Product-Category restrictions apply]');
  define('TEXT_ERROR', 'An error has occurred');
  define('TEXT_INVALID_COUPON_PRODUCT', 'This coupon code is not valid for any product currently in your cart.');
  define('TEXT_VALID_COUPON', 'Congratulations you have redeemed the Discount Coupon');
  define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'The coupon code you entered is not valid for the address you have selected.');

// more info in place of buy now
  define('MORE_INFO_TEXT','... more info');

// IP Address
  define('TEXT_YOUR_IP_ADDRESS','Your IP Address is: ');

//Generic Address Heading
  define('HEADING_ADDRESS_INFORMATION','Address Information');

// cart contents
  define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Quantity in Cart: ');
  define('PRODUCTS_ORDER_QTY_TEXT','Add to Cart: ');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCT', 'Successfully added Product to the cart ...');
// only for where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'Successfully added selected Product(s) to the cart ...');

  define('TEXT_PRODUCT_WEIGHT_UNIT','lbs');

// Shipping
  define('TEXT_SHIPPING_WEIGHT','lbs');
  define('TEXT_SHIPPING_BOXES', 'Boxes');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Save:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% off');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;off');

// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Sale:&nbsp;');

//universal symbols
  define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
  define('BOX_HEADING_BANNER_BOX','Sponsors');
  define('TEXT_BANNER_BOX','Please Visit Our Sponsors ...');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','Have you seen ...');
  define('TEXT_BANNER_BOX2','Check this out today!');

// banner_box - all
  define('BOX_HEADING_BANNER_BOX_ALL','Sponsors');
  define('TEXT_BANNER_BOX_ALL','Please Visit Our Sponsors ...');

// boxes defines
  define('PULL_DOWN_ALL','Please Select');
  define('PULL_DOWN_MANUFACTURERS','- Reset -');
// shipping estimator
  define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Please Select');

// general Sort By
  define('TEXT_INFO_SORT_BY','Sort by: ');

// close window image popups
  define('TEXT_CLOSE_WINDOW',' - Click Image to Close');
// close popups
  define('TEXT_CURRENT_CLOSE_WINDOW','[ Close Window ]');

// iii 031104 added:  File upload error strings
  define('ERROR_FILETYPE_NOT_ALLOWED', 'Error:  File type not allowed.');
  define('WARNING_NO_FILE_UPLOADED', 'Warning:  no file uploaded.');
  define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Success:  file saved successfully.');
  define('ERROR_FILE_NOT_SAVED', 'Error:  File not saved.');
  define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error:  destination not writeable.');
  define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: destination does not exist.');
  define('ERROR_FILE_TOO_BIG', 'Warning: File was too large to upload!<br />Order can be placed but please contact the site for help with upload');
// End iii added

  define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'NOTICE: This website is scheduled to be down for maintenance on: ');
  define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'NOTICE: The website is currently Down For Maintenance to the public');

  define('PRODUCTS_PRICE_IS_FREE_TEXT','It\'s Free!');
  define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Call for Price');
  define('TEXT_CALL_FOR_PRICE','Call for price');

  define('TEXT_INVALID_SELECTION',' You picked an Invalid Selection: ');
  define('TEXT_ERROR_OPTION_FOR',' On the Option for: ');
  define('TEXT_INVALID_USER_INPUT', 'User Input Required<br />');

// product_listing
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Min: ');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Units: ');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','In cart:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Add Additional:');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Max:');

  define('TEXT_PRODUCTS_MIX_OFF','*Mixed OFF');
  define('TEXT_PRODUCTS_MIX_ON','*Mixed ON');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br />*You can not mix the options on this item to meet the minimum quantity requirement.*<br />');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*Mixed Option Values is ON<br />');

  define('ERROR_MAXIMUM_QTY','The quantity added to your cart has been adjusted because of a restriction on maximum you are allowed. See this item: ');
  define('ERROR_CORRECTIONS_HEADING','Please correct the following: <br />');
  define('ERROR_QUANTITY_ADJUSTED', 'The quantity added to your cart has been adjusted. The item you wanted is not available in fractional quantities. The quantity of item: ');
  define('ERROR_QUANTITY_CHANGED_FROM', ', has been changed from: ');
  define('ERROR_QUANTITY_CHANGED_TO', ' to ');

// Downloads Controller
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','NOTE: Downloads are not available until payment has been confirmed');
  define('TEXT_FILESIZE_BYTES', ' bytes');
  define('TEXT_FILESIZE_MEGS', ' MB');

// shopping cart errors
  define('ERROR_PRODUCT','The item: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br />We are sorry but this product has been removed from our inventory at this time.<br />This item has been removed from your shopping cart.');
  define('ERROR_PRODUCT_QUANTITY_MIN',',  ... Minimum Quantity errors - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ... Quantity Units errors - ');
  define('ERROR_PRODUCT_OPTION_SELECTION','<br /> ... Invalid Option Values Selected ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','<br /> You ordered a total of: ');
  define('ERROR_PRODUCT_QUANTITY_MAX',' ... Maximum Quantity errors - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',', has a minimum quantity restriction. ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... Quantity Units errors - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... Maximum Quantity errors - ');

  define('WARNING_SHOPPING_CART_COMBINED', 'NOTICE: For your convenience, your current shopping cart has been combined with your shopping cart from your last visit. Please review your shopping cart before checking out.');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
  define('ERROR_CUSTOMERS_ID_INVALID', 'Customer information cannot be validated!<br />Please login or recreate your account ...');

  define('TABLE_HEADING_FEATURED_PRODUCTS','Featured Products');

  define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
  define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
  define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');
  define('TABLE_HEADING_SPECIALS_INDEX', 'Monthly Specials For %s');

  define('CAPTION_UPCOMING_PRODUCTS','These items will be in stock soon');
  define('SUMMARY_TABLE_UPCOMING_PRODUCTS','table contains a list of products that are due to be in stock soon and the dates the items are expected');

// meta tags special defines
  define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','It\'s Free!');

// customer login
  define('TEXT_SHOWCASE_ONLY','Contact Us');
// set for login for prices
  define('TEXT_LOGIN_FOR_PRICE_PRICE','Price Unavailable');
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Login for price');
// set for show room only
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Show Room Only');

// authorization pending
  define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Price Unavailable');
  define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'APPROVAL PENDING');
  define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Login to Shop');

// text pricing
  define('TEXT_CHARGES_WORD','Calculated Charge:');
  define('TEXT_PER_WORD','<br />Price per word: ');
  define('TEXT_WORDS_FREE',' Word(s) free ');
  define('TEXT_CHARGES_LETTERS','Calculated Charge:');
  define('TEXT_PER_LETTER','<br />Price per letter: ');
  define('TEXT_LETTERS_FREE',' Letter(s) free ');
  define('TEXT_ONETIME_CHARGES','*onetime charges = ');
  define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*onetime charges = ');
  define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Option Quantity Discounts');
  define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','QTY');
  define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRICE');
  define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Option Quantity Discounts Onetime Charges');

// textarea attribute input fields
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' maximum characters allowed');
  define('TEXT_REMAINING','remaining');

// Shipping Estimator
  define('CART_SHIPPING_OPTIONS', 'Estimate Shipping Costs');
  define('CART_SHIPPING_OPTIONS_LOGIN', 'Please <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Log In</span></a>, to display your personal shipping costs.');
  define('CART_SHIPPING_METHOD_TEXT', 'Available Shipping Methods');
  define('CART_SHIPPING_METHOD_RATES', 'Rates');
  define('CART_SHIPPING_METHOD_TO','Ship to: ');
  define('CART_SHIPPING_METHOD_TO_NOLOGIN', 'Ship to: <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Log In</span></a>');
  define('CART_SHIPPING_METHOD_FREE_TEXT','Free Shipping');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Downloads');
  define('CART_SHIPPING_METHOD_RECALCULATE','Recalculate');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');
  define('CART_SHIPPING_METHOD_ADDRESS','Address:');
  define('CART_OT','Total Cost Estimate:');
  define('CART_OT_SHOW','true'); // set to false if you don't want order totals
  define('CART_ITEMS','Items in Cart: ');
  define('CART_SELECT','Select');
  define('ERROR_CART_UPDATE', '<strong>Please update your order.</strong> ');
  define('IMAGE_BUTTON_UPDATE_CART', 'Update');
  define('EMPTY_CART_TEXT_NO_QUOTE', 'Whoops! Your session has expired ... Please update your shopping cart for Shipping Quote ...');
  define('CART_SHIPPING_QUOTE_CRITERIA', 'Shipping quotes are based on the address information you selected:');

// multiple product add to cart
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Add: ');
  define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Add: ');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Add: ');
  define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Add: ');
  //moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
  define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Qty Discounts Off Price');
  define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Qty Discounts New Price');
  define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Qty Discounts Off Price');
  define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Discounts may vary based on options above');
  define('TEXT_HEADER_DISCOUNTS_OFF', 'Qty Discounts Unavailable ...');

// sort order titles for dropdowns
  define('PULL_DOWN_ALL_RESET','- RESET - ');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Product Name');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Product Name - desc');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Price - low to high');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Price - high to low');
  define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Model');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Date Added - New to Old');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Date Added - Old to New');
  define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', 'Default Display');

// downloads module defines
  define('TABLE_HEADING_DOWNLOAD_DATE', 'Link Expires');
  define('TABLE_HEADING_DOWNLOAD_COUNT', 'Remaining');
  define('HEADING_DOWNLOAD', 'To download your files click the download button and choose "Save to Disk" from the popup menu.');
  define('TABLE_HEADING_DOWNLOAD_FILENAME','Filename');
  define('TABLE_HEADING_PRODUCT_NAME','Item Name');
  define('TABLE_HEADING_BYTE_SIZE','File Size');
  define('TEXT_DOWNLOADS_UNLIMITED', 'Unlimited');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('COLON_SPACER', ':&nbsp;&nbsp;');

// table headings for cart display and upcoming products
  define('TABLE_HEADING_QUANTITY', 'Qty.');
  define('TABLE_HEADING_PRODUCTS', 'Item Name');
  define('TABLE_HEADING_TOTAL', 'Total');

// create account - login shared
  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Privacy Statement');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Please acknowledge you agree with our privacy statement by ticking the following box. The privacy statement can be read <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">here</span></a>.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'I have read and agreed to your privacy statement.');
  define('TABLE_HEADING_ADDRESS_DETAILS', 'Address Details');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Additional Contact Details');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'Verify Your Age');
  define('TABLE_HEADING_LOGIN_DETAILS', 'Login Details');
  define('TABLE_HEADING_REFERRAL_DETAILS', 'Were You Referred to Us?');

  define('ENTRY_EMAIL_PREFERENCE','Newsletter and Email Details');
  define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
  define('ENTRY_EMAIL_TEXT_DISPLAY','TEXT-Only');
  define('EMAIL_SEND_FAILED','ERROR: Failed sending email to: "%s" <%s> with subject: "%s"');

  define('DB_ERROR_NOT_CONNECTED', 'Error - Could not connect to Database');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'WARNING: EZ-PAGES HEADER - On for Admin IP Only');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'WARNING: EZ-PAGES FOOTER - On for Admin IP Only');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'WARNING: EZ-PAGES SIDEBOX - On for Admin IP Only');

// extra product listing sorter
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Items starting with ...');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Reset --');

///////////////////////////////////////////////////////////
// include email extras
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_EMAIL_EXTRAS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_EMAIL_EXTRAS);

// include template specific header defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_HEADER)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_HEADER);

// include template specific button name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_BUTTON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_BUTTON_NAMES);

// include template specific icon name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_ICON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_ICON_NAMES);

// include template specific other image name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_OTHER_IMAGES_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_OTHER_IMAGES_NAMES);

// credit cards
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_CREDIT_CARDS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select. FILENAME_CREDIT_CARDS);

// include template specific whos_online sidebox defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_WHOS_ONLINE . '.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_WHOS_ONLINE . '.php');

// include template specific meta tags defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// END OF EXTERNAL LANGUAGE LINKS
?>
