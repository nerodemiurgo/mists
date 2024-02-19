<?php
/**
*
* Prime Notify extension for the phpBB Forum Software package.
*
* @copyright (c) 2018 Ken F. Innes IV <https://www.absoluteanime.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	// Plain-text for e-mail
	'PRIMENOTIFY_LIST_ITEM'					=> '* ',					// Bullet for a list item when BBCodes are removed
	'PRIMENOTIFY_QUOTE_FROM'				=> "Цитата от $1:\n$2",	// $1, $2: Regular expression replacement variables
	'PRIMENOTIFY_QUOTE'						=> "Цитата:\n$1",			// $1: Regular expression replacement variable
	'PRIMENOTIFY_CODE'						=> "Код:\n$1",				// $1: Regular expression replacement variable
	'PRIMENOTIFY_IMAGE'						=> 'Рисунок: $1',				// $1: Regular expression replacement variable
	'PRIMENOTIFY_SPOILER_REMOVED'			=> '-- Спойлер удален --',	// Replaces the content of a spoiler tag

	// User Settings
	'UCP_PRIMENOTIFY_TITLE'					=> 'Email-уведомления	',
	'UCP_PRIMENOTIFY_ENABLE_POST'			=> 'Включать сообщение в email',
	'UCP_PRIMENOTIFY_ENABLE_POST_EXPLAIN'	=> 'Включать текст сообщения в email-уведомление.',
	'UCP_PRIMENOTIFY_ENABLE_PM'				=> 'Включать личное сообщение в email',
	'UCP_PRIMENOTIFY_ENABLE_PM_EXPLAIN'		=> 'Включать текст личного сообщения в email-уведомление.',
	'UCP_PRIMENOTIFY_KEEP_BBCODES'			=> 'Сохранять BBCode',
	'UCP_PRIMENOTIFY_KEEP_BBCODES_EXPLAIN'	=> 'Email-сообщения отправляются как простой текст, и BBCode не могут их отформатировать. Сохраненный BBCode поможет понять оригинальное форматирование сообщения, удаленный облегчит чтение сообщения.',
	'UCP_PRIMENOTIFY_ALWAYS_SEND'			=> 'Всегда уведомлять',
	'UCP_PRIMENOTIFY_ALWAYS_SEND_EXPLAIN'	=> 'Без данной настройки email-уведомление отправляется только для первого сообщения с момента последнего посещения вами темы.',
));
