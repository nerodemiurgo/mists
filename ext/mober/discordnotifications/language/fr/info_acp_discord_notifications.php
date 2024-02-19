<?php
/**
 *
 * Discord Notifications. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 Tyler Olsen <https://github.com/rootslinux>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 * This file contains the language strings for the ACP settings page for this extension.
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	// ACP Module
	'ACP_DISCORD_NOTIFICATIONS'					=> 'Notifications Discord',
	'ACP_DISCORD_NOTIFICATIONS_TITLE'			=> 'Paramètres',

	// ACP Logs
	'ACP_DISCORD_NOTIFICATIONS_LOG_UPDATE'		=> 'Paramètres des notifications Discord modifiées',
	'ACP_DISCORD_NOTIFICATIONS_WEBHOOK_ERROR'	=> 'Discord Webhook returned HTTP status code %d',
	'ACP_DISCORD_NOTIFICATIONS_CURL_ERROR'		=> 'Discord Webhook cURL error code %d',
	'ACP_DISCORD_NOTIFICATIONS_JSON_ERROR'		=> 'Discord JSON encode error: %s',
));
