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

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Покажи изображенията в съобщенията',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Встъпление',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Създаване на линкове',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Създаване на списъци',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Други',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Цитиране и извеждане на текст с фиксирана ширина',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Форматиране на текста',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Сега вложенията могат да бъдат сложени във всяка част на съобщението с помощта на новият таг BBCode <strong>[attachment=][/attachment]</strong>,ако вложенията са разрешени от администратора на форума и ако имате необходимите права за достъп. На страницата за публикуване на съобщението се намира падащо меню (съответно бутон) за поместване на вложения в съобщението.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Добавяне на вложение в съобщението',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'BBCode включва таг за обновяване на картинката във въшето съобщение. При това следва да се помнят, две много важни неща: първо, повечето потребители не одобряват наличието на голямо количество картинки, второ, вашето изображение вече трябва да е качено в интернет (т. е. то не може да бъде сложено само на вашият компютър, освен ако нямата web-сървър на компютъра си!). Към момента, няма възможност за локално съхраняване на изображението в phpBB (очаква се, това ограничение да бъде свалено, в следващата версия на phpBB). За показване на изображението, трябва да го обкръжите с URL тагове <strong>[img][/img]</strong>. Например:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Както е посочено в предишния пункт, вие можете да затворите изображението в тагове <strong>[url][/url]</strong>, тоест<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />ще покаже:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Добавяне на изображение в съобщението',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode — е специален вариант за HTML. Дали ще можете да използвате 
	BBCode във вашите съобщение или не, се определя от администратора на форума. Освен това, ще може да изключите използването на BBCode в конкретно съобщение, при неговото публикуване. Самият BBCode по стил прилича на HTML, таговете са заключени в квадратни скобки [ и ], а не в &lt; и &gt;; той дава повече възможности за управляване на темите, как се извеждат данните. При използване на някой шаблони, вие ще можете да използвате BBCode във вашите съобщения, като използвате обикновен интерфейс, разположен над полето за въвеждане на текст. Но дори в този случай, даденото ръководство може да се окаже полезно.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Какво е BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'В BBCode се поддръжат няколко начина за създаване URL\'ов.<ul><li>Първият от тях използва тага <strong>[url=][/url]</strong>, след знака = следва да бъде необходимият URL. Например за линк към phpBB.com вие бихте могли да използвате:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Посетете phpBB!<strong>[/url]</strong><br /><br />Това ще направи следният линк: <a href="https://www.phpbb.com/">Посетете phpBB!</a> Имайте предвид, че линка ще се отваря в същият или в нов прозорец, в зависимост от настройките на ваши браузър.</li><li>Ако искате в качеството на текст, да се показва самото URL, може да направите следното:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Това ще изведе следният линк: <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>Освен това, phpBB поддържа възможността за така наречените <i>Автоматични линкове</i>, това ще преведе всеки синтактично правилен URL в линк, без да не енеобходимо да се посочват тагове и дори префикс http://. Например, въвеждането на www.phpbb.com ще доведе до автоматично показване на <a href="https://www.phpbb.com/">www.phpbb.com</a> при преглед на съобщението.</li><li>Същото се отнася и до email адресите, вие можете или да посочите адреса в чист вид:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />което ще покаже <a href="mailto:no.one@domain.adr">no.one@domain.adr</a>, или просто да въведете no.one@domain.adr във вашето съобщение, и той автоматично ще бъде преобразуван при преглеждане.</li></ul>Както и със всички други тагове BBCode, вие можете да затваряте в URL\'и всякакви други тагове, например <strong>[img][/img]</strong> (виж следващия пункт), <strong>[b][/b]</strong> и т. н. Както и с теговете за форматиране, правилното влагане на тагове, зависи от вас, например:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /> <span style="text-decoration: underline">неверно</span>, което може да доведе до последващо изтриване на съобщението ви, така че бъдете внимателни.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Линкове към друг сайт',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'Втория тип списък, номерирания, позволява да изберете, какво точно ще бъде показвано пред всеки елемент. За създаване на номериран списък използвайте <strong>[list=1][/list]</strong> или <strong>[list=a][/list]</strong> за създаване на активен списък. Както и в случая с маркиран списък, елементите се определят с помощта на <strong>[*]</strong>. Например:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Усмихни се<br /><strong>[*]</strong>Ти си ценен<br /><strong>[*]</strong>Прави добро<br /><strong>[/list]</strong><br /><br />ще покаже следното:<ol style="list-style-type: decimal;"><li>Усмихни се</li><li>Ти си ценен</li><li>Прави добро</li></ol>За азбучен списък използвайте:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Първи възможен отговор<br /><strong>[*]</strong>Втори възможен отговор<br /><strong>[*]</strong>Трети възможен отговор<br /><strong>[/list]</strong><br /><br />което ще покаже<ol style="list-style-type: lower-alpha"><li>Първи възможен отговор</li><li>Втори възможен отговор</li><li>Трети възможен отговор</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Създаване на номериран списък',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode поддържа два вида списъци: маркирани и номерирани. Те са на практика идентични на еквивалентите си от HTML. В маркирания списък, всички елементи се извеждат последователно, като всеки се отбелязва със символ-маркер. За създаване на маркиран списък използвайте <strong>[list][/list]</strong> и определете всеки елемент с помощта на <strong>[*]</strong>. Например, за да изведете любимите си цветове, вие може да използвате:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Червен<br /><strong>[*]</strong>Син<br /><strong>[*]</strong>Жълт<br /><strong>[/list]</strong><br /><br />Това ще изведе следния списък:<ul><li>Червен</li><li>Син</li><li>Жълт</li></ul><br />Също така може да бъде посочен стила на маркера на списъка, като използвате <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, or <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Създаване на маркиран списък',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Ако се явявате администратор на този форум и имате достатъчно права, то може да добавите нови BBCode тагове в администраторския панел.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Мога ли да добавя собствени тагове?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Ако е необходимо да бъде изведен, част от програмен код или други данни с фиксирана широчина, такива като шрифт Courier, е необходимо да слагате текста в таговете<strong>[code][/code]</strong>, непример<br /><br /><strong>[code]</strong>echo &quot;Тук се намира код&quot;;<strong>[/code]</strong><br /><br />Цялото форматиране, използвано вътре в таговете <strong>[code][/code]</strong>, ще бъде запазено. Подсветка на езика на синтаксиса на PHP може да бъде включена с помощта на <strong>[code=php][/code]</strong> и е препоръчителна при изпращане на съобщения с код на езика PHP за по-добра четимост.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Извеждане на код или данни с фиксирана ширина',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Съществуват два начина за цитиране на текст: с обращение и без.<ul><li> При използване на бутона цитиране при отговор на съобщение, в прозореца на отговора се добавя текста на цитираното съобщение, затворен с таговете<strong>[quote=&quot;&quot;][/quote]</strong>. Този начин позволява да се цитира с обращение към потребителя или към някой (нещо) още, по избор. Например за да цитирате текст, написан от потребителя Mr. Blobby, може да въведете:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Тук се намира текста, написан от потребителя Mr. Blobby<strong>[/quote]</strong><br /><br />В резултат на това, преди текста, ще бъдат сложени думите «Mr. Blobby е казал(а):». Помнете, че <strong>е задължително</strong> да затваряте обръщението в кавички &quot;&quot;, те не могат да бъдат пропуснати.</li><li>Втория начин позволява да бъдат създавани прости цитати. За това е необходимо да затворите текста в тагове <strong>[quote][/quote]</strong>. При преглед на съобщението, просто ще бъде показан текста в блока на цитирането.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Цитиране при отговори',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode включва тагове за бърза промяна на стила на текста. Това се достига по следните начини: <ul><li>За да направите текста удебелен, го сложете в таговете <strong>[b][/b]</strong>, например:<br /><br /><strong>[b]</strong>Здравей<strong>[/b]</strong><br /><br />станет <strong>Здравей</strong></li><li>За подчертаване, използвайте <strong>[u][/u]</strong>, например:<br /><br /><strong>[u]</strong>Добро утро<strong>[/u]</strong><br /><br />станет <span style="text-decoration: underline">Добро утро</span></li><li>За да го напарвите курсив, използвайте тага <strong>[i][/i]</strong>, например:<br /><br />Это <strong>[i]</strong>Чудесно!<strong>[/i]</strong><br /><br />выведет Это <i>Чудесно!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Как да направя текста удебелен, подчертан или курсивен',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'За промяна на цвета или размера на шрифта, могат да бъдат използвани следните тагове (окончателния вид, ще зависи от системата и браузъра на потребителя): <ul><li>Цвета на текста може да се промени, след като бъде обкръжен с <strong>[color=][/color]</strong>. Може да бъде посочено или известно име на текста (red, blue, yellow и т. н.), неговото шеснайсетично представяне, например #FFFFFF, #000000. По този начин, за създаване на червен надпис може да се използва:<br /><br /><strong>[color=red]</strong>Здравей!<strong>[/color]</strong><br /><br />или<br /><br /><strong>[color=#FF0000]</strong>Здравей!<strong>[/color]</strong><br /><br />и в двата случая ще се покаже <span style="color:red">Здравей!</span></li><li>Промяна на розмера се постига по аналогичен начин, чрез използване на тага <strong>[size=][/size]</strong>. Този таг зависи от използваните шаблони, препоръчителен формат - число, показващ размера на текста в проценти, от 20% (много малък) до 200% (много голям) от размера по подразбиране. Например:<br /><br /><strong>[size=30]</strong>МАЛЪК<strong>[/size]</strong><br /><br />най-вероятно ще бъде показано като <span style="font-size:30%;">МАЛЪК</span><br /><br />а при:<br /><br /><strong>[size=200]</strong>ОГРОМЕН!<strong>[/size]</strong><br /><br />ще се покаже <span style="font-size:200%;">ОГРОМЕН!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Как да променя цвета или размера на текста',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Да, това е възможно. Например, за да привлечете вниманието, може да напишете:<br /><br /><strong>[size=200][color=red][b]</strong>ВИЖТЕ МЕ!<strong>[/b][/color][/size]</strong><br /><br />в този случай, ще бъде показано <span style="color:red;font-size:200%;"><strong>ВИЖТЕ МЕ!</strong></span><br /><br />Не се препоръчва по този начин да показвате дълги текстове! Имайте предвид, че автора на съобщението следва да се погрижи за правилното затваряне на таговете. Например, следното използване на таговете BBCode е грешно:<br /><br /><strong>[b][u]</strong>Това е грешно<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Мога ли да комбинирам тагове?',
));