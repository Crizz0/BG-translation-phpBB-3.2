<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Разширение',
	'EXTENSIONS'				=> 'Разширения',
	'EXTENSIONS_ADMIN'			=> 'Управление на разширенията',
	'EXTENSIONS_EXPLAIN'		=> 'Тук може да управлявате разширенията и да преглеждате информацията за тях.',
	'EXTENSION_INVALID_LIST'	=> 'Разширение «%s» не е съвместимо.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Избраното разширение, не е достъпно за този форум. Проверете, дали използваните на форума версии на phpBB и PHP са съвместими с това разширение (виж. подробности на страницата с информация).',
	'EXTENSION_DIR_INVALID'		=> 'Избраното разширение, има грешна структура на каталога и не може да бъзе включено.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'ВИзбраното разширение не може да бъде включено, проверете изискванията за инсталация.',
	'EXTENSION_NOT_INSTALLED'	=> 'Разширението %s е недостъпно. Проверете дали е инсталирано правилно.',

	'DETAILS'				=> 'Информация',

	'EXTENSIONS_DISABLED'  => 'Изключени разширения',
	'EXTENSIONS_ENABLED'   => 'Включени разширения',

	'EXTENSION_DELETE_DATA'  => 'Изтрий данните',
	'EXTENSION_DISABLE'      => 'Изключи',
	'EXTENSION_ENABLE'       => 'Включи',

	'EXTENSION_DELETE_DATA_EXPLAIN'  => 'Изтриване на данните и настройките на това разширение. Файловете на разширението остават, затова то може да бъде възстановено.',
	'EXTENSION_DISABLE_EXPLAIN'      => 'При изключване на разширението, неговите файлове, данни и настройки се запазват, но добавената от това разширение функционалност се губи.',
	'EXTENSION_ENABLE_EXPLAIN'       => 'Включването на това разширение позволява неговото използване на форума.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'  => 'Данните на разширението се изтриват в настоящия момент. Не затваряйте и не обновявайте тази страница, преди да приключи операцията.',
	'EXTENSION_DISABLE_IN_PROGRESS'  => 'Разширението се изключва в настоящия момент. Не затваряйте и не обновявайте тази страница, преди да приключи операцията.',
	'EXTENSION_ENABLE_IN_PROGRESS'  => 'Разширението се включва в настоящия момент. Не затваряйте и не обновявайте тази страница, преди да приключи операцията.',

	'EXTENSION_DELETE_DATA_SUCCESS'  => 'Данните на разширението успешно са изтрити.',
	'EXTENSION_DISABLE_SUCCESS'      => 'Разширението успешно е изключено.',
	'EXTENSION_ENABLE_SUCCESS'       => 'Разширението успешно е включено.',

	'EXTENSION_NAME'			=> 'Име на разширението',
	'EXTENSION_ACTIONS'			=> 'Действия',
	'EXTENSION_OPTIONS'			=> 'Настройки',
	'EXTENSION_INSTALL_HEADLINE'=> 'Инсталиране на разширението',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Свалете разширение, от базата данни за разширения на phpBB</li>
			<li>Разархивирайте разширението и качете файловете на сървъра в папката на <samp>ext/</samp> форума</li>
			<li>Включете разширението тук, в Управлението на разширения</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Обновяване на разширението',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Изключете разширението</li>
			<li>Изтрийте файловете на разширението от сървъра</li>
			<li>Качете новите файлове</li>
			<li>Включете разширението</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Пълно изтриване на разширението',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Изключете разширението</li>
			<li>Изтрийте данните на разширението</li>
			<li>Изтрийте файловете на разширението от сървъра</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'  => 'Сигурни ли сте, че искате да изтриете данните, свързани с разширението «%s»?<br /><br />Това наистина ще изтрие всичките данни и настройки и не може да бъде възстановено!',
	'EXTENSION_DISABLE_CONFIRM'      => 'Сигурни ли сте, че искате да изключите разширението «%s»?',
	'EXTENSION_ENABLE_CONFIRM'       => 'Сигурни ли сте че искате да включите разширението «%s»?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Сигурни ли сте, че искате да използвате нестабилна версия?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Върни се към списъка с разширения',

	'EXT_DETAILS'			=> 'Информация за разширението',
	'DISPLAY_NAME'			=> 'Показвано име',
	'CLEAN_NAME'			=> 'Име на сървъра',
	'TYPE'					=> 'Тип',
	'DESCRIPTION'			=> 'Описание',
	'VERSION'				=> 'Версия',
	'HOMEPAGE'				=> 'Домашна страница',
	'PATH'					=> 'Път',
	'TIME'					=> 'Дата на релиза',
	'LICENSE'				=> 'Лицензия',

	'REQUIREMENTS'			=> 'Изисквания',
	'PHPBB_VERSION'			=> 'Версия phpBB',
	'PHP_VERSION'			=> 'Версия PHP',
	'AUTHOR_INFORMATION'	=> 'Данни за автора',
	'AUTHOR_NAME'			=> 'Име',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Домашна страница',
	'AUTHOR_ROLE'			=> 'Роля',

	'NOT_UP_TO_DATE'		=> '%s изисква обновяване',
	'UP_TO_DATE'			=> '%s не изисква обновяване',
	'ANNOUNCEMENT_TOPIC'	=> 'Информация за обновяването',
	'DOWNLOAD_LATEST'		=> 'Свали обновяването',
	'NO_VERSIONCHECK'		=> 'Информацията за обновяването липсва.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Провери отново, всички версии',
	'FORCE_UNSTABLE'					=> 'Съобщавай ми за бета-версиите',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Настройване на параметрите на обновяването',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Премини към базата данни на разширенията',

	'META_FIELD_NOT_SET'	=> 'Задължително метаполе %s не е зададено.',
	'META_FIELD_INVALID'	=> 'Метаполето %s има грешен формат.',
));
