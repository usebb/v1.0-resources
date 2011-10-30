<?php

/*
	translated by buzz [fly-x@mail.ru]

	Copyright (C) 2003-2005 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/admin_English.php,v 1.43 2005/12/11 14:36:20 pc_freak Exp $
	
	This file is part of UseBB.
	
	UseBB is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.
	
	UseBB is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with UseBB; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

$lang['AdminLogin'] = 'Логин администратора';
$lang['AdminPasswordExplain'] = 'Из соображений безопасности вы должны ввести пароль для входа в Панель Администратора.'; // 'For security reasons, you must enter your account\'s password to login into the ACP.';

$lang['RunningBadACPModule'] = 'UseBB не может запустить этот модуль, потому что неправильны один или несколько параметров (отсутствует объект $usebb_module и/или неверен метод объекта run_module())'; //'UseBB can not run this module because one or more aspects are missing (no $usebb_module object found and/or missing run_module() object method).';

$lang['Category-main'] = 'Основное'; //'General';
$lang['Item-index'] = 'Панель Администратора'; //'ACP Index';
$lang['Item-version'] = 'Проверка версии'; //'Version Check';
$lang['Item-config'] = 'Основные настройки'; //'General Configuration';
$lang['Category-forums'] = 'Форумы'; //'Forums';
$lang['Item-categories'] = 'Категории'; //'Categories';
$lang['Item-forums'] = 'Форумы'; //'Forums';
$lang['Category-various'] = 'Другое'; //'Various';
$lang['Item-iplookup'] = 'Поиск IP адреса'; //'IP Address Lookup';
$lang['Item-sqltoolbox'] = 'SQL запрос'; //'SQL Toolbox';
$lang['Item-modules'] = 'Модули Панели Администратора'; //'ACP modules';
$lang['Category-members'] = 'Пользователи'; //'Members';
$lang['Item-members'] = 'Редактировать пользователей'; //'Edit Members';

$lang['IndexWelcome'] = 'Добро пожаловать в Панель Администратора вашего форума UseBB. Здесь вы можете контролировать все параметры форумов, редактировать пользователей и т.д.'; //'Welcome to the Admin Control Panel of your UseBB forum. From here you can control all aspects of your board, setting the configuration, control forums, members, etc.';
$lang['IndexSystemInfo'] = 'Системная информация'; //'System Info';
$lang['IndexUseBBVersion'] = 'Версия UseBB'; //'UseBB version';
$lang['IndexPHPVersion'] = 'Версия PHP'; //'PHP version';
$lang['IndexSQLServer'] = 'Драйвер сервера SQL'; //'SQL server driver';
$lang['IndexHTTPServer'] = 'HTTP сервер'; //'HTTP server';
$lang['IndexOS'] = 'Операционная система'; //'Operating system';
$lang['IndexLinks'] = 'Ссылки'; //'Links';

$lang['VersionFailed'] = 'Форум не может определить последнюю версию (%s отключено). Пожалуйста, чаще проверяйте %s, чтобы убедиться в наличии  последней.'; //'The forum could not determine the latest version (%s disabled). Please often check %s to make sure you have the latest one.';
$lang['VersionLatestVersion'] = 'Этот форум работает на движке UseBB %s - последняя стабильная версия.'; //'This forum is powered by UseBB %s which is the latest stable version.';
$lang['VersionNeedUpdate'] = 'Ваша версия: %s. Этот форум нуждается в обновлении до версии %s. Обновление необходимо для сохранения защищённости от хакерских атак и исправления ошибок! Пожалуйста, перейдите на страницу %s для того, чтобы скачать последюю версию.'; //'This forum running UseBB %s needs to be updated to version %s to stay secure and bug free! Visit %s to download the latest version.';
$lang['VersionBewareDevVersions'] = 'Этот форум работает на %s, однако %s всё ещё последняя стабильная версия. Остерегайтесь проблем с совместимостью, которые могут возникнуть с версией, находящейся в разработке.'; //'This forum is running %s however %s is still the latest stable version. Beware of the problems and uncompatibilities that might exist with development versions.';

$lang['ConfigInfo'] = 'На этой странице вы можете редактировать все настройки вашего UseBB форума. Будьте осторожны изменяя настройки базы данных. Поля, маркированные звёздочкой (*), обязательны для заполнения.'; //'On this page you can edit all settings of your UseBB forum. Be careful altering the database configuration. Fields marked with an asterisk (*) are required.';
$lang['ConfigSet'] = 'Новые настройки вступили в силу. Изменения можно будет увидеть после перезагрузки страницы.'; //'The new configuration has been set. It will be visible upon loading a new page.';
$lang['ConfigMissingFields'] = 'Некоторые поля были не заполнены или неверны (например, вместо целочисленного значения был текст). ПожалуйстаЮ проверьте следующие поля:'; //'Some fields were missing or incorrect (i.e. text were a number was expected). Please check the following fields:';
$lang['ConfigBoard-type'] = 'Тип'; //'Type';
$lang['ConfigBoard-server'] = 'Сервер'; //'Server';
$lang['ConfigBoard-username'] = 'Имя пользователя'; //'Username';
$lang['ConfigBoard-passwd'] = 'Пароль'; //'Password';
$lang['ConfigBoard-dbname'] = 'Название БД'; //'Database name';
$lang['ConfigBoard-prefix'] = 'Префикс таблиц в БД'; //'Table prefix';
$lang['ConfigBoardSection-general'] = 'Основные настройки доски объявлений'; //'General board';
$lang['ConfigBoardSection-cookies'] = 'Cookies';
$lang['ConfigBoardSection-sessions'] = 'Сессии'; //'Sessions';
$lang['ConfigBoardSection-page_counts'] = 'Элементов на странице'; //'Page counts';
$lang['ConfigBoardSection-date_time'] = 'Дата и время'; //'Dates &amp; Times';
$lang['ConfigBoardSection-database'] = 'Настройки базы данных'; //'Database configuration';
$lang['ConfigBoardSection-advanced'] = 'Расширенные настройки'; //'Advanced settings';
$lang['ConfigBoardSection-email'] = 'E-mail';
$lang['ConfigBoardSection-additional'] = 'Дополнительные возможности'; //'Additional features';
$lang['ConfigBoardSection-user_rights'] = 'Права пользователя'; //'User rights';
$lang['ConfigBoardSection-layout'] = 'Настройки внешнего вида'; //'Layout settings';
$lang['ConfigBoard-admin_email'] = 'E-mail администратора'; //'Admin e-mail address';
$lang['ConfigBoard-board_descr'] = 'Описание'; //'Board description';
$lang['ConfigBoard-board_keywords'] = 'Ключевые слова (разделенные запятой)'; //'Board keywords (comma seperated)';
$lang['ConfigBoard-board_name'] = 'Название'; //'Board name';
$lang['ConfigBoard-date_format'] = 'Формат даты'; //'Date format';
$lang['ConfigBoard-language'] = 'Язык по умолчанию'; //'Default language';
$lang['ConfigBoard-session_name'] = 'Название сессии'; //'Session name';
$lang['ConfigBoard-template'] = 'Шаблон по умолчанию'; //'Default template';
$lang['ConfigBoard-active_topics_count'] = 'Показывать x активных тем'; //'Active topics count';
$lang['ConfigBoard-avatars_force_width'] = 'Установить ширину аватара (в пикселях)'; //'Force avatars width (px)';
$lang['ConfigBoard-avatars_force_height'] = 'Установить высоту аватара (в пикселях)'; //'Force avatars height (px)';
$lang['ConfigBoard-debug'] = 'Режим отладки'; //'Debug mode';
$lang['ConfigBoard-email_view_level'] = 'Необходимый уровень для того, чтобы увидеть e-mail'; //'E-mail view level';
$lang['ConfigBoard-flood_interval'] = 'Пауза между публикациями сообщений (в секундах)'; //'Flood interval (seconds)';
$lang['ConfigBoard-members_per_page'] = 'Пользователей на странице'; //'Members per page';
$lang['ConfigBoard-online_min_updated'] = 'Показывать пользователей on-line за последние x минут'; //'Online users during last minutes';
$lang['ConfigBoard-output_compression'] = 'Сжатие'; //'Output compression';
$lang['ConfigBoard-passwd_min_length'] = 'Минимальная длина пароля'; //'Password minimum length';
$lang['ConfigBoard-posts_per_page'] = 'Сообщений на странице'; //'Posts per page';
$lang['ConfigBoard-rss_items_count'] = 'Количество записей RSS'; //'RSS items count';
$lang['ConfigBoard-search_limit_results'] = 'Ограничить результаты поиска до'; //'Limit search results to x items';
$lang['ConfigBoard-search_nonindex_words_min_length'] = 'Минимальная длина строки поиска'; //'Search keyword minimum length';
$lang['ConfigBoard-session_max_lifetime'] = 'Максимальное время существования сессии (в секундах)'; //'Maximum session lifetime (seconds)';
$lang['ConfigBoard-show_edited_message_timeout'] = 'Показывать пометку, что сообщение изменено, только через x секунд после публикации'; //'Show edited message note only when edited after x seconds after posting';
$lang['ConfigBoard-topicreview_posts'] = 'Показывать x сообщений темы в ответе'; //'Topic review post count';
$lang['ConfigBoard-topics_per_page'] = 'Тем на странице'; //'Topics per page';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = 'Минимальный уровень для просмотров детального списка пользователей on-line'; //'Minimum level for viewing detailed online list';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = 'Минимальный уровень для просмотра поля со статистикой'; //'Minimum level for viewing statistics box';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = 'Минимальный уровень для просмотра скрытого e-mail адреса'; //'Minimum level for viewing hidden e-mail addresses';
$lang['ConfigBoard-view_memberlist_min_level'] = 'Минимальный уровень для просмотра списка пользователей'; //'Minimum level for viewing member list';
$lang['ConfigBoard-view_stafflist_min_level'] = 'Минимальный уровень для просмотра списка модераторов и администраторов'; //'Minimum level for viewing staff list';
$lang['ConfigBoard-view_stats_min_level'] = 'Минимальный уровень для просмотра страницы статистики'; //'Minimum level for viewing statistics page';
$lang['ConfigBoard-view_contactadmin_min_level'] = 'Минимальный уровень для просмотра контактов администратора'; //'Minimum level for viewing contact admin link';
$lang['ConfigBoard-allow_multi_sess'] = 'Позволять несколько сессий на один IP-адрес'; //'Allow multiple sessions per IP';
$lang['ConfigBoard-board_closed'] = 'Закрыть доску объявлений'; //'Close the board';
$lang['ConfigBoard-cookie_secure'] = 'Защищённые cookies (для протокола HTTPS)'; //'Secure cookies (for HTTPS)';
$lang['ConfigBoard-disable_info_emails'] = 'Отключить рассылку информационных писем'; //'Disable informational e-mails';
$lang['ConfigBoard-dst'] = 'Переход на летнее/зимнее время'; //'Daylight saving times';
$lang['ConfigBoard-enable_contactadmin'] = 'Разрешить ссылку на контакты администратора'; //'Enable contact admin link';
$lang['ConfigBoard-enable_detailed_online_list'] = 'Разрешить расширенный список пользователей on-line'; //'Enable detailed online list';
$lang['ConfigBoard-enable_forum_stats_box'] = 'Разрешить поле со статистикой форума'; //'Enable forum statistics box';
$lang['ConfigBoard-enable_memberlist'] = 'Разрешить список пользователей'; //'Enable member list';
$lang['ConfigBoard-enable_quickreply'] = 'Разрешить быстрый ответ'; //'Enable quick reply';
$lang['ConfigBoard-enable_rss'] = 'Разрешить RSS'; //'Enable RSS feed';
$lang['ConfigBoard-enable_stafflist'] = 'Разрешить список модераторов и администраторов'; //'Enable staff list';
$lang['ConfigBoard-enable_stats'] = 'Разрешить страницу со статистикой'; //'Enable statistics page';
$lang['ConfigBoard-friendly_urls'] = 'Разрешить удобочитаемые адреса URL'; //'Enable friendly URL\'s';
$lang['ConfigBoard-friendly_urls-info'] = 'Требуется сервер Apache и mod_rewrite.'; //'Requires Apache and mod_rewrite.';
$lang['ConfigBoard-guests_can_access_board'] = 'Незарегистрированные пользователи могут входить на доску объявлений'; //'Guests can access the board';
$lang['ConfigBoard-guests_can_view_profiles'] = 'Незарегистрированные пользователи могут просматривать профили пользователей'; //'Guests can view member profiles';
$lang['ConfigBoard-hide_avatars'] = 'Скрыть всех аватаров'; //'Hide all avatars';
$lang['ConfigBoard-hide_signatures'] = 'Скрыть все подписи'; //'Hide all signatures';
$lang['ConfigBoard-hide_userinfo'] = 'Скрыть информацию о пользователе'; //'Hide user information';
$lang['ConfigBoard-rel_nofollow'] = 'Запретить поисковой машине Google индексировать ссылки BBCode'; //'Enable Google\'s nofollow for BBCode links';
$lang['ConfigBoard-return_to_topic_after_posting'] = 'Вернуться к теме после публикации'; //'Return to the topic after posting';
$lang['ConfigBoard-sig_allow_bbcode'] = 'Разрешить BBCode в подписи'; //'Enable BBCode in signatures';
$lang['ConfigBoard-sig_allow_smilies'] = 'Разрешить смайлы в подписи'; //'Enable smilies in signatures';
$lang['ConfigBoard-sig_max_length'] = 'Максимальная длина подписи'; //'Max signature length';
$lang['ConfigBoard-single_forum_mode'] = 'Режим \'Один форум на доске объявлений\' (когда применимо)'; //'Single forum mode (when applicable)';
$lang['ConfigBoard-target_blank'] = 'Ссылки BBCode открываются в новом окне'; //'BBCode links open new window';
$lang['ConfigBoard-users_must_activate'] = 'Пользователи должны активизироваться через e-mail'; //'Users must activate via e-mail';
$lang['ConfigBoard-board_closed_reason'] = 'Объяснение закрытия доски объявлений'; //'Board closed reason';
$lang['ConfigBoard-board_url'] = 'URL-адрес (оставьте пустым для авто-определения)'; //'Board URL (empty for auto-detect)';
$lang['ConfigBoard-cookie_domain'] = 'Домен cookie'; //'Cookie domain';
$lang['ConfigBoard-cookie_path'] = 'Путь cookie'; //'Cookie path';
$lang['ConfigBoard-session_save_path'] = 'Путь для файлов сессии'; //'Session save path';
$lang['ConfigBoard-exclude_forums_active_topics'] = 'Исключать форумы из активных тем'; //'Exclude forums from active topics';
$lang['ConfigBoard-exclude_forums_rss'] = 'Исключать форумы из RSS'; //'Exclude forums from RSS feed';
$lang['ConfigBoard-exclude_forums_stats'] = 'Исключать форумы из страницы статистики'; //'Exclude forums from statistics page';
$lang['ConfigBoard-timezone'] = 'Временная зона'; //'Timezone';
$lang['ConfigBoard-debug0'] = 'Отключено'; //'Disabled';
$lang['ConfigBoard-debug1'] = 'Простая отладочная информация'; //'Simple debug information';
$lang['ConfigBoard-debug2'] = 'Расширенная отладочная информация'; //'Extended debug information';
$lang['ConfigBoard-email_view_level0'] = 'Скрыть все адреса e-mail'; //'Hide all e-mail addresses';
$lang['ConfigBoard-email_view_level1'] = 'Использовать форму отправки сообщений'; //'Enable e-mail form';
$lang['ConfigBoard-email_view_level2'] = 'Показывать с защитой от спама'; //'Show spam proof';
$lang['ConfigBoard-email_view_level3'] = 'Показывать как есть'; //'Show raw';
$lang['ConfigBoard-output_compression0'] = 'Отключено'; //'Disabled';
$lang['ConfigBoard-output_compression1'] = 'Сжимать HTML'; //'Compress HTML';
$lang['ConfigBoard-output_compression2'] = 'Разрешить gzip-cжатие'; //'Enable gzip';
$lang['ConfigBoard-output_compression3'] = 'Сжимать HTML и использовать gzip-cжатие'; //'Compress HTML and enable gzip';
$lang['ConfigBoard-level0'] = 'Гости'; //'Guests';
$lang['ConfigBoard-level1'] = 'Пользователи'; //'Members';
$lang['ConfigBoard-level2'] = 'Модераторы'; //'Moderators';
$lang['ConfigBoard-level3'] = 'Администраторы'; //'Administrators';
$lang['ConfigBoard-enable_acp_modules'] = 'Разрешить модули расширения Панели Администратора'; //'Enable ACP modules';
$lang['ConfigBoard-disable_registrations'] = 'Отключить регистрацию пользователей'; //'Disable user registrations';
$lang['ConfigBoard-disable_registrations_reason'] = 'Объяснение отключения регистрации пользователей'; //'Disable user registrations reason';

$lang['CategoriesInfo'] = 'Этот раздел позволяет вам контролировать различные категории, которые есть на вашей доске объявлений.'; //'This section gives you the control over the various categories that exist at your board.';
$lang['CategoriesAddNewCat'] = 'Добавить новую категорию'; //'Add a new category';
$lang['CategoriesAdjustSortIDs'] = 'Установить приоритет сортировки автоматически'; //'Adjust the sort ID\'s';
$lang['CategoriesSortAutomatically'] = 'Сортировать категории автоматически'; //'Sort categories automatically';
$lang['CategoriesNoCatsExist'] = 'Эта доска объявлений не содержит сейчас не одной категории'; //'This board does not contain any categories yet.';
$lang['CategoriesCatName'] = 'Название категории'; //'Category name';
$lang['CategoriesSortID'] = 'Приоритет сортировки'; //'Sort ID';
$lang['CategoriesMissingFields'] = 'Некоторые требуемые поля были неверно заполнены. Пожалуйста, будьте внимательны.'; //'Some required fields were missing. Please fill them in correctly.';
$lang['CategoriesSortChangesApplied'] = 'Ваши изменения приоритетов сортировки выполнено.'; //'Your changes to the sort ID\'s have been applied.';
$lang['CategoriesConfirmCatDelete'] = 'Подтверждение удаление категории'; //'Confirm category deletion';
$lang['CategoriesConfirmCatDeleteContent'] = 'Вы уверены, что хотите удалить категорию %s? Это действие необратимо!'; //'Are you sure you want to delete the category %s? This action is irreversible!';
$lang['CategoriesMoveContents'] = 'Переместить содержание категории в %s'; //'Move the contents of the category to %s';
$lang['CategoriesDeleteContents'] = 'Удалить содержание'; //'Delete the contents';
$lang['CategoriesEditingCat'] = 'Редактирование категории %s'; //'Editing category %s';

$lang['ForumsInfo'] = 'Этот раздел позволяет вам контролировать различные форумы, которые есть на вашей доске объявлений.'; //'This section gives you the control over the various forums that exist at your board.';
$lang['ForumsAddNewForum'] = 'Добавить новый форум'; //'Add a new forum';
$lang['ForumsAdjustSortIDs'] = 'Установить приоритет сортировки автоматически'; //'Adjust the sort ID\'s';
$lang['ForumsSortAutomatically'] = 'Сортировать форумы автоматически';
$lang['ForumsNoForumsExist'] = 'Эта доска объявлений не содержит сейчас ни одного форума'; //'This board does not contain any forums yet.';
$lang['ForumsForumName'] = 'Название форума'; //'Forum name';
$lang['ForumsCatName'] = 'Категория'; //'Parent category';
$lang['ForumsDescription'] = 'Описание'; //'Description';
$lang['ForumsStatus'] = 'Статус'; //'Status';
$lang['ForumsStatusOpen'] = 'Открыть'; //'Open';
$lang['ForumsAutoLock'] = 'Автоматически закрывать темы после x ответов'; //'Auto lock topics after x replies';
$lang['ForumsIncreasePostCount'] = 'Увеличивать количество публикаций пользователя'; //'Increase users\' post count';
$lang['ForumsModerators'] = 'Модераторы'; //'Moderators';
$lang['ForumsModeratorsExplain'] = 'Имена пользователей (логины), разделённые запятыми. Регистро-зависимые.'; //'Usernames (not displayed names), seperated by commas. Case-insensitive.';
$lang['ForumsModeratorsUnknown'] = 'Неизвестный(е) пользователь(и): %s.'; //'Unknown member(s): %s.';
$lang['ForumsHideModsList'] = 'Скрыть список модераторов'; //'Hide moderator list';
$lang['ForumsSortID'] = $lang['CategoriesSortID']; //'Sort ID';
$lang['ForumsMissingFields'] = $lang['CategoriesMissingFields']; //'Some required fields were missing. Please fill them in correctly.';
$lang['ForumsSortChangesApplied'] = $lang['CategoriesSortChangesApplied']; //'Your changes to the sort ID\'s have been applied.';
$lang['ForumsConfirmForumDelete'] = 'Подтверждение удаление форума'; //'Confirm forum deletion';
$lang['ForumsConfirmForumDeleteContent'] = 'Вы уверены, что хотите удалить форум %s? Это действие необратимо!'; //'Are you sure you want to delete the forum %s? This action is irreversible!';
$lang['ForumsMoveContents'] = 'Переместить содержание на форум %s'; //'Move the contents of the forum to %s';
$lang['ForumsMoveModerators'] = 'С содержанием переместить и модераторов'; //'When moving contents, also move moderators.';
$lang['ForumsDeleteContents'] = 'Удалить содержание'; //'Delete the contents';
$lang['ForumsEditingForum'] = 'Редактирование форума %s'; //'Editing forum %s';
$lang['ForumsGeneral'] = 'Основные настройки'; //'General settings';
$lang['ForumsAuth'] = 'Настройки авторизации'; //'Authorization settings';
$lang['ForumsAuthNote'] = 'Настройки не зависят друг от друга!'; //'Settings do not inherit each other!';
$lang['Forums-level0'] = 'Гости'; //'Guests';
$lang['Forums-level1'] = 'Пользователи'; //'Members';
$lang['Forums-level2'] = 'Модераторы'; //'Moderators';
$lang['Forums-level3'] = 'Администраторы'; //'Administrators';
$lang['Forums-auth0'] = 'Смотреть форум'; //'View forum';
$lang['Forums-auth1'] = 'Читать темы'; //'Read topics';
$lang['Forums-auth2'] = 'Опубликовать новые темы'; //'Post new topics';
$lang['Forums-auth3'] = 'Ответить на темы'; //'Reply to topics';
$lang['Forums-auth4'] = 'Редактировать сообщения других пользователей'; //'Edit other\'s posts';
$lang['Forums-auth5'] = 'Переместить темы'; //'Move topics';
$lang['Forums-auth6'] = 'Удалить темы и сообщения'; //'Delete topics and posts';
$lang['Forums-auth7'] = 'Закрыть темы'; //'Lock topics';
$lang['Forums-auth8'] = 'Важные темы'; //'Sticky topics';
$lang['Forums-auth9'] = 'Публиковать сообщения в виде HTML (потенциальная опасность)'; //'Post as HTML (dangerous)';

$lang['IPLookupSearchHostname'] = 'Искать название хоста'; //'Search hostname';
$lang['IPLookupSearchUsernames'] = 'Искать имена пользователей'; //'Search username(s)';
$lang['IPLookupResult'] = 'Хост, соответствующий IP-адресу %s: %s.'; //'The hostname corresponding to the IP address %s is %s.';
$lang['IPLookupNotFound'] = 'Хосты, соответствующие %s не могут быть найдены.'; //'No corresponding hostname for %s could be found.';
$lang['IPLookupUsernamesSingular'] = 'Пользователь %s использовал %s для публикации сообщений.'; //'The username %s was used by %s to post messages.';
$lang['IPLookupUsernamesPlural'] = '%d имён пользователей %s было использовано для публикации сообщений.'; //'The %d usernames %s were used by %s to post messages.';
$lang['IPLookupUsernamesNotFound'] = 'Имена пользователей для %s не могут быть найдены'; //'No usernames for %s could be found.';

$lang['SQLToolboxWarningTitle'] = 'Важное предупреждение!'; //'Important Warning!';
$lang['SQLToolboxWarningContent'] = 'Будьте очень внимательны, используя форму запросов к базе данных. Выполнение инструкций ALTER, DELETE, TRUNCATE или других может необратимо повредить ваш форум! Применяйте её только в том случае, если вы точно знаете что делать.'; //'Be very careful using the raw query tool. Executing ALTER, DELETE, TRUNCATE or other types of queries may irreversibly damage your forum! Only use this when you know what you are doing.';
$lang['SQLToolboxExecuteQuery'] = 'Выполнить запрос'; //'Execute Query';
$lang['SQLToolboxExecuteQueryInfo'] = 'Введите SQL запрос для выполнения. Результат будет показан в текстовом поле через секунду.'; //'Enter an SQL query to execute. Eventually, results will be shown in a second text box.';
$lang['SQLToolboxExecute'] = 'Выполнить'; //'Execute';
$lang['SQLToolboxExecutedSuccessfully'] = 'Запрос выполнен успешно.'; //'Query executed successfully.';
$lang['SQLToolboxMaintenance'] = 'Поддержка'; //'Maintenance';
$lang['SQLToolboxMaintenanceInfo'] = 'Эти функции оптимизируют (и восстанавливают) таблицы, используемые UseBB. Оптимизация таблиц достаточно часто рекомендовано для досок объявлений, где опубликовано большое количество сообщений.'; //'These functions optimize (and repair) the SQL tables used by UseBB. Optimizing the tables often enough is recommended for larger boards.';
$lang['SQLToolboxRepairTables'] = 'Восстановить таблицы'; //'Repair tables';
$lang['SQLToolboxOptimizeTables'] = 'Оптимизировать таблицы'; //'Optimize tables';
$lang['SQLToolboxMaintenanceNote'] = 'Замечание: потерянная информация в базе данных не восстанавливается.'; //'Note: this does not restore any lost data in the database.';

$lang['ModulesInfo'] = 'Модули Панели Администратора позволяют вам расширить встроенные возможности Панели Администратора или добавить расширения, сделанные программистами, не входящими в команду UseBB. Вы можете найти модули Панели Администратора на сайте %s.'; //'ACP modules able you to extend the ACP with your own features or features made by 3rd party programmers. Modules can be found via the UseBB website: %s.';
$lang['ModulesLongName'] = 'Длинное имя'; //'Long name';
$lang['ModulesShortName'] = 'Короткое имя'; //'Short name';
$lang['ModulesCategory'] = 'Категория'; //'Category';
$lang['ModulesFilename'] = 'Файл'; //'Filename';
$lang['ModulesDeleteNotPermitted'] = 'Не разрешено'; //'Not permitted';
$lang['ModulesDisabled'] = 'Модули Панели Администратора были запрещены в настройках доски объявлений.'; //'ACP modules have been disabled in the board configuration.';
$lang['ModulesNoneAvailable'] = 'Ни один модуль не найден.'; //'No modules are available at this time.';
$lang['ModulesUpload'] = 'Загрузить модуль'; //'Upload module';
$lang['ModulesUploadInfo'] = 'Введите путь к файлу модуля Панели Администратора для его загрузки.'; //'Enter a local filename of a UseBB ACP module to upload it.';
$lang['ModulesUploadDuplicateModule'] = 'Файл %s уже существует. Пожалуйста, сначала удалите его удалите.'; //'A module under the filename %s already exists. Please remove it first.';
$lang['ModulesUploadNoValidModule'] = 'Файл %s - это не модуль UseBB'; //'The file %s is not a valid UseBB module.';
$lang['ModulesUploadFailed'] = 'Невозможно установить модуль %s. Попытка копирования не удалась.'; //'Could not install the module %s. Copying failed.';
$lang['ModulesUploadDisabled'] = 'Каталог модулей UseBB не имеет прав на запись. Закачка невозможна. Для включения этой функции разрешите запись в каталог %s (попробуйте команду chmod 777).'; //'The module directory is not writable. Uploading has been disabled. To enable, make the directory %s writable by the webserver (try chmod 777).';
$lang['ModulesConfirmModuleDelete'] = 'Подтверждение удаления модуля'; //'Confirm module deletion';
$lang['ModulesConfirmModuleDeleteInfo'] = 'Вы уверены, что хотите удалить модуль %s (%s)?'; //'Are you sure you want to delete the module %s (%s)?';

$lang['MembersSearchMember'] = 'Искать пользователя'; //'Search member';
$lang['MembersSearchMemberInfo'] = 'Введите имя пользователя (логин, публичное имя) или его часть для редактирования.'; //'Enter a (part of a) username or displayed name to edit.';
$lang['MembersSearchMemberExplain'] = 'Имя пользователя (логин) или публичное имя'; //'Username or displayed name';
$lang['MembersSearchMemberNotFound'] = 'Нет пользователей с именем %s.'; //'No members with username or displayed name %s found.';
$lang['MembersSearchMemberList'] = 'Были найдены следующие пользователи'; //'The following members were found';
$lang['MembersEditingMember'] = 'Редактирование пользователя %s'; //'Editing member %s';
$lang['MembersEditingMemberInfo'] = 'Обновите данные пользователя и отправьте форму. Поля, помеченные звёздочкой (*) обязательны для заполнения.'; //'Update the user\'s info and submit the form. Fields marked with an asterisk (*) are required.';
$lang['MembersEditingMemberUsernameExists'] = 'Имя пользователя %s уже существует.'; //'The username %s already exists as a username or displayed name.';
$lang['MembersEditingMemberDisplayedNameExists'] = 'Имя пользователя %s уже существует.'; //'The displayed name %s already exists as a username or displayed name.';
$lang['MembersEditingMemberBanned'] = 'Запрещён'; //'Banned';
$lang['MembersEditingMemberBannedReason'] = 'Объяснение запрещения'; //'Reason for ban';
$lang['MembersEditingMemberCantChangeOwnLevel'] = 'Вы не можете изменить ваш уровень.'; //'You can\'t change your own level.';
$lang['MembersEditingMemberCantBanSelf'] = 'Вы не можете запретить сами себя.'; //'You can\'t ban yourself.';

?>
