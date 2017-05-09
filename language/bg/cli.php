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
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Включете тази опция, ако значението на параметъра на конфигурацията се сменя прекалено често и е необходимо да се кешира.',
	'CLI_CONFIG_CURRENT'				=> 'Текущо значение на параметъра на конфигурацията. Използвайте 0 и 1, за да задавате значения от логически тип (boolean)',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Успешно е изтрит параметъра на конфигурацията %s.',
	'CLI_CONFIG_NEW'					=> 'Ново значение на параметъра на конфигурацията. Използвайте 0 и 1, за да задавате значения от логически тип (boolean)',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Параметъра на конфигурацията %s не съществува',
	'CLI_CONFIG_OPTION_NAME'			=> 'Име на параметъра на конфигурацията',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Включете тази опция, ако значенията следва да бъдат показани, без прекъсване на редовете в края.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Увеличете на величината',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Успешно е увеличен параметъра на конфигурацията %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Грешка при установяване на параметъра на конфигурацията %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Успешно установяване на параметъра на конфигурацията %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Изведете списъка с готови и неготови за изпълнение (cron) задачи.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Пусни всички готови за изпълнение (cron) задачи.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Име на (cron) задачата, която ще бъзе изпълнена',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Покажи всички инсталирани и достъпни миграции.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Обнови базата данни чрез използване на миграцията.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Отмени миграцията.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Изтрий параметъра на конфигурацията',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Изключи зададеното разширение.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Включи зададеното разширение.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Намери миграциите, нямащи зависимости.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Получи значението на параметъра на конфигурацията',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Увеличи значението на числовия параметър на конфигурацията',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Изведи списъка на всички разширения от базата данни и файловата система.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Наименование на обкръжението.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Пусни командния ред в безопасен режим (без разширения).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Пусни командния ред.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Изтрива разширенията заедно с данните му.',
	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Извежда списък на типовете текст, достъпни за репарсинг.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Достъпни репарсери:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Осъществява репарсинг на запазения текст, с помощта на текущите сървизи text_formatter.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Тип текст за репарсинг. Оставете полето празно за репарсинг на всички типове.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Не запазва никакви промени; само покажи предполагаем резултат',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Минимално значение на ID (идентификатора) на записа за обработка',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Максимално значение на ID (идентификатора) на записа за обработка',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Приблизително число обработваеми записи, за единица време',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Продължи репарсинга, от момента на последното спиране',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'			=> 'Преброява полето user_email_hash в таблицата на потребителите.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Определяне на стойността на параметъра на конфигурацията, в случай че старата стойност съвпада с новата',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Определяне на стойността на параметъра на конфигурацията',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Изтриване на всички съществуващи миниатюри.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Създаване на всички липсващи миниатюри.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Създаване отново на всички миниатюри.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Проверка за обновявания.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Име на разширението за проверка (с ключа all ще бъдат проверени всички разширения)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Проверка обновлений с ипользованием кэша.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Избор на типа проверка за обновявания (само стабилни версии или и нестабилни.).',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" нестабилно.',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Активирай (или деактивирай) профила.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Потребителско име за активация.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Деактивирай профила на потребителя',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Профила на потребителя, вече е активиран.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Профила на потребителя, вече е деактивиран.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Добавете нов профил.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Име на новия потребител',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'парола на новия потребител',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'E-mail адрес на новия потребител',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Изпрати email съобщение за активиране на новия потребител (по подразбиране не се изпраща)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Изтрий профила.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Потребителско име за изтриване',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Изтрий всички съобщения на потребителя. Ако дадената опция не се използва, съобщенията на потребителя няма да бъдат изтрити.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Възстанови изтритите потребителски имена.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Грешка при изключване на разширението %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Успешно изключване на разширението %s',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Грешка при изключване на разширението %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Успешно изключване на разширението %s',
	'CLI_EXTENSION_NAME'				=> 'Име на разширението',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Грешка при изтриване на файловете и данните на разширението %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Успешно изтриване на файловете и данните на разширението %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Грешка при обновяването на разширението %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Успешно обновяване на разширението %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Разширението не е намерено.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Достъпни',
	'CLI_EXTENSIONS_DISABLED'			=> 'Изключени',
	'CLI_EXTENSIONS_ENABLED'			=> 'Включени',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Успешно преброяване на всички хаш значения на email.',

	'CLI_MIGRATION_NAME'					=> 'Име на миграцията, включвайки пространството от имена (използвайте права черта вместо наклонена за да няма проблеми).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Достъпни миграции',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Инсталирани миграции',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Покажи само достъпните миграции',
	'CLI_MIGRATIONS_EMPTY'                  => 'Няма миграции.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Обработка %1$s (диапазон %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Обработка %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Обработка успешно приключи',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) изтрита.',
	'CLI_THUMBNAIL_DELETING'	=> 'Изтриване на миниатюрите',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) пропусната.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) създадена.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Създаване на миниатюри',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Всички миниатюри бяха пресъздадени.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Всички миниатюри бяха изтрити.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Миниатюри за създаване липсват.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Миниатюри за изтриване липсват.',

	'CLI_USER_ADD_SUCCESS'		=> 'Потребителя %s успешно е добавен.',
	'CLI_USER_DELETE_CONFIRM'	=> 'сигурни ли сте, че искате за изтриете «%s»? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'Възстановяване на изчистените потребителски имена',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Възстановяването на изчистените имена приключи. Няма изчистени имена, изискващи възстановяване.',
		1	=> 'Възстановяването на изчистените имена приключи. Възстановено %d изчистено име.',
		2	=> 'Възстановяването на изчистените имена приключи. Възстановени %d изчистени имена.',
		3	=> 'Възстановяването на изчистените имена приключи. Възстановени %d изчистени имена.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . 'Може да се посочи само за отделна задача за пускане.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Активиране на профила на потребителя, или деактивиране, чрез параметъра<info>--deactivate</info>.
За изпращане на потребителя email съобщение за октивация, използвайте параметъра <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'Команда <info>%command.name%</info> добавя нов потребител:
При пускане на тази команда без параметри, ще бъде предложено да ги зададете.
За изпращане на нов потребител на email съобщение, изпълзвайте параметъра<info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'При възстановяване на изчистените потребителски имена, ще бъде направена проверха на всички профили, за проверка на наличие на изчистеното име. изчистените имена не зависят от регистъра, нормализирани са и преобразувани в ASCII.',
));
