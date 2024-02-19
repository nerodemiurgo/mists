<?php
/**
*
* Auto Database Backup
*
* @copyright (c) 2023 Rich McGirr
* @copyright (c) 2014 Lukasz Kaczynski
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

$lang = array_merge($lang, array(
	'AUTO_DB_BACKUP_SETTINGS'				=> 'Auto Database Backup settings',
	'AUTO_DB_BACKUP_SETTINGS_EXPLAIN'		=> 'Here you can set default settings for automatic database backups. Depending on your server configuration you may be able to compress the database.<br>All backups will be stored in the <samp>/store/</samp> folder. You can restore backups via the <em>Restore</em> panel.',
	'AUTO_DB_BACKUP_SETTINGS_CHANGED'		=> 'Auto Database Backup Settings changed.',
	'AUTO_DB_BACKUP_ENABLE'					=> 'Enable Auto Database Backup',
	'AUTO_DB_BACKUP_ENABLE_EXPLAIN'			=> 'Enable or disable automatic database backups',
	'AUTO_DB_BACKUP_FREQ'					=> 'Backup frequency',
	'AUTO_DB_BACKUP_FREQ_EXPLAIN'			=> 'Set backup frequency. Value must be higher than 0.',
	'AUTO_DB_BACKUP_FREQ_ERROR'				=> 'Entered value for <em>Backup frequency</em> is incorrect. Value must be higher than <strong>0</strong>.',
	'AUTO_DB_BACKUP_COPIES'					=> 'Stored backups',
	'AUTO_DB_BACKUP_COPIES_EXPLAIN'			=> 'How many backups will be stored on the server. 0 means disabled and all backups will be stored on the server.',
	'AUTO_DB_BACKUP_COPIES_ERROR'			=> 'Entered value for <em>Stored backups</em> is incorrect. Value must be equal or higher than <strong>0</strong>.',
	'AUTO_DB_BACKUP_FILETYPE'				=> 'File type',
	'AUTO_DB_BACKUP_FILETYPE_EXPLAIN'		=> 'Choose the file type for backups.',
	'AUTO_DB_BACKUP_OPTIMIZE'				=> 'Optimize DB before backup',
	'AUTO_DB_BACKUP_OPTIMIZE_EXPLAIN'		=> 'Optimize only unoptimized database tables before making the backup. This works only for MYSQL databases.',
	'AUTO_DB_BACKUP_OPTIMIZE_NO'			=> 'The database in use on the forum is not <strong>MYSQL</strong>!',
	'AUTO_DB_BACKUP_TIME'					=> 'Next backup time',
	'AUTO_DB_BACKUP_TIME_EXPLAIN'			=> 'Specify when a following database backup should be made.<br><strong>Note</strong>: you must specify a time in the future.',
	'AUTO_DB_BACKUP_TIME_ERROR'				=> 'The <em>next backup time</em> is incorrect. The time has to be defined in the future.',

	'HOUR'		=> 'Hour',
	'MINUTE'	=> 'Minute',
	'AUTODBBACKUP_REQUIRE'					=> 'This extension requires phpBB 3.3 and PHP 7.4. Please ensure the requirements of the extension are met or the extension will not be installed.'
));
