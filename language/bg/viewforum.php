<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @package language
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
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

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Активни теми',
	'ANNOUNCEMENTS'			=> 'Съобщения',

	'FORUM_PERMISSIONS'		=> 'Права на форума',

	'ICON_ANNOUNCEMENT'		=> 'Важна тема',
	'ICON_STICKY'			=> 'Закачена',

	'LOGIN_NOTIFY_FORUM'	=> 'Трябва да влезете в акаунта си.',

	'MARK_TOPICS_READ'		=> 'Маркирайте темите като прочетени',

	'NEW_POSTS_HOT'			=> 'Нови мнения [ Популярна ]',
	'NEW_POSTS_LOCKED'		=> 'Нови мнения [ Заключена ]',
	'NO_NEW_POSTS_HOT'		=> 'Няма непрочтени мнения [ Популярна ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Няма непрочтени мнения [ Заключена ]',
	'NO_UNREAD_POSTS_HOT'   => 'Няма непрочетени мнения [ Популярни ]',
   'NO_UNREAD_POSTS_LOCKED' => 'Няма непрочетени мнения [ Заключени ]',

	'POST_FORUM_LOCKED'		=> 'Форума е заключен',

	'TOPICS_MARKED'			=> 'Темите са маркирани като прочетени',
	
	'UNREAD_POSTS_HOT'		=> 'Непрочетени съобщения [ Популярная тема ]',
	'UNREAD_POSTS_LOCKED'	=> 'Непрочетени съобщения [ Темата е затворена ]',

	'NO_READ_ACCESS'		=> 'Вие нямате право на четене на теми в този форум.',
	
	'VIEW_FORUM'			=> 'Прегледай форум',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d тема',
		2	=> '%d теми',
		3	=> '%d теми',
	),
));
