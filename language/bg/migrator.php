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
	'CONFIG_NOT_EXIST'					=> 'Параметъра на конфигурацията «%s» не съществува.',

	'GROUP_NOT_EXIST'					=> 'Група «%s» не съществува.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Посочване на зависимостите на обновяването %s.',
	'MIGRATION_DATA_DONE'				=> 'Обновени са данните: %1$s; Време: %2$.2f секунди',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Обновяване на данните: %1$s; Време: %2$.2f секунди',
	'MIGRATION_DATA_RUNNING'			=> 'Добавяне на данни: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Обновяването вече е направено (пропуснато): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'В процеса на обновяване е станала грешка, която е предизвикала изключение. Промените направени до появата на грешката са отменени. Въпреки това е желателно форума да бъде проверен за наличие на грешки.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Не е възможно да бъде изпълнено обновяването «%1$s», пропуснато е обновяването «%2$s».',
	'MIGRATION_NOT_INSTALLED'			=> 'Обновяването «%s» не е инсталирано.',
	'MIGRATION_NOT_VALID'				=> '%s не е коректно обновяване.',
	'MIGRATION_SCHEMA_DONE'				=> 'Обновена е схемата: %1$s; Време: %2$.2f секунди',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Инсталиране на схемата: %1$s; Време: %2$.2f секунди',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Обновяване на схемата: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Отменено е обновяването на данни: %1$s; Време: %2$.2f секунди',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Отмени обновяването на данните: %1$s; Време: %2$.2f секунди',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Отмени обновяването на данните: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Отменено е обновяването на схемата: %1$s; Време: %2$.2f секунди',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Отмяна на обновяването на схемата: %1$s; Време: %2$.2f секунди',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Отмени обновяването на схемата: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Файла с обновявания съдържа грешки. Оператора if не намери условие.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Файла с обновявания съдържа грешки. Оператора if не намери коректен начин за започване на обновяването.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Файла с обновявания съдържа грешки. Опит за обръщане към потребителската функция, която не може да бъде извикана.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Файла с обновявания съдържа грешки. Типа обновяване не е посочен.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Файла с обновявания съдържа грешки. Търсеният файл за обновяване не съществува.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Файла с обновявания съдържа грешки. Изискваният метод, не съществува в обновяването.',

	'MODULE_ERROR'						=> 'Грешка при създаване на модула: %s',
	'MODULE_EXISTS'						=> 'Модула вече съществува: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Няколко модула с посоченото име на родителския модул съществуват: %s. Опитайте да ползвате ключовете before/after за да уточните необходимото място на инсталирания модул.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Задължителен компонент на модула липсва: %2$s',
	'MODULE_NOT_EXIST'					=> 'Задължителен модул липсва: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Не е възможно да бъде намерен търсеният идентификатор на родителския модул: %s',
	'PERMISSION_NOT_EXIST'				=> 'Правото за достъп «%s» не съществува.',

	'ROLE_NOT_EXIST'					=> 'Ролята «%s» в в системата за права на достъп, не съществува.',
));
