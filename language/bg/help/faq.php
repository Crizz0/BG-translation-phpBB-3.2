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
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'Всеки администратор може да разреши или забрани определени типове файлове. Ако не сте сигурни какво е позволено да бъде прикачвано, моля свържете се с Администратора за помощ.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Какви прикачени файлове са позволени в този форум?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'За да видите списък с файловете, които сте прикачвали, отидете в Потребителския панел и последвайте връзката Управление на прикачените файлове.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Как да намеря всички файлове, които съм прикачвал?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Прикачени файлове',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Любими теми и абонаменти',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Форматиране на текст и видове теми',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Приятели и врагове',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'Потребителски нива и групи',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'Проблеми с phpBB',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Проблеми при влизането и регистрацията',
	'HELP_FAQ_BLOCK_PMS'	=> 'Лични съобщения',
	'HELP_FAQ_BLOCK_POSTING'	=> 'Проблеми с публикуването',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'Търсене във форума',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Потребителски настройки и предпочитания',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'В phpBB версия 3.0, добавянето на любима тема работеше като добавянето на сайт в любими в уеб браузъра ви (bookmark). Не бивате уведомен когато темата е обновена. От phpBB версия 3.1 натам, добавянето на тема в любими е повече като абониране за тема. Можете да бъдете уведомен, когато тя е обновена. Абонамента, от друга страна, ще Ви уведоми когато тема или форум бъдат обновени (например публикувана е нова тема в някой под форум). Настройките за известяване за любими теми и абонаменти могат да бъдат променяни в Потребителския панел, раздел “Настройки на форума”.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Каква е разликата между добавяне на любима тема и абонамент?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'За да се абонирате за цял форум/раздел, натиснете връзката “Абониране за форума”, която се намира в лентата най-долу на страницата при отваряне на дадения форум/раздел.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Как да се абонирам за даден форум(и)?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'За да прекратите абонаментите си отидете в Потребителския панел и последвайте връзката Управление на абонаментите.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Как да прекратя абонаментите си?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Можете да добавите тема в любими или да се абонирате за дадена тема като изберете съответната връзка в менюто “Инструменти за темата” (бутон с гаечен ключ намиращ се най-горе и най-долу на всяка тема).<br />Отговарянето на тема с включена опция “Уведоми ме при нов отговор в темата” също ще Ви абонира за темата.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Как да добавя тема в любими или да се абонирам за дадена тема(и)?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Важните съобщения, както подсказва името, често съдържат важна информация за форума, в който се намирате и трябва да ги прочетете, когато е възможно. Важните съобщения се показват най-горе на всяка страница на форума, в който са публикувани. Както и глобалните съобщения, правата за създаването им се дават от администратора.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Какво е важно съобщение?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode е специална имплементация на HTML, която позволява широк контрол на форматирането на дадени обекти в мнението. Използването на BBCode се разрешава от администратора, но също така може да бъде забранено за всяко отделно мнение от формата за публикуване. BBCode сам по себе си е подобен на HTML, но таговете му са затворени в квадратни скоби [ и ], а не в &lt; и &gt;. За повече информация относно BBCode вижте упътването за BBCode, което можете да намерите във формата за публикуване.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Какво е BBCode?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Глобалните съобщения съдържат важна информация и трябва да ги прочетете, когато е възможно. Те ще се показват най-горе на всеки форум и във Вашия Потребителски Контролен Панел. Правата за създаване на глобални съобщения се дават от администратора.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Какво е глобално съобщение?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Не. Не е възможно да публикувате HTML в този форум и той да се възпроизведе като такъв. Голяма част от форматирането, което се извършва с HTML, може да се постигне с прилагането на BBCode.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Мога ли да използвам HTML?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Иконките на темите са изображения, избрани от автора, които се добавят към темата за да индикират по някакъв начин съдържанието й. Възможността за използване на иконки за теми зависи от администратора на форума.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Какво е иконка на темата?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Да, изображения могат да бъдат показвани във Вашите мнения. Ако администратора е разрешил прикачването на файлове, можете да прикачите снимка. Ако прикачването на файлове не е разрешено, то можете да публикувате снимка от публично достъпен сървър, например http://www.example.com/my-picture.gif. Не можете да публикувате снимка от връзка към локалния Ви компютър (освен ако той не е публично достъпен сървър), нито снимки, съхранявани зад механизъм за защита с парола, например hotmail или gmail пощи, сайтове, изискващи парола и т.н. За да се покаже изображението, трябва да използвате BBCode [img] тага.',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Мога ли да публикувам изображения?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Заключените теми са теми, в които потребителите не могат да публикуват нови мнения и всяка анкета в такава тема приключва автоматично. Темите могат да бъдат заключвани поради много причини и модераторите или администраторите са отговорни за това. Можете също така да заключвате собствените си теми, ако това е разрешено от администратора.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Какво е заключена тема?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Усмивките, или Емотикони, са малки изображения, които могат да бъдат използвани за изразяване на чувства, използвайки кратък код, например :) означава щастие, докато :( означава тъга. Пълният лист с емотикони може да бъде видян във формата за публикуване. Опитайте се да не използвате прекалено много емотикони, защото мнението може да стане трудно четимо и модератор може да промени съдържанието му или направо да го изтрие. Администратора също така може да е задал лимит на максималния брой емотикони, които могат да се съдържат в едно мнение.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Какво са усмивките?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Закачените теми се показват под важните съобщения, но над всички други теми във форума и само на първа страница. Често те са доста важни или интересни, затова ги прочетете, когато е възможно. Както важните и глобалните съобщения, правата за създаването на закачени теми се дават от администратора.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Какво е закачена тема?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Можете да използвате тези списъци за да организирате познанствата си във форума. Потребителите добавени в списъка Ви с приятели ще бъдат видими в Потребителския Контролен Панел за бърз достъп, където ще можете да виждате дали са на линия и да им пращате лични съобщения. Ако се поддържа от темата (скина) на форума, мненията и съобщенията от приятели могат да бъдат оцветени с различен цвят. Ако добавите потребител в списъка си с врагове, всички негови мнения ще бъдат скрити по подразбиране.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Какви са тези списъци с Приятели и Врагове?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Можете да добавите потребител към списъците по два начина. Единият е чрез съответните връзки в профила на потребителя, а другият начин е през Потребителския Контролен Панел, където директно можете да добавяте потребители като изписвате потребителските им имена. От същата страница можете да премахнете потребители от списъка.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Как мога да добавя / премахна потребител от списъка с Приятели или Врагове?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Администраторите са потребители, които имат най-високо ниво на контрол във форума. В зависимост от това, дали създателя на форума е дал съответните права, тези потребители могат да контролират всички възможни операции във форума, включително управление на правата, изгонените потребители, създаването на потребителски групи, назначаване на модератори и т.н. Също така, те могат да имат пълни модераторски права във всички форуми, отново, ако това им е позволено от създателя на форума.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Какво са Администраторите?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'Администраторът може да задава различен цвят на потребителите от дадена група за по-лесно идентифициране на членовете на тази група.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Защо някои групи са с различен цвят?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Ако сте член на повече от една потребителска група, Вашата група по подразбиране се използва за да се определи кой цвят и ранг трябва да се показват в профила Ви. Администраторът може да разреши или забрани промяната на групата по подразбиране от Потребителския Контролен Панел.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Какво е “Група по подразбиране”?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Модераторите са потребители (или група от потребители), които се грижат за форума всеки ден. Те имат правото да променят или изтриват мнения и да заключват, отключват, изтриват и разделят теми във форумите, които модерират. Обикновено модераторите следят потребителите да не се отклоняват от темата или да публикуват мнения, които са в разрез с правилата на форума.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Какво са Модераторите?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'Тази страница показва списък с потребителите, които поддържат форума - администратори, модератори, както и други подробности като това кой форум модерират и т.н.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'Каква е тази връзка “Екипът”?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'Потребителските групи са групи от потребители, които разделят форума на по-малки управляеми единици, с които администраторите могат да работят. Всеки потребител може да членува в една или повече групи, като всяка група има определени права. Това предоставя на администраторите лесен начин за промяна на правата на много потребители наведнъж, като например даване на модераторски права или даване на достъп до скрит форум.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'Можете да видите всички потребителски групи в раздела “Потребителски групи” в Потребителския Контролен Панел. Ако искате да се присъедините към някоя от групите, можете да го направите като изберете съответния бутон. Не всички групи са с отворен достъп. Някои от тях изискват одобрение за присъединяване, някои са затворени, а някои даже са невидими за другите потребители. Ако групата е с отворен достъп, можете да се присъедините към нея, чрез избиране на съответния бутон. Ако групата изисква одобрение на членството, то лидера на групата ще трябва да одобри членството Ви.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Къде мога да видя потребителските групи и как да се присъединя към тях?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Лидер на групата обикновено се избира при създаването на групата от администратора. Ако искате да създадете група, първо трябва да се свържете с администратора, например чрез лично съобщение.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Как да стана лидер на група?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Какво са потребителските групи?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Всички потребители на форума могат да използват формата “Свържете се с нас”, ако тази функция е била разрешена от администратора.<br />Потребителите на форума могат също така да използват връзката “Екипът”.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Как да се свържа с администратора на форума?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Този софтуер е написан и лицензиран от phpBB Limited. Ако мислите, че дадена функция трябва да бъде добавена, моля посетете <a href="https://www.phpbb.com/ideas/">phpBB център за идеи</a>, където можете да гласувате за съществуващи идеи или да предложите нови функции.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'Защо я няма функцията X?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Всеки от администраторите, показани в списъка на страницата “Екипът”, биха могли да отговорят на Вашите оплаквания. Ако не получите отговор, то можете да се свържете със собственика на домейна (направете <a href="http://www.google.com/search?q=whois">справка</a>) или ако се хоства на безплатен хостинг (например Yahoo!, free.fr, f2s.com, и т.н.), управата или отдела за оплаквания на този доставчик. Обърнете внимание, че phpBB Limited няма <strong>абсолютно никаква юрисдикция</strong> и не може по никакъв начин да бъде държана отговорна за това как, къде или от кого се използва тази платформа. Не се свързвайте с phpBB Limited във връзка с юридически въпроси, които не са <strong>директно свързани</strong> със сайта phpBB.com или софтуера phpBB. Ако напишете емейл до phpBB Limited <strong>във връзка с трета страна</strong> използваща софтуера, то очаквайте кратък или никакъв отговор.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'С кого да се свържа във връзка с нелегално и/или неморално съдържание в този форум?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Този софтуер (в неговата немодифицирана форма) е произведен, публикуван и защитен от копиране от <a href="https://www.phpbb.com/">phpBB Limited</a>. Разпространява се под GNU General Public лиценз, версия 2 (GPL-2.0) и може да бъде свободно дистрибутиран. Посетете <a href="https://www.phpbb.com/about/">За phpBB</a> за повече информация.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Кой е написал тази форумна платформа?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Ако не сте избрали “Запомни ме” при вход, то форумът ще пази сесията Ви само за определено време. Това предотвратява използване на профила Ви от някой друг, който ползва същият компютър. За да останете постоянно в своя профил изберете “Запомни ме” по време на вход. Не Ви препоръчваме тази опция ако споделяте компютъра с други хора. Ако не виждате такава опция това значи, че администратора я е забранил.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Защо излизам автоматично?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Има няколко възможни причини за това. Първо, проверете дали сте въвели потребителското си име и парола правилно. Ако са правилни, моля свържете се с администратор за да се уверите, че не сте изгонен. Възможно е собственикът на сайта да е направил конфигурационна грешка, която трябва да отстрани.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'Възможно е администраторът да е деактивирал или изтрил профила Ви по някаква причина. Много форуми периодично изтриват потребители, които не публикуват мнения за дълго време за да намалят размера на базата данни. Ако това се е случило, опитайте да се регистрирате отново и да участвате активно в дискусиите.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Регистрирах се отдавна, но сега не мога да вляза?!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Защо не мога да вляза?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'Възможно е администраторът да е забранил регистрацията на нови потребители. Също така е възможно администраторът да е забранил достъпът от Вашият IP адрес или с потребителското Ви име. Свържете се с администратора за повече информация.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Защо не мога да се регистрирам?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA, или Children’s Online Privacy Protection Act от 1998, е закон в САЩ, който задължава сайтове, които потенциално могат да събират информация от малолетни лица под 13 годишна възраст да имат писменото разрешение на родител или някакъв друг вид легално съглашение, позволяващо събирането на лична информация от лицето под 13 годишна възраст. Ако не сте сигурни, че това е приложимо за Вас, като някой, който се опитва да се регистрира или за сайта, в който се опитвате да се регистрирате, моля потърсете правен съвет. Моля, имайте предвид, че phpBB Limited и собственикът на този форум не могат да предложат правни съвети по тази точка.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Какво е COPPA?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '“Изтрий всички бисквитки от форума” изтрива бисквитките създадени от phpBB, които Ви пазят сесията във форума. Бисквитките също така предоставят възможност функции като следене на новите мнения и теми да работят. Ако имате проблеми с влизането или излизането от форума изтриването на бисквитките би могло да реши проблема.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'Какво прави “Изтрий всички бисквитки от форума”?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Без паника! Въпреки, че не можем да възстановим паролата Ви, много лесно можем да Ви дадем нова. На страницата за вход натиснете връзката "Забравих си паролата". Следвайте инструкциите и би трябвало да можете да влезнете след това.<br />Ако въпреки това не успеете да влезете се свържете с администратор.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Забравих си паролата!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'Не е задължително, това зависи от решението на администратора на форума дали е нужна регистрация за да се публикуват мнения. Въпреки това, регистрацията ще Ви даде достъп до допълнителни функции, които не са достъпни за гостите, като аватари, лични съобщения, изпращане на емейли, участие в групи и др. Регистрацията отнема само момент и е препоръчително да се направи.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Първо, проверете дали сте въвели потребителското си име и парола правилно. Ако са правилни, то едно от следните две неща може да се е случило. Ако COPPA поддръжката е включена и сте избрали, че сте под 13 годишна възраст по време на регистрацията, то ще трябва да изпълните инструкциите, които сте получили. Някои форуми изискват активация на потребителското име, или от вас самия или от администратор. Тази информация ще Ви бъде предоставена по време на регистрация. Ако Ви е изпратен емейл, следвайте инструкциите в него. Ако не сте получили емейл, е възможно да сте предоставили грешен адрес или емейлът да е бил категоризиран като спам. Ако сте сигурни, че емейл адресът, който сте предоставили е верен, моля свържете се с администратор.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Регистрирах се, но не мога да вляза!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Защо трябва да се регистрирам?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Има няколко възможни причини за това: не сте регистриран и/или не сте влезли в профила си, администраторът е забранил личните съобщения за всички или само за Вас. Свържете се с администратора за повече информация.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Не мога да изпращам лични съобщения!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Съжаляваме да чуем това. Формата за изпращане на емейли от форума включва предпазни механизми, които следят потребителите, които изпращат такива съобщения, затова, моля изпратете на администратора копие на емейла, който сте получили. Много е важно да включите и хедърите, които съдържат пълните детайли на изпращача, за да може администраторът да предприеме действия.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Получих спам или обиден емейл от някой от този форум!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'Можете автоматично да изтривате лични съобщения от определен потребител като създадете съотвеното правило в Потребителския Контролен Панел. Ако получавате обидни лични съобщения от даден потребител можете да докладвате съобщението на модераторите, които имат право да забранят на потребителя да изпраща лични съобщения.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Получавам нежелани лични съобщения!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'Като натиснете връзката “Избутай темата”, която се показва след като натиснете бутона “Инструменти за темата” (иконка с гаечен ключ) в темата, която искате да избутате. Така ще “избутате” темата най-горе на първа страница във форума, в който се намира. Ако не виждате тази връзка, то избутването може да е забранено или времето между избутванията не е изминало. Можете да избутате темата като просто публикувате нов отговор в нея, но преди това се уверете, че това не е в разрез с правилата на форума.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Как да избутам темата ми?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'За да създадете нова тема във форум, натиснете бутона "Нова тема". За да отговорите на тема, натиснете бутона "Отговори". Може да е нужно да се регистрирате преди да можете да публикувате отговор или тема. Списък с вашите права във всеки форум е наличен най-долу на страницата с форумите. Например: Вие можете да публикувате теми в този форум, Вие можете да прикачвате файлове в този форум и т.н.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Как да създам нова тема или да публикувам отговор?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'Той Ви позволява да запазвате чернови, който могат да бъдат довършени и публикувани по-късно. За да заредите записана чернова, посетете Потребителския Контролен Панел.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'Какво прави бутона “Запази чернова” при публикуване на мнение/тема?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'Освен ако не сте администратор или модератор, можете да променяте или изтривате само собствените си мнения. Можете да промените мнението си като натиснете бутона "Промени мнението" на съответното мнение, понякога този бутон е активен само за определено време след като е било публикувано мнението. Ако някой е отговорил на мнението Ви, под него ще се появи мелък текст с броя пъти, които сте променяли мнението, както и датата и часа; този текст няма да се появи ако модератор или администратор променят мнението Ви, въпреки че могат да оставят коментар за причината за промяната на мнението Ви, ако преценят. Важно е да се отбележи, че обикновените потребители не могат да изтирват мненията си, ако някой им е отговорил.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Как да променя или изтрия мнение?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Някои форуми може да са ограничени до определени потребители или групи. За да разглеждате, четете, публикувате или извършвате други действия ще са Ви нужни специални права. Свържете се с модератор или администратор за да Ви дадат нужните права.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Защо нямам достъп до даден форум?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'Права за прикачване на файл се дават на ниво форум, група или потребител. Администраторът може да е забранил прикачването на файлове за форума, в който се опитвате да публикувате или само определени групи могат да прикачват файлове. Свържете се с администратора, ако не сте сигурни защо не можете да прикачвате файлове.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Защо не мога да прикача файл?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'Максималният брой възможни отговори се определя от администратора. Ако мислите, че Ви трябват повече от позволения брой възможни отговори, моля свържете се с администратора.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Защо не мога да добавя повече възможни отговори към анкетата?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Когато публикувате нова тема или променяте първото мнение на темата, изберете раздела “Създаване на анкета” под главната форма на мнението; ако не виждате този раздел, най-вероятно нямате права да създавате анкети. Въведете въпрос на анкетата и най-малко два възможни отговора в съответните полета, като се убедите, че всеки отговор е на отделен ред. Също така можете да избирате броя гласове, които потребителите могат да дават от полето “Брой гласове на потребител”, време, за което да е активна анкетата в дни (0 за винаги активна) и да настройвате възможността потребителите да променят гласа си.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Как да създам анкета?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Както и при мненията, анкетите могат да бъдат променяни само от автора, модератор или администратор. За да промените анкета, натиснете бутона "Промени мнението" на първото мнение в темата. Ако все още никой не е гласувал, можете да промените или изтриете възможен отговор, обаче, ако някой е гласувал, само модератор или администратор имат право да променят или изтрият възможния отговор. Така се предотвратява подмяната на гласове преди да е приключила анкетата.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Как да променя или изтрия анкета?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'Администраторът може да е решил, че мненията, които публикувате във форума се нуждаят от преглед преди да бъдат публикувани. Също така е възможно администратора да Ви е сложил в група с потребители, чиито мнения изискват одобрение преди да бъдат публикувани. Моля, свържете се с администратора за повече информация.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'Защо мнението ми трябва да бъде одобрено?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Ако администратора го е позволил, би трябвало да видите бутон за докладване до мнението, което искате да докладвате. Натискайки го, ще трябва да следвате указаните стъпки за да докладвате мнението.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Как мога да докладвам мнения на модератор?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'За да добавите подпис към мненията си, първо трябва да го създадете през Потребителския Контролен Панел. След като направите това, можете да изберете <em>Добави подпис</em> опцията при публикуване на мнение за да прикачите подписа си. Също така можете да добавяте подписа си по подразбиране към всички мнения като изберете съответния радио бутон в Потребителския Контролен Панел. Ако го направите, въпреки това ще можете да избирате дали подписът Ви да се прилага към индивидуални мнения като изберете съответната опция при публикуване.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Как да добавя подпис към мненията си?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'Всеки форум има свой собствен набор от правила. Ако сте нарушили, някое от тези правила, то можете да получите предупреждение. Важно е да се отбележи, че това е решение на администратора и phpBB Limited няма нищо общо с издадените предупреждения. Свържете се с администратора на форума, ако не сте сигурен за какво сте били предупредени.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Защо получих предупреждение?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'Вашата заявка е върнала твърде много резултати, които не могат да се обработят от сървъра. Използвайте “Разширено търсене” и бъдете по-специфични с ключовите думи, използвани при търсенето, както и във форумите, в които се търси.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'Защо търсенето ми връща празна страница!?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Въведете ключова дума в полето за търсене, което се намира горе дясно на главната страница, форумите и темите. Можете да търсите в дадена тема или форум, като ползвате полето за търсене, което се намира до бутоните за публикуване на тема или мнение, когато се намирате съответно във форум или тема. Разширеното търсене е достъпно от бутона “Разширено търсене”, който се намира в дясно от полето за търсене. В зависимост от стила на форума, местоположението и функциите на полето за търсене могат да се различават.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Как мога да търся във форум или форуми?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Последвайте връзката “Потребители” и след това “Намери потребител”.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Как да намеря даден потребител?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Най-вероятно търсената ключова фраза не е била конкретна и е съдържала твърде много общи термини, които не се индексират от phpBB. Бъдете по-специфични и използвайте настройките, които са достъпни в Разширеното търсене.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Защо търсенето ми не връща резултати?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'Собствените Ви мнения можете да намерите като последвате връзката “Виж собствените си мнения” в Потребителския панел или “Търси в потребителските мнения” в профила Ви или като изберете “Виж собствените си мнения” от менюто с Бързи връзки. За да намерите темите си, използвайте Разширеното търсене и попълнете различните настройки.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Как мога да намеря собствените си мнения и теми?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'Има два вида картинки, които могат да бъдат до потребителското Ви име, когато се разглеждат теми или мнения. Едната може да е изображение, асоциирано с вашия ранг, най-често във формата на звезди, квадратчета или точки, индикиращи колко мнения сте публикувал или Вашият статус във форума. Другата картинка, обикновено по-голяма, е известна като аватар и обикновено е уникална или персонална за всеки потребител.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'В Потребителския Контролен Панел, в раздел “Профил” можете да добавите аватар от един от следните четири типа: Gravatar, Галерия, Външен или да качите свой собствен. В зависимост от решението на администратора на форума, възможно е аватарите да са забранени или някои от типовете да не са налични. Ако не можете да ползвате аватар, свържете се с администратора.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Как да си сложа аватар?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'Какви са тези картинки до потребителското ми име?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Ако сте регистриран потребител, всичките Ви настройки се пазят в базата данни. За да ги промените, трябва да посетите Потребителския панел, това е връзка, която се намира в менюто, което се показва, след като кликнете на потребителското си име, намиращо се най-горе в дясно. Този панел ще Ви даде възможност да промените всички Ваши предпочитания и настройки.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Как да си променя настройките?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Само регистрираните потребители могат да изпращат емейли до други потребители през вградената емейл форма и то само ако администратора е разрешил тази функция. За да се предотврати злоупотреба, използването на тази функция от анонимни потребители е забранено.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Защо когато кликна на връзката за изпращане на емейл до потребител ме кара да влезна в профила си?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'От Потребителския панел, в раздел “Настройки на форума”, ще намерите опцията <em>Не показвай кога съм на линия</em>. Изберете <em>Да</em> и само администраторите, модераторите и Вие ще виждате потребителското си име в списъка с потребителите на линия. Ще имате статут на скрит потребител.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Как да скрия потребителското си име от списъка с потребителите на линия?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'Най вероятно администраторът не е инсталирал Вашият език или все още никой не е превел форума на Вашият език. Опитайте се да се свържете с администратора и попитайте дали може да бъде инсталиран езикът, който Ви трябва.',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'Езикът ми не е сред тези в списъка, от които мога да избера!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Ранговете, които се появяват под потребителското Ви име, показват броя на мненията, които сте публикували или идентифицират дадени потребители, например модератори или администратори. Обикновено, не можете директно да промените имената на ранговете, тъй като те се определят от администратора. Моля, не злоупотребявайте, като публикувате ненужни мнения само и само да увеличите ранга си. Повечето форуми не толерират това и модератор или администратор може да намали броят на мненията Ви.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Какъв е рангът ми и как да го променя?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Ако сте сигурни, че сте избрали правилната часова зона и времето все още не е правилно, тогава часовникът на сървъра най-вероятно е грешен. Моля, уведомете администратора за да поправи проблема.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Промених си часовата зона, но времето все още е грешно!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'Възможно е времената показани във форума да са от различна от вашата часова зона. Ако това е така, то отидете в Потребителския Контролен Панел и променете часовата си зона, спрямо това къде се намирате в момента. Имайте предвид, че смяната на часовата зона, както и повечето настройки са разрешени само за регистрирани потребители. Ако не сте се регистрирали, сега е времето да го направите.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'Времената не са правилни!',
));
