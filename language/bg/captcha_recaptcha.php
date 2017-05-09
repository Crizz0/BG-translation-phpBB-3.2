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
	'RECAPTCHA_LANG'				=> 'bg',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'За да използвате reCaptcha, трябва да си направите акаунт <a href="http://recaptcha.net/">в reCaptcha.net</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Въведеният код е грешен.',
	'RECAPTCHA_NOSCRIPT'			=> 'Включете JavaScript в браузъра, за да видите заданието, срещи спам-роботи.',

	'RECAPTCHA_PUBLIC'				=> 'Публичен reCaptcha ключ (Public Key)',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Ключ можете да получите <a href="http://recaptcha.net/">в сайта на reCaptcha.net</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Личен reCaptcha ключ (Private Key)',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Такъв ключ също можете да получите на <a href="http://recaptcha.net/">reCaptcha.net</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Да за ограничим автоматичните изпращаният, ще ви помолим да въведете и двете думи, които виждате.',
));
