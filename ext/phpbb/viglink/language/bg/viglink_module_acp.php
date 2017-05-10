<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
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
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink настройки',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink приложение на трета страна, което дискретно монетизира линкове, които постват потребителите на вашият форум, без да променя по какъвто и да е начин интерфейса. Когато потребителите кликат на линковете в форума, към продукти, услуги и купуват нещо, търгомеца плаща на VigLink комисионна, част от която се дарява на проекта phpBB. Избирайки да включите VigLink и да дарявате постъпленията на проекта phpBB, вие подкрепяте нашата open source организация и подсигурявате нашата финансова стабилност.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Вие може да промените тези настройки по всяко време в “<a href="%1$s">VigLink настройки</a>” панел.',
	'ACP_VIGLINK_ENABLE'			=> 'Включи VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Включи използването на VigLink услугата.',
	'ACP_VIGLINK_EARNINGS'			=> 'Поискай своите собствени доходи (опционално)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Вие може да поискате своите собствени доходи, като се подпишете за VigLink конвертиращ акаунт.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Услугата VigLink е изключена от phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Поискай доходите си',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Вие може да поискате, доходите на форума си от монетизиране на VigLink линкове, вместо да ги дарявате на проекта phpBB. За да управлявате настройките на акаунта си, регистрирайте се за “VigLink Convert” акаунт като натиснете “Convert account”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Convert account',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'VigLink конвертирането на линка към акаунта, може да е необратим процес.'
));
