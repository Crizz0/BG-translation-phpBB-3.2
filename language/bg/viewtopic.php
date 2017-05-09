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
	'APPROVE'								=> 'Одобряване',
    'ATTACHMENT'                        => 'Прикачени файлове',
    'ATTACHMENT_FUNCTIONALITY_DISABLED'    => 'Прикачването на файлове е изключено',

    'BOOKMARK_ADDED'        => 'Темата е маркирана успешно.',
	'BOOKMARK_ERR'			=> 'Грешка, опитайте отново.',
    'BOOKMARK_REMOVED'      => 'Маркировката е успешно мремахната.',
    'BOOKMARK_TOPIC'        => 'Добави отметка към тази тема',
    'BOOKMARK_TOPIC_REMOVE' => 'Премахни отметка',
    'BUMPED_BY'             => 'Последно издигане %1$s от %2$s',
    'BUMP_TOPIC'            => 'Издигни темата',

    'CODE'                  => 'Код за потвърждение',

    'DELETE_TOPIC'          => 'Изтрий темата',
	'DELETED_INFORMATION'	=> 'Изтрито %2$s от потребителя %1$s',
	'DISAPPROVE'					=> 'Отхвърли',
    'DOWNLOAD_NOTICE'       => 'Вие нямате нужните права за да сваляте прикачени файлове.',

    'EDITED_TIMES_TOTAL'    => array(
		1	=> 'Последна промяна %2$s на %3$s, променена общо %1$d пъти.',
		2	=> 'Последна промяна %2$s на %3$s, променена общо %1$d пъти.',
		3	=> 'Последна промяна %2$s на %3$s, променена общо %1$d път.',
	),
    'EMAIL_TOPIC'           => 'Изпрати на приятел',
    'ERROR_NO_ATTACHMENT'   => 'Избраните файлове вече не съществуват',

    'FILE_NOT_FOUND_404'    => 'Файла <strong>%s</strong> не съществува.',
    'FORK_TOPIC'            => 'Копирай темата',
	'FULL_EDITOR' 			=> 'Пълен редактор',

    'LINKAGE_FORBIDDEN'     => 'Вие нямате право да сваляте/преглеждате/линквате от този сайт.',
    'LOGIN_NOTIFY_TOPIC'    => 'Трябва да влезете в акаунта си.',
    'LOGIN_VIEWTOPIC'       => 'Влезте в акаунта си за да видите темата.',

    'MAKE_ANNOUNCE'         => 'Направи Важна тема',
    'MAKE_GLOBAL'           => 'Направи Съобщение',
    'MAKE_NORMAL'           => 'Направи Нормална тема',
    'MAKE_STICKY'           => 'Закачи темата',
    'MAX_OPTIONS_SELECT'    => array(
		1	=> 'Вие можете да гласувате за <strong>%d</strong> неща',
		2	=> 'Вие можете да гласувате за <strong>%d</strong> неща',
		3	=> 'Вие можете да гласувате за <strong>%d</strong> неща',
	),
    'MISSING_INLINE_ATTACHMENT'=> 'Прикачения файл <strong>%s</strong> вече е недостъпен',
    'MOVE_TOPIC'            => 'Премести тема',

    'NO_ATTACHMENT_SELECTED'=> 'Няма избрани прикачени файлове за преглед или сваляне.',
    'NO_NEWER_TOPICS'       => 'Няма нови теми в този форум',
    'NO_OLDER_TOPICS'       => 'Няма стари теми в този форум',
    'NO_UNREAD_POSTS'       => 'Няма непрочетени мнения в тази тема.',
    'NO_VOTE_OPTION'        => 'Трябва да избереш за кого искаш да гласуваш.',
    'NO_VOTES'              => 'Няма гласували',

    'POLL_ENDED_AT'         => 'Анкетата свършва на %s',
    'POLL_RUN_TILL'         => 'Анкетата е валидна до %s',
	'POST_DELETED_RESTORE'	=> 'Даденото съобщение е изтрито, но може да бъде възстановено.',																						 
    'POLL_VOTED_OPTION'     => 'Вашия глас',
    'PRINT_TOPIC'           => 'Принтирай',

    'QUICK_MOD'             => 'Опции',
	'QUICKREPLY'			=> 'Бърз Отговор',
    'QUOTE'                 => 'Цитат',

    'REPLY_TO_TOPIC'        => 'Отговори на тема',
	'RESTORE'				=> 'Възстанови',
	'RESTORE_TOPIC'			=> 'Възстанови темата',
    'RETURN_POST'           => '%sВърни се към мненията%s',

    'SUBMIT_VOTE'           => 'Изпрати гласа',
	
	'TOPIC_TOOLS'			=> 'Управление на темата',
    'TOTAL_VOTES'           => 'Общо гласове',

    'UNLOCK_TOPIC'          => 'Отключи тема',

    'VIEW_INFO'             => 'Детайли на мнението',
    'VIEW_NEXT_TOPIC'       => 'Следваща тема',
    'VIEW_PREVIOUS_TOPIC'   => 'Предишна тема',
    'VIEW_RESULTS'          => 'Резултати',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d мнение',
		2	=> '%d мнения',
		3	=> '%d мнения',
	),
    'VIEW_UNREAD_POST'      => 'Първото непрочетено мнение',
    'VOTE_SUBMITTED'        => 'Гласа ви беше зачетен',
	'VOTE_CONVERTED'        => 'Промяната на гласовете не се поддържа в конвертираните анкети.',
));
