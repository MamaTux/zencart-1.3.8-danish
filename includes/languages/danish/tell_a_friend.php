<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tell_a_friend.php 3159 2006-03-11 01:35:04Z drbyte $
 */

define('NAVBAR_TITLE', 'Tell A Friend');

define('HEADING_TITLE', 'Tell A Friend About \'%s\'');

define('FORM_TITLE_CUSTOMER_DETAILS', 'Your Details');
define('FORM_TITLE_FRIEND_DETAILS', 'Your Friend\'s Details');
define('FORM_TITLE_FRIEND_MESSAGE', 'Your Message:');

define('FORM_FIELD_CUSTOMER_NAME', 'Your Name:');
define('FORM_FIELD_CUSTOMER_EMAIL', 'Your Email:');
define('FORM_FIELD_FRIEND_NAME', 'Friend\'s Name:');
define('FORM_FIELD_FRIEND_EMAIL', 'Friend\'s Email:');

define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');

define('TEXT_EMAIL_SUCCESSFUL_SENT', 'Your email about <strong>%s</strong> has been successfully sent to <strong>%s</strong>.');

define('EMAIL_TEXT_HEADER','Important Notice!');

define('EMAIL_TEXT_SUBJECT', 'Your friend %s has recommended this great product from %s');
define('EMAIL_TEXT_GREET', 'Hi %s!' . "\n\n");
define('EMAIL_TEXT_INTRO', 'Your friend, %s, thought that you would be interested in %s from %s.');

define('EMAIL_TELL_A_FRIEND_MESSAGE','%s sent a note saying:');

define('EMAIL_TEXT_LINK', 'To view the product, click on the link below or copy and paste the link into your web browser:' . "\n\n" . '%s');
define('EMAIL_TEXT_SIGNATURE', 'Regards,' . "\n\n" . '%s');

define('ERROR_TO_NAME', 'Error: Your friend\'s name must not be empty.');
define('ERROR_TO_ADDRESS', 'Error: Your friend\'s email address does not appear to be valid. Please try again.');
define('ERROR_FROM_NAME', 'Error: Your name must not be empty.');
define('ERROR_FROM_ADDRESS', 'Error: Your email address does not appear to be valid. Please try again.');
?>
