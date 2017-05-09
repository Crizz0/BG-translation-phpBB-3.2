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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'От тук можете да управлявате търсещата машина. След промяна на някои настройки може да се наложи да пресъздадете индекса за да влязат промените в действие.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'От тук можете да дефинирате кой бекенд ще бъде използван за индексирането на мнения и търсене. Някой настройки са идентични за всички бек ендове.',

	'COMMON_WORD_THRESHOLD'					=> 'Често употребявани думи',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Думи, които се съдържат в голям процент от всичките мнения ще бъдат идентифицирани като често използвани. Често използваните думи се игнорират от търсачката. Задай 0 за изключване. Във форума трябва да има повече от 100 мнения.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Сигурен ли сте, че искате да промените бекенда? След промяна ще трябва да създадете нов индекс за новия бекенд. Ако нямате намерение да се връщате към стария бекенд можете да го изтриете за да освободите ресурс.',
	'CONTINUE_DELETING_INDEX'				=> 'Продължи изтриването',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Започнат е процес по изтриването на индекс. Процеса трябва да завърши за да имате достъп до търсачката.',
	'CONTINUE_INDEXING'						=> 'Продължи индексирането',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Започнат е процес по изтриването на индекс. Процеса трябва да завърши за да имате достъп до търсачката.',
	'CREATE_INDEX'							=> 'Създай индекс',

	'DELETE_INDEX'							=> 'Изтрий индекс',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Изтрий индекса в прогрес',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Търсачката се почиства. Това ще отнеме няколко минути.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'Трябва ви версия над/или MySQL4.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL fulltext индекси могат да бъдат използвани само с MyISAM или InnoDB таблици. MySQL 5.6.4 е задължителен за fulltext на InnoDB таблици.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Общия брой на индексираните мнения',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'   => 'Думи с най-малко толкова знаци ще бъдат индексирани за търсачката. Тази настойка може да се промени от администратора на сървъра или вашият хостинг провайдър.',
    'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => 'Думи с най-много толкова знаци ще бъдат индексирани за търсачката. Тази настойка може да се промени от администратора на сървъра или вашият хостинг провайдър.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'Механизъм за пълнотекстово търсене PostgreSQL мможе да се използва само със СУБД PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Общо количество индексирани съобщения',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'Версия PostgreSQL',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Профил на конфигурацията на пълнотекстовото търсене:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Минимална дължина на заявката за търсене',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Максимална дължина на заявката за търсене',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'ДЗА дадения търсещ механизъм е необходим PostgreSQL версия 8.3 или по-висока.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'Профил на конфигурацията на пълнотекстовото търсене, използван за определяне на обработващия механизъм и речника.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Думи, които са съставени от не по-малко количество символи, от посоченото количество символи, ще бъдат включени към заявката към базата данни.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Думи, които са съставени от не по-голямо количество символи, от посоченото количество символи, ще бъдат включени към заявката към базата данни',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Задайте следните настройки, за създаване на файла за конфигуриране на Sphinx',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Път до папката с данни',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Посоченият път ще се използва за съхраняване на индекси и файловете на списъците. Необходимо е да са бъде създадена тази папка извън пределите на пространството, достъпно от уеб пространството (пътя трябва да свършва с прав слеш)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Количество съобщения в често обновявания делта-индекс',
	'FULLTEXT_SPHINX_HOST'					=> 'Сървър Sphinx',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Сървъра, на който е пуснат процеса sphinx (searchd). Оставете значението празно, ако използвате локален сървър по подразбиране',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Ограничение на паметта, за процеса на индексиране',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Даденото значение, трябва винаги да бъде по-малко, отколкото достъпното на сървъра количество памет. Ако се появят проблеми с производителността, това може да бъде свързано с прекомерно потреблление на ресурсите от процеса на индексиране. Намаляването на обема от достъпна му памет, може да намали натоварването на сървъра.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Количество съобщения в основният индекс',
	'FULLTEXT_SPHINX_PORT'					=> 'Порт Sphinx',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Порт, чрез който е достъпен процеса sphinx (searchd). Оставете значението празно за да използвате порта по подразбиране 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'Механизма за търсене Sphinx за phpBB поддържа само СУБД MySQL и PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Файл на конфигурацията Sphinx',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'Данни необходими за създаването на файла за конфигурация Sphinx. Посочените данни, следва да бъдат съхранени в файла sphinx.conf, използван от процеса за търсене sphinx. Заместете лексемите [dbuser] и [dbpassword] к името и паролата към базата данни.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Път към папката с данни Sphinx не е зададен. Задайте пътя и натиснете «Изпрати» за създаване на файла на конфигурацията.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Главни настройки',
	'GO_TO_SEARCH_INDEX'					=> 'Отиди на страницата за търсене',

	'INDEX_STATS'							=> 'Статистика',
	'INDEXING_IN_PROGRESS'					=> 'Индексиране...',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Индексират се мненията във форума. Това ще отнеме от няколко минути до няколко часа в зависимост от големината на форума.',

	'LIMIT_SEARCH_LOAD'						=> 'Лимит на търсене',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Ако за една минута системата превиши тази стойност търсенето ще бъде изключено автоматично, 1.0 е равно на 100% използване на процесора. Функцията е активна само при UNIX базираните сървъри.',

	'MAX_SEARCH_CHARS'						=> 'Максимални знаци (за думи) индексирани от търсачката',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Думи с максимум знаци, които ще бъдат индексирани от търсачката.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Максимален размер ключови думи',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Въвдете 0 за неограничен брой.',
	'MIN_SEARCH_CHARS'						=> 'Минимални знаци (за думи) индексирани от търсачката',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Думи с минимум знаци, които ще бъдат индексирани от търсачката.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Минимални знаци автор',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Потребителите трябва да въведат минимум толкова знаци, при използването на търсене теми/мнения по автор.',

	'PROGRESS_BAR'							=> 'Прогрес',

	'SEARCH_GUEST_INTERVAL'					=> 'Flood контрол при гости',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Броя секунди, които гостите трябва да изчакат м/у различните търсения.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		1	=> 'Всички мнения до мнение с id %1$d са индексирани, %2$d мнения тази стъпка.<br />',
		2	=> 'Всички мнения до мнение с id %1$d са индексирани, %2$d мнения тази стъпка.<br />',
		3	=> 'Всички мнения до мнение с id %1$d са индексирани, %2$d мнения тази стъпка.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		1	=> 'Индексирането се осъществява с %3$.1f мнения на секунда.<br />Индексиране…',
		2	=> 'Индексирането се осъществява с %3$.1f мнения на секунда.<br />Индексиране…',
		3	=> 'Индексирането се осъществява с %3$.1f мнения на секунда.<br />Индексиране…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		1	=> 'Всички мнения до мнение с %1$d са изтрити от търсещия индекс.<br />Изтриване…',
		2	=> 'Всички мнения до мнение с %1$d са изтрити от търсещия индекс.<br />Изтриване…',
		3	=> 'Всички мнения до мнение с %1$d са изтрити от търсещия индекс.<br />Изтриване…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Успешно са изтрити всички мнения.',
	'SEARCH_INDEX_REMOVED'					=> 'Успешно е изтрит индекса.',
	'SEARCH_INTERVAL'						=> 'Flood контрол при потребители',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Броя секунди, които потребителите трябва да изчакат м/у различните търсения.',
	'SEARCH_STORE_RESULTS'					=> 'Дължина на кеша при търсене',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Кешираните резултати ще изтекат след това време, в секунди. Настрой на 0 ако искаш да изключиш кеширането на резултати.',
	'SEARCH_TYPE'							=> 'Начин на търсене',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB ви позволява да избирате м/у начините на търсене в мненията. По подразбиране phpBB използва собствен метод.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Вие сменихте начина на търсене. За да използвате новия метод трябва да създадете нов индекс.',

	'TOTAL_WORDS'							=> 'Индексирани думи',
	'TOTAL_MATCHES'							=> 'Индексирани връзки м/у думи',

	'YES_SEARCH'							=> 'Включи улесненията',
	'YES_SEARCH_EXPLAIN'					=> 'Пример за улеснение е търсенето на потребители.',
	'YES_SEARCH_UPDATE'						=> 'Включи обновяването',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Обновяване на индекса при изключено търсене.',
));
