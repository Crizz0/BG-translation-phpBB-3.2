<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'PLUPLOAD_ADD_FILES'		=> 'Добави файлове',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Добави файлове в опашката и натисни бутона «Качи».',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s вече са на опашката.',
	'PLUPLOAD_CLOSE'			=> 'Затвори',
	'PLUPLOAD_DRAG'				=> 'Премести файловете тук.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Грешка: посочения файл вече съществува.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Може да качите файл, като го завлечете в този прозорец.',
	'PLUPLOAD_ERR_INPUT'		=> 'Не може да бъде открит входящия поток.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Не е възможно да бъде преместен качения файл.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Не е възможно да бъде намерен изходящия поток.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Файла е прекалено голям:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Грешка при преброяването на количеството файлове.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Грешно разширение на файла:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Недостатъчно памет за да се изпълни операцията.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Линка към файла за качване е грешен или адреса не съществува.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Грешка на разширението на файла.',
	'PLUPLOAD_FILE'				=> 'Файл: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Файл: %s, големина: %d, максимална големина на файла: %d',
	'PLUPLOAD_FILENAME'			=> 'Име на файла',
	'PLUPLOAD_FILES_QUEUED'		=> 'Файлове на опашката: %d',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Обща грешка.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP грешка.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Грешен или неподдържан формат на изображението.',
	'PLUPLOAD_INIT_ERROR'		=> 'Грешка при инициализиране.',
	'PLUPLOAD_IO_ERROR'			=> 'Грешка при въвеждане',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Грешка на безопасност.',
	'PLUPLOAD_SELECT_FILES'		=> 'Избери файлове',
	'PLUPLOAD_SIZE'				=> 'Големина',
	'PLUPLOAD_SIZE_ERROR'		=> 'Грешка на големината на файла.',
	'PLUPLOAD_STATUS'			=> 'Статус',
	'PLUPLOAD_START_UPLOAD'		=> 'Качи',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Започни качването на файловете.',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Спри качването',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Спри настоящето качване',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Качени файлове: %d/%d',
));
