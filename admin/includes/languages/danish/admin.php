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
//  $Id: admin.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Admin Settings');

define('TABLE_HEADING_ADMINS_NAME', 'Admins Name');
define('TABLE_HEADING_ADMINS_ID', 'ID');
define('TABLE_HEADING_ADMINS_EMAIL', 'Email');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_HEADING_NEW_ADMIN', 'New');
define('TEXT_HEADING_EDIT_ADMIN', 'Edit');
define('TEXT_HEADING_DELETE_ADMIN', 'Delete');
define('TEXT_HEADING_RESET_PASSWORD', 'Reset Password');

define('TEXT_ADMINS', 'Admins:');
define('TEXT_ADMINS_EMAIL', 'Email:');

define('TEXT_NEW_INTRO', 'Please fill out the following information for the new admin');
define('TEXT_EDIT_INTRO', 'Please make any necessary changes');

define('TEXT_ADMINS_NAME', 'Admins Name:');
define('TEXT_ADMINS_PASSWORD', 'Password:');
define('TEXT_ADMINS_CONFIRM_PASSWORD', 'Confirm Password:');

define('TEXT_DELETE_INTRO', 'Are you sure you want to delete this admin?');
define('TEXT_DELETE_IMAGE', 'Delete Admins image?');


define('ENTRY_PASSWORD_NEW_ERROR', 'Your new Password must contain a minimum of ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'The Password Confirmation must match your new Password.');

define('TEXT_ADMINS_LEVEL','Admin Level for this login:');
define('TEXT_ADMIN_LEVEL_INSTRUCTIONS','Setting the Admin Level to 1 will allow this login to override the Admin Demo when active. Only level 1 will be able to change the admin login and password when the Admin Demo is active.');
define('TEXT_ADMIN_DEMO','The Admin Demo feature changes the Admin from a fully functional Admin to a semi-functional, less destructive Admin for when you want to set up a demo version. Only Admin logins set to Level 1 may change this setting and they will have an override to allow for full use of the Admin even when the Admin Demo is on.<br />Be sure that you have set up a demo login set to level 0 before activating this setting');
define('TEXT_DEMO_STATUS','The current Admin Demo is set to:');
define('TEXT_DEMO_OFF','Off');
define('TEXT_DEMO_ON','On');
?>