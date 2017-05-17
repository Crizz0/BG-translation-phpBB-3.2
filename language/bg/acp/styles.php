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
	'ACP_STYLES_EXPLAIN'	=> 'Тук може да управлявате стиловете, достъпни на форума. Вие може да променяте съществуващите стилове, да ги триете, деактивиране, отново активирате, инсталирате нови. Също така може да видите, как ще изглежда стила, използвайки функцията за предварителен преглед. Също така е посочено общото количество потребители за всеки стил. Имайте предвид, че принудителната замяна на стиловете на потребителите не се прави тук.',
	'CANNOT_BE_INSTALLED'			=> 'Грешка при инсталацията',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Наистина ли искате да отмените инсталирането на стила?',
	'COPYRIGHT'						=> 'Копирайт',

	'DEACTIVATE_DEFAULT'		=> 'Не можеш да деактивираш стила.',
	'DELETE_FROM_FS'			=> 'Изтрий от системата',
	'DELETE_STYLE_FILES_FAILED'	=> 'При изтриване на файловете на стила «%s» е станала грешка.',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Файловете на стила «%s» са успешно изтрити.',
	'DETAILS'					=> 'Детайли',
	'INHERITING_FROM'			=> 'Наследена от',
	'INSTALL_STYLE'				=> 'Инсталирай стила',
	'INSTALL_STYLES'			=> 'Инсталирай стиловете',
	'INSTALL_STYLES_EXPLAIN'		=> 'Тук можете да инсталирате нов стил. Всички съществуващи елементи ще бъдат заместени. Някой от стиловете изискват инсталирани елементи.',
	'INVALID_STYLE_ID'			=> 'Грешен идентификатор на (ID) стила.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Няма стилове съответстващи на запитването.',
	'NO_UNINSTALLED_STYLE'		=> 'Всички стилове са инсталирани',
	
	'PURGED_CACHE'				=> 'Кэша е изчистен.',
	
	'REQUIRES_STYLE'			=> 'Този стил изисква инсталиран стил «%s».',

	'STYLE_ACTIVATE'			=> 'Активирай',
	'STYLE_ACTIVE'				=> 'Активен',
	'STYLE_DEACTIVATE'			=> 'Деактивирай',
	'STYLE_DEFAULT'				=> 'По подразбиране',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Необходимо е да активирате стила, преди да го назначите като стил по подразбиране.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Родителския стил е грешен.',
	'STYLE_ERR_NAME_EXIST'		=> 'Вече съществува стил с такова име.',
	'STYLE_ERR_STYLE_NAME'		=> 'Трябва да въведеш име на стила.',
	'STYLE_NAME_RESERVED'		=> 'Стила «%s» не може да бъде инсталиран, тъй като даденото име се явява резервирано.',
	'STYLE_INSTALLED'			=> 'Стила «%s» е успешно инсталиран.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Върнете се към списъка с инсталирани стилове.',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Инсталирай други стилове.',
	'STYLE_NAME'				=> 'Име',
	'STYLE_NOT_INSTALLED'		=> 'Грешка при инсталиране на стила «%s».',
	'STYLE_PATH'				=> 'Път до стила',
	'STYLE_UNINSTALL'			=> 'Изтрий',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Стила «%s» не може да бъде изтрит, тъй като се явява родителски, за други стилове.',
	'STYLE_UNINSTALLED'			=> 'Стила «%s» е успешно изтрит.',
	'STYLE_USED_BY'				=> 'Използва се от (включително и роботи)',

	'UNINSTALL_DEFAULT'		=> 'Не може да изтривате стила по подразбиране.',

	'BROWSE_STYLES_DATABASE'	=> 'Премини към базата данни от стилове',
));
