<?php

/*
	Copyright (C) 2003-2006 UseBB Team
	http://www.usebb.net
	
	File created by Anton Vlasov aka Druidvav <druidvav@gmail.com> [www.druidvav.info]
	
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

$lang['AdminLogin'] = 'Вход для администратора';
$lang['AdminPasswordExplain'] = 'Из соображений безопасности мы просим Вас ввести пароль от своей учётной записи для входа в Администрирование.';

$lang['RunningBadACPModule'] = 'UseBB не может активировать этот модуль. (не существует объекта $usebb_module и/или у него отсутствует метод run_module() ).';

$lang['Category-main'] = 'Общее';
$lang['Category-forums'] = 'Форумы';
$lang['Category-various'] = 'Разное';
$lang['Category-members'] = 'Пользователи';
$lang['Category-pruning'] = 'Очистка';
$lang['Category-security'] = 'Безопасность';
$lang['Item-categories'] = 'Категории';
$lang['Item-index'] = 'Администрирование';
$lang['Item-version'] = 'Проверка обновления';
$lang['Item-config'] = 'Конфигурация';
$lang['Item-forums'] = 'Форумы';
$lang['Item-iplookup'] = 'Поиск IP адреса';
$lang['Item-sqltoolbox'] = 'SQL Запрос';
$lang['Item-modules'] = 'Модули';
$lang['Item-members'] = 'Управление';
$lang['Item-delete_members'] = 'Удаление';
$lang['Item-register_members'] = 'Регистрация';
$lang['Item-activate_members'] = 'Активация';
$lang['Item-prune_forums'] = 'Очистка форумов';
$lang['Item-prune_members'] = 'Очистка пользователей';
$lang['Item-dnsbl'] = 'Блокировки DNSBL';
$lang['Item-badwords'] = 'Фильтр слов';
$lang['Item-mass_email'] = 'Массовые рассылки e-mail';
$lang['Item-bans'] = 'Управление блокировками';

$lang['IndexWelcome'] = 'Добро пожаловать в зону администрирора форума. Здесь вы можете контролировать все его аспекты: изменять настройки, добавлять и удалять форумы, пользователей и прочее.';
$lang['IndexSystemInfo'] = 'Системная информация';
$lang['IndexUseBBVersion'] = 'Версия UseBB';
$lang['IndexPHPVersion'] = 'Версия PHP';
$lang['IndexSQLServer'] = 'Драйвер сервера SQL';
$lang['IndexHTTPServer'] = 'Сервер HTTP';
$lang['IndexOS'] = 'Операционная система';
$lang['IndexLinks'] = 'Ссылки';
$lang['IndexServerLoad'] = 'Загрузка сервера';
$lang['IndexUnactiveMembers'] = 'Неактивные пользователи';
$lang['IndexNoUnactiveMembers'] = 'Нет пользователей ожидающих активации.';
$lang['IndexOneUnactiveMember'] = '1 пользователь ожидает активации.';
$lang['IndexMoreUnactiveMembers'] = '%d пользователей ожидают активации.';
$lang['IndexWarning'] = 'Внимание!';
$lang['IndexUnwritableConfig'] = 'В данный момент php не может записывать в %s. Чтобы сделать файл записываемым измените его права с помощью FTP-клиента или примените к нему операцию chmod 0777. В случае проблем свяжитесь с администратором вашего сервера.';

$lang['VersionFailed'] = 'Форум не может определить последнюю версию (%s - выключено). Посещайте %s чтобы следить за появлениями новых версий.';
$lang['VersionLatestVersionTitle'] = 'Это последняя версия';
$lang['VersionLatestVersion'] = 'Этот форум работает на последней стабильной версии UseBB - %s.';
$lang['VersionNeedUpdateTitle'] = 'Доступна новая версия!';
$lang['VersionNeedUpdate'] = 'Этот форум работает на версии UseBB %s и нуждается в обновлении до версии %s! Посетите %s, чтобы скачать последнюю версию.';
$lang['VersionBewareDevVersionsTitle'] = 'Версия для разработчиков';
$lang['VersionBewareDevVersions'] = 'Этот форум работает на версии %s, но последней стабильной версией является %s. Обратите внимание на возможные сбои в работе версий для разработчиков.';

$lang['ConfigInfo'] = 'На этой странице Вы можете изменять настройки своего форума. Будьте внимательны при изменении настроек базы данных. Поля помеченные звёздочкой (*) являются обязательными.';
$lang['ConfigSet'] = 'Настройки установлены и вступят в силу при следующей загрузке страницы.';
$lang['ConfigMissingFields'] = 'Следующие поля не заполнены или заполнены неверно:';
$lang['ConfigBoard-type'] = 'Тип';
$lang['ConfigBoard-server'] = 'Сервер';
$lang['ConfigBoard-username'] = 'Имя пользователя';
$lang['ConfigBoard-passwd'] = 'Пароль';
$lang['ConfigBoard-dbname'] = 'База данных';
$lang['ConfigBoard-prefix'] = 'Префикс таблиц';
$lang['ConfigBoardSection-general'] = 'Общие настройки';
$lang['ConfigBoardSection-cookies'] = 'Cookie';
$lang['ConfigBoardSection-cookies-info'] = 'Оставьте поле пустым для авто-определения.';
$lang['ConfigBoardSection-sessions'] = 'Сессии';
$lang['ConfigBoardSection-page_counts'] = 'Количества';
$lang['ConfigBoardSection-date_time'] = 'Дата и время';
$lang['ConfigBoardSection-database'] = 'База данных';
$lang['ConfigBoardSection-database-info'] = 'Изменяйте только если полностью уверены, что эти настройки сразу заработают.';
$lang['ConfigBoardSection-advanced'] = 'Детальные настройки';
$lang['ConfigBoardSection-email'] = 'E-mail';
$lang['ConfigBoardSection-additional'] = 'Дополнительные возможности';
$lang['ConfigBoardSection-user_rights'] = 'Права';
$lang['ConfigBoardSection-min_levels'] = 'Минимальные уровни доступа';
$lang['ConfigBoardSection-min_levels-info'] = 'Настройка минимальныъ уровней доступа к различным элементам.';
$lang['ConfigBoardSection-layout'] = 'Внешний вид';
$lang['ConfigBoardSection-security'] = 'Безопасность';
$lang['ConfigBoard-admin_email'] = 'E-mail администратора';
$lang['ConfigBoard-board_descr'] = 'Описание форума';
$lang['ConfigBoard-board_keywords'] = 'Ключевые слова';
$lang['ConfigBoard-board_keywords-info'] = 'Разделяйте запятыми.';
$lang['ConfigBoard-board_name'] = 'Заголовок форума';
$lang['ConfigBoard-date_format'] = 'Формат даты';
$lang['ConfigBoard-date_format-info'] = 'Синтаксис аналогичен функции date() в PHP.';
$lang['ConfigBoard-language'] = 'Язык по умолчанию';
$lang['ConfigBoard-session_name'] = 'Имя сессии';
$lang['ConfigBoard-session_name-info'] = 'Только латиница и цифры, без пробелов. Должно содержать хотя бы одну букву.';
$lang['ConfigBoard-template'] = 'Шаблон по умолчанию';
$lang['ConfigBoard-active_topics_count'] = 'Активных тем';
$lang['ConfigBoard-avatars_force_height'] = 'Высота аватар (px)';
$lang['ConfigBoard-avatars_force_width'] = 'Ширина аватар (px)';
$lang['ConfigBoard-avatars_force_width-info'] = 'Оставьте пустым или введите ноль, чтобы выключить ограничение.';
$lang['ConfigBoard-debug'] = 'Режим отладки';
$lang['ConfigBoard-email_view_level'] = 'Обработка E-mail';
$lang['ConfigBoard-flood_interval'] = 'Интервал защиты от флуда (секунды)';
$lang['ConfigBoard-members_per_page'] = 'Пользователей на странице';
$lang['ConfigBoard-online_min_updated'] = 'Таймаут для онлайн-пользователей (секунды)';
$lang['ConfigBoard-output_compression'] = 'Сжатие вывода';
$lang['ConfigBoard-passwd_min_length'] = 'Минимальная длина пароля';
$lang['ConfigBoard-posts_per_page'] = 'Сообщений на странице';
$lang['ConfigBoard-rss_items_count'] = 'RSS заголовков';
$lang['ConfigBoard-search_limit_results'] = 'Ограничение количества результатов поиска';
$lang['ConfigBoard-search_nonindex_words_min_length'] = 'Минимальная длина ключевого слова';
$lang['ConfigBoard-session_max_lifetime'] = 'Время жизни сессии (секунды)';
$lang['ConfigBoard-show_edited_message_timeout'] = 'Время игнорирования сообщения о редактировании';
$lang['ConfigBoard-show_edited_message_timeout-info'] = 'Показывать, что сообщение отредактировано, только если оно отредактировано спустя указыванное количество секунд после публикации.';
$lang['ConfigBoard-topicreview_posts'] = 'Сообщений в обзоре темы';
$lang['ConfigBoard-topics_per_page'] = 'Тем на странице';
$lang['ConfigBoard-view_active_topics_min_level'] = 'Активные темы';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = 'Детальный список пользователей онлайн';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = 'Краткая статистика';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = 'Скрытые адреса e-mail';
$lang['ConfigBoard-view_memberlist_min_level'] = 'Список пользователей';
$lang['ConfigBoard-view_search_min_level'] = 'Поиск';
$lang['ConfigBoard-view_stafflist_min_level'] = 'Список администраторов';
$lang['ConfigBoard-view_stats_min_level'] = 'Подробная статистика';
$lang['ConfigBoard-view_contactadmin_min_level'] = 'Ссылка \'Связь с администратором\'';
$lang['ConfigBoard-allow_multi_sess'] = 'Разрешить несколько сессия для одного IP адреса';
$lang['ConfigBoard-board_closed'] = 'Закрыть форум';
$lang['ConfigBoard-board_closed-info'] = 'Администраторы всё-равно смогут входить.';
$lang['ConfigBoard-cookie_secure'] = 'Безопасные cookies';
$lang['ConfigBoard-cookie_secure-info'] = 'Шифрование cookies (для HTTPS)';
$lang['ConfigBoard-dst'] = 'Переход на летнее время';
$lang['ConfigBoard-enable_contactadmin'] = 'Включить ссылку \'Связь с администратором\'';
$lang['ConfigBoard-enable_detailed_online_list'] = 'Включить детальный список пользователей онлайн';
$lang['ConfigBoard-enable_forum_stats_box'] = 'Включить краткую статистику форума';
$lang['ConfigBoard-enable_memberlist'] = 'Включить список пользователей';
$lang['ConfigBoard-enable_quickreply'] = 'Включить быстрый ответ';
$lang['ConfigBoard-enable_rss'] = 'Включить RSS ленту';
$lang['ConfigBoard-enable_stafflist'] = 'Включить список администрации';
$lang['ConfigBoard-enable_stats'] = 'Включить подробную статистику';
$lang['ConfigBoard-friendly_urls'] = 'Включить ЧПУ';
$lang['ConfigBoard-friendly_urls-info'] = 'Требуется Apache и mod_rewrite. Выключит передачу сессии в URL.';
$lang['ConfigBoard-guests_can_access_board'] = 'Гости могут просматривать форум';
$lang['ConfigBoard-guests_can_see_contact_info'] = 'Гости могут видеть контактную информацию в профиле';
$lang['ConfigBoard-guests_can_view_profiles'] = 'Гости могут просматривать профили';
$lang['ConfigBoard-hide_avatars'] = 'Скрывать все аватары';
$lang['ConfigBoard-hide_signatures'] = 'Скрывать все подписи';
$lang['ConfigBoard-hide_userinfo'] = 'Скрывать информацию о пользователе';
$lang['ConfigBoard-rel_nofollow'] = 'Запретить Google следовать по ссылкам из сообщений';
$lang['ConfigBoard-rel_nofollow-info'] = 'Google будет игнорировать все ссылки из ббКодов.';
$lang['ConfigBoard-return_to_topic_after_posting'] = 'Возвращаться к теме после публикации';
$lang['ConfigBoard-sig_allow_bbcode'] = 'Разрешить BBCode в подписях';
$lang['ConfigBoard-sig_allow_smilies'] = 'Разрешить смайлы в подписях';
$lang['ConfigBoard-sig_max_length'] = 'Максимальная длина подписи';
$lang['ConfigBoard-single_forum_mode'] = 'Режим одного форума';
$lang['ConfigBoard-single_forum_mode-info'] = 'На главной странице показывается единственный активный форум.';
$lang['ConfigBoard-target_blank'] = 'Открывать ссылки из сообщений в новом окне';
$lang['ConfigBoard-target_blank-info'] = 'Может не проходить проверку на правильность XHTML!';
$lang['ConfigBoard-activation_mode'] = 'Активация пользователей';
$lang['ConfigBoard-activation_mode0'] = 'Выключена';
$lang['ConfigBoard-activation_mode1'] = 'Активация через e-mail';
$lang['ConfigBoard-activation_mode2'] = 'Активация администратором';
$lang['ConfigBoard-board_closed_reason'] = 'Причина закрытия';
$lang['ConfigBoard-board_url'] = 'URL форума (оставьте пустым для автоопределения)';
$lang['ConfigBoard-board_url-info'] = 'Полный URL со слешем на конце; оставьте пустым для авто-определения.';
$lang['ConfigBoard-cookie_domain'] = 'Домен для cookie';
$lang['ConfigBoard-cookie_path'] = 'Путь для cookie';
$lang['ConfigBoard-session_save_path'] = 'Путь сохранения сессии';
$lang['ConfigBoard-session_save_path-info'] = 'Указывайте только абсолютный путь.';
$lang['ConfigBoard-exclude_forums_active_topics'] = 'Исключить темы в этих форумах из списка активных';
$lang['ConfigBoard-exclude_forums_rss'] = 'Исключить темы в этих форумах из RSS лент';
$lang['ConfigBoard-exclude_forums_stats'] = 'Исключить форумы из статистики';
$lang['ConfigBoard-timezone'] = 'Часовой пояс';
$lang['ConfigBoard-debug0'] = 'Не показывать информацию';
$lang['ConfigBoard-debug1'] = 'Простая информация';
$lang['ConfigBoard-debug2'] = 'Расширенная информация';
$lang['ConfigBoard-email_view_level0'] = 'Скрывать все адреса e-mail';
$lang['ConfigBoard-email_view_level1'] = 'Включить форму отправки e-mail';
$lang['ConfigBoard-email_view_level2'] = 'Показывать с защитой от спама';
$lang['ConfigBoard-email_view_level3'] = 'Показывать нормально';
$lang['ConfigBoard-output_compression0'] = 'Выключено';
$lang['ConfigBoard-output_compression1'] = 'Сжимать HTML';
$lang['ConfigBoard-output_compression2'] = 'Использовать gzip';
$lang['ConfigBoard-output_compression3'] = 'Сжимать HTML и использовать gzip';
$lang['ConfigBoard-level0'] = 'Гость';
$lang['ConfigBoard-level1'] = 'Пользователь';
$lang['ConfigBoard-level2'] = 'Модератор';
$lang['ConfigBoard-level3'] = 'Администратор';
$lang['ConfigBoard-enable_acp_modules'] = 'Разрешить модули';
$lang['ConfigBoard-disable_registrations'] = 'Запретить регистрацию пользователей';
$lang['ConfigBoard-disable_registrations-info'] = 'Пользователей можно будет регистрировать из Панели Управления.';
$lang['ConfigBoard-disable_registrations_reason'] = 'Причина запрета';
$lang['ConfigBoard-allow_duplicate_emails'] = 'Разрешить повторяющиеся адреса e-mail';
$lang['ConfigBoard-enable_badwords_filter'] = 'Включить фильтр слов';
$lang['ConfigBoard-enable_ip_bans'] = 'Включить бан по IP-адресам';
$lang['ConfigBoard-show_raw_entities_in_code'] = 'Show raw entities in [code] tags.';
$lang['ConfigBoard-show_raw_entities_in_code-info'] = 'Show the raw entity code instead of its HTML representation.';
$lang['ConfigBoard-username_min_length'] = 'Минимальная длина имени пользователя';
$lang['ConfigBoard-username_max_length'] = 'Максимальная длина имени пользователя';
$lang['ConfigBoard-show_never_activated_members'] = 'Показывать неактивированных пользователей';
$lang['ConfigBoard-show_never_activated_members-info'] = 'Показывает неактивированных пользователей в статистике и списке.';
$lang['ConfigBoard-enable_registration_log'] = 'Журналировать регистрации';
$lang['ConfigBoard-enable_registration_log-info'] = 'Делает записи обо всех регистрациях в текстовом файле.';
$lang['ConfigBoard-registration_log_file'] = 'Файл журнала регистраций';
$lang['ConfigBoard-registration_log_file-info'] = 'Относительный директории форума или абсолютный путь.';
$lang['ConfigBoard-enable_email_dns_check'] = 'Проверять DNS записи для e-mail адресов';
$lang['ConfigBoard-enable_email_dns_check-info'] = 'Просматривает MX записи. Может работать не на всех правильных доменах.';
$lang['ConfigBoard-edit_post_timeout'] = 'Время редактирования сообщения';
$lang['ConfigBoard-edit_post_timeout-info'] = 'Пользователь может отредактировать своё сообщение только в течении указанного количества секунд после публикации.';
$lang['ConfigBoard-disable_xhtml_header'] = 'Выключить заголовок XHTML для XHTML-шаблонов.';
$lang['ConfigBoard-disable_xhtml_header-info'] = 'XHTML Content-Type может использоваться только если содержимое полностью соответствует стандарту. Всегда выключено для несовместимых с XHTML браузеров.';

$lang['CategoriesInfo'] = 'Здесь Вы можете управлять категориями ваших форумов.';
$lang['CategoriesAddNewCat'] = 'Создать категорию';
$lang['CategoriesAdjustSortIDs'] = 'Упорядочить категории';
$lang['CategoriesSortAutomatically'] = 'Упорядочить автоматически';
$lang['CategoriesNoCatsExist'] = 'Категории отсутствуют.';
$lang['CategoriesCatName'] = 'Название категории';
$lang['CategoriesSortID'] = 'Порядковый номер';
$lang['CategoriesMissingFields'] = 'Некоторые обязательные поля не заполнены.';
$lang['CategoriesSortChangesApplied'] = 'Изменения порядка применены.';
$lang['CategoriesConfirmCatDelete'] = 'Подтвердите удаление!';
$lang['CategoriesConfirmCatDeleteContent'] = 'Вы действительно хотите удалить категорию %s? Это действие будет невозможно отменить!';
$lang['CategoriesMoveContents'] = 'Перенести содержимое категории в %s';
$lang['CategoriesDeleteContents'] = 'Удалить содержимое';
$lang['CategoriesEditingCat'] = 'Правка категории %s';

$lang['ForumsInfo'] = 'Здесь Вы можете управлять вашими форумами.';
$lang['ForumsAddNewForum'] = 'Создать форум';
$lang['ForumsAdjustSortIDs'] = 'Упорядочить форумы';
$lang['ForumsSortAutomatically'] = 'Упорядочить автоматически';
$lang['ForumsNoForumsExist'] = 'Форумы отсутствуют.';
$lang['ForumsForumName'] = 'Название форума';
$lang['ForumsCatName'] = 'Категория';
$lang['ForumsDescription'] = 'Описание';
$lang['ForumsDescriptionExplain'] = 'Здесь разрешено использовать HTML. Если вы хотите использовать спецсимволы - используйте соответствующие им html-коды (например &amp;amp; вместо &amp;).';
$lang['ForumsStatus'] = 'Статус';
$lang['ForumsStatusOpen'] = 'Открыт';
$lang['ForumsAutoLock'] = 'Авто-закрытие';
$lang['ForumsAutoLockXReplies'] = 'Закрывать темы после x ответов';
$lang['ForumsIncreasePostCount'] = 'Считать количество сообщений пользователя в форуме';
$lang['ForumsModerators'] = 'Модераторы';
$lang['ForumsModeratorsExplain'] = 'Имена пользователей (не публичные имена) через запятую.';
$lang['ForumsModeratorsUnknown'] = 'Неизвестные пользователи: %s.';
$lang['ForumsHideModsList'] = 'Скрыть список модераторов';
$lang['ForumsSortID'] = 'Порядковый номер';
$lang['ForumsMissingFields'] = 'Некоторые обязательные поля не заполнены.';
$lang['ForumsSortChangesApplied'] = 'Изменения порядка применены.';
$lang['ForumsConfirmForumDelete'] = 'Подтвердите удаление!';
$lang['ForumsConfirmForumDeleteContent'] = 'Вы действительно хотите удалить форум %s? Это действие будет невозможно отменить!';
$lang['ForumsMoveContents'] = 'Перенести содержимое форума в %s';
$lang['ForumsMoveModerators'] = 'Также перенести модераторов.';
$lang['ForumsDeleteContents'] = 'Удалить содержимое';
$lang['ForumsEditingForum'] = 'Правка форума %s';
$lang['ForumsGeneral'] = 'Общие настройки';
$lang['ForumsAuth'] = 'Настройки доступа';
$lang['ForumsAuthNote'] = 'Настройки не влияют друг на друга!';
$lang['Forums-level0'] = 'Гости';
$lang['Forums-level1'] = 'Пользователи';
$lang['Forums-level2'] = 'Модераторы';
$lang['Forums-level3'] = 'Администраторы';
$lang['Forums-auth0'] = 'Просмотр форума';
$lang['Forums-auth1'] = 'Просмотр тем';
$lang['Forums-auth2'] = 'Создание тем';
$lang['Forums-auth3'] = 'Публикация ответов';
$lang['Forums-auth4'] = 'Редактирование чужих сообщений';
$lang['Forums-auth5'] = 'Перенос тем';
$lang['Forums-auth6'] = 'Удаление тем и сообщений';
$lang['Forums-auth7'] = 'Закрытие тем';
$lang['Forums-auth8'] = 'Пометка \'Важных\' тем';
$lang['Forums-auth9'] = 'Публикация HTML (опасно)';

$lang['IPLookupSearchHostname'] = 'Искать доменные имена';
$lang['IPLookupSearchUsernames'] = 'Искать пользователей';
$lang['IPLookupHostname'] = 'Доменное имя';
$lang['IPLookupHostnameNotFound'] = 'Не найдено соответствующих доменных имён.';
$lang['IPLookupUsernames'] = 'Пользователи';
$lang['IPLookupUsernamesNotFound'] = 'Не найдено соответствующих пользователей.';

$lang['SQLToolboxWarningTitle'] = 'Важное предупреждение!';
$lang['SQLToolboxWarningContent'] = 'Будьте очень осторожны во время использования этой формы. Выполнение запросов ALTER, DELETE, TRUNCATE и некоторых других может привести к порче вашего форума и базы данных! Используйте форму только когда действительно знаете, что делаете.';
$lang['SQLToolboxExecuteQuery'] = 'Выполнение запроса';
$lang['SQLToolboxExecuteQueryInfo'] = 'Введите SQL запрос. Результат будет выведен в другом текстовом поле.';
$lang['SQLToolboxExecute'] = 'Выполнить';
$lang['SQLToolboxExecutedSuccessfully'] = 'Запрос выполнен.';
$lang['SQLToolboxMaintenance'] = 'Обслуживание базы данных';
$lang['SQLToolboxMaintenanceInfo'] = 'Эти операции оптимизируют (и исправляют) таблицы используемые UseBB. Оптимизация таблиц рекоммендуется для больших форумов.';
$lang['SQLToolboxRepairTables'] = 'Исправление таблиц';
$lang['SQLToolboxOptimizeTables'] = 'Оптимизация таблиц';
$lang['SQLToolboxMaintenanceNote'] = 'Внимание: эти операции не восстанавливают потерянные данные.';

$lang['ModulesInfo'] = 'Модули позволяют вам расширить возможность администрирования с помощью возможностей созданных сторонними разработчиками. Модули Вы можете найти на сайте: %s.';
$lang['ModulesLongName'] = 'Полное название';
$lang['ModulesShortName'] = 'Короткое название';
$lang['ModulesCategory'] = 'Категория';
$lang['ModulesFilename'] = 'Файл';
$lang['ModulesDeleteNotPermitted'] = 'Не разрешено';
$lang['ModulesDisabled'] = 'Модули запрещены в настройках форума.';
$lang['ModulesNoneAvailable'] = 'Модули не доступны.';
$lang['ModulesUpload'] = 'Загрузить модуль';
$lang['ModulesUploadInfo'] = 'Выберите файл с модулем, который будет загружен на форум.';
$lang['ModulesUploadDuplicateModule'] = 'Модуль с именем %s уже существует.';
$lang['ModulesUploadNoValidModule'] = 'Файл %s не является правильным модулем.';
$lang['ModulesUploadFailed'] = 'Невозможно установить модуль %s. Ошибка при копировании.';
$lang['ModulesUploadDisabled'] = 'Нет права на запись в директории модулей. Загрузка модулей отключена. Чтобы включить её необходимо разрешить запись вебсервером в директрию %s (попробуйте chmod 777).';
$lang['ModulesConfirmModuleDelete'] = 'Подтвердите удаление модуля';
$lang['ModulesConfirmModuleDeleteInfo'] = 'Вы действительно хотите удалить модуль %s (%s)?';

$lang['MembersSearchMember'] = 'Поиск пользователя';
$lang['MembersSearchMemberInfo'] = 'Введите имя пользователя или его часть или публичное имя.';
$lang['MembersSearchMemberExplain'] = 'Имя пользователя или публичное имя';
$lang['MembersSearchMemberNotFound'] = 'Пользователи с именем %s не найдены.';
$lang['MembersSearchMemberList'] = 'Найдены пользователи';
$lang['MembersEditingMember'] = 'Правка профиля пользователя %s';
$lang['MembersEditingMemberInfo'] = 'Обновите информацию и отправьте форму. Поля отмеченные звёздочкой (*) обязательны для заполнения.';
$lang['MembersEditingMemberUsernameExists'] = 'Имя %s уже используется.';
$lang['MembersEditingMemberDisplayedNameExists'] = 'Имя %s уже используется.';
$lang['MembersEditingMemberBanned'] = 'Заблокирован';
$lang['MembersEditingMemberBannedReason'] = 'Причина блокирования';
$lang['MembersEditingMemberCantChangeOwnLevel'] = 'Вы не можете изменить собственный уровень.';
$lang['MembersEditingMemberCantBanSelf'] = 'Вы не можете заблокировать самого себя.';
$lang['MembersEditingComplete'] = 'Профиль пользователя %s успешно изменён.';

$lang['DeleteMembersSearchMember'] = 'Поиск пользователя';
$lang['DeleteMembersSearchMemberInfo'] = 'Введите имя пользователя или его часть или публичное имя.';
$lang['DeleteMembersSearchMemberExplain'] = 'Имя пользователя или публичное имя';
$lang['DeleteMembersSearchMemberNotFound'] = 'Пользователи с именем %s не найдены.';
$lang['DeleteMembersSearchMemberList'] = 'Найдены пользователи';
$lang['DeleteMembersConfirmMemberDelete'] = 'Подтвердите удаление пользователя';
$lang['DeleteMembersConfirmMemberDeleteContent'] = 'Вы действительно хотите удалить пользователя %s? Это действие будет невозможно отменить!';
$lang['DeleteMembersComplete'] = 'Пользователь %s удалён.';

$lang['RegisterMembersExplain'] = 'Здесь Вы можете зарегистрировать пользователей.';
$lang['RegisterMembersComplete'] = 'Регистрация пользователя %s завершена.';

$lang['ActivateMembersExplain'] = 'Это список неактивных пользователей форума. Вы можете вручную активировать их учётные записи. Звёздочкой (*) отмечены учётные записи которые уже были активны хотя бы один раз.';
$lang['ActivateMembersNoMembers'] = 'Список пуст.';
$lang['ActivateMembersListAdmin'] = 'Активация администратором';
$lang['ActivateMembersListEmail'] = 'Активация по e-mail';
$lang['ActivateMembersListAll'] = 'Все';

$lang['PruneForumsStart'] = 'Начать очистку';
$lang['PruneForumsExplain'] = 'С помощью очистки форумов вы можете удалять или перемещать устаревшие темы, поддерживая простоту форумов.';
$lang['PruneForumsForums'] = 'Форумы подлежащие очистке';
$lang['PruneForumsAction'] = 'Действие';
$lang['PruneForumsActionLock'] = 'Закрытие';
$lang['PruneForumsActionMove'] = 'Перенос';
$lang['PruneForumsActionDelete'] = 'Удаление';
$lang['PruneForumsMoveTo'] = 'Переносить в';
$lang['PruneForumsTopicAge'] = 'Возраст тем';
$lang['PruneForumsTopicAgeField'] = 'Последний ответ %s дней назад.';
$lang['PruneForumsMoveToForumSelectedForPruning'] = 'Операция переноса не может быть выбрана.';
$lang['PruneForumsConfirm'] = 'Подтверждение';
$lang['PruneForumsConfirmText'] = 'Я понимаю что эти действия невозможно отменить.';
$lang['PruneForumsNotConfirmed'] = 'Вы должны подтвердить это действие!';
$lang['PruneForumsDone'] = 'Очистка завршена. %d тем были обработаны.';
$lang['PruneForumsExcludeStickies'] = 'Исключить важные темы';

$lang['PruneMembersExplain'] = 'Очисткой пользователей вы можете очистить форум от неактивных или неактивированных пользователей.';
$lang['PruneMembersTypeNeverActivated'] = 'Никогда не активировавшиеся пользователи';
$lang['PruneMembersRegisteredDaysAgo'] = 'Зарегистрированные более %s дней назад.';
$lang['PruneMembersTypeNeverPosted'] = 'Никогда не публиковавшие сообщения пользователи';
$lang['PruneMembersTypeInactive'] = 'Неактивные пользователи';
$lang['PruneMembersLastLoggedIn'] = 'Последний раз входившие более %s дней назад.';
$lang['PruneMembersExclude'] = 'Исключения';
$lang['PruneMembersConfirmText'] = 'Я понимаю, что изменения нельзя будет откатить.';
$lang['PruneMembersStart'] = 'Начать очистку';
$lang['PruneMembersNotConfirmed'] = 'Нужно подтвердить свои действия.';
$lang['PruneMembersDone'] = 'Очистка завершена. %d пользователей удалено.';

$lang['DNSBLIPBansDisabled'] = 'Блокировка по IP-адресам выключена';
$lang['DNSBLIPBansDisabledInfo'] = 'Для блокировки по спискам DNSBL нужно включить блокировку по IP-адресам.';
$lang['DNSBLGeneralInfo'] = 'Открытые прокси-серверы часто используются для спама или раздражающих действий. С помощью системы защиты UseBB большинство таких серверов может быть автоматически распознано и заблокировано. Информация берётся из результатов запросов к серверам чёрных списков об IP-адресе пользователя.';
$lang['DNSBLEnableOpenDNSBLBan'] = 'Включить блокировку по спискам DNSBL';
$lang['DNSBLServers'] = 'Серверы списков DNSBL';
$lang['DNSBLServersInfo'] = 'В одной строке указывается только один DNSBL-сервер. Заметьте, что использование множества списков может заметно сказаться на производительности форума.';
$lang['DNSBLMinPositiveHits'] = 'Чтобы заблокировать IP-адрес нужно по крайней мере %s положительных ответов серверов.';
$lang['DNSBLRecheckMinutes'] = 'Перепроверять IP-адреса каждые %s минут (0 выключает перепроверки).';
$lang['DNSBLEnableOpenDNSBLBanWildcard'] = 'Разрешить блокировку по шаблонам %s (не рекоммендуется)';
$lang['DNSBLSettingsSaved'] = 'Настройки блокировки по DNSBL сохранены.';
$lang['DNSBLWhitelist'] = 'Белый список';
$lang['DNSBLWhitelistInfo'] = 'По одному IP-адресу или доменному имени в строке (* и ? могут быть использованы как шаблоны).';

$lang['BadwordsInfo'] = 'Слова могут быть удалены или заменены. Возможно частичное соответствие слов (с использованием *).';
$lang['BadwordsDisabled'] = 'Фильтр слов выключен';
$lang['BadwordsDisabledInfo'] = 'Фильтр слов выключен в настройках форума.';
$lang['BadwordsNoBadwordsExist'] = 'На данный момент нет никаких фильтров.';
$lang['BadwordsAddBadwordWord'] = 'Слово';
$lang['BadwordsAddBadwordReplacement'] = 'Замена';

$lang['MassEmailInfo'] = 'Массовая отправка сообщений всем пользователям или группам.';
$lang['MassEmailRecipients'] = 'Получатели';
$lang['MassEmailRecipients-admins'] = 'Администраторы';
$lang['MassEmailRecipients-mods'] = 'Модераторы';
$lang['MassEmailRecipients-members'] = 'Пользователи';
$lang['MassEmailSubject'] = 'Заголовок';
$lang['MassEmailBody'] = 'Сообщение';
$lang['MassEmailTemplate'] = 'Здравствуйте,

Это сообщение отправлено администратором форума [board_name].

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['MassEmailSent'] = 'Сообщение отправлено %d пользователям.';
$lang['MassEmailOptions'] = 'Настройки';
$lang['MassEmailPublicEmailsOnly'] = 'Отправлять только по публичным адресам';
$lang['MassEmailExcludeBanned'] = 'Исключить заблокированных пользователей';

$lang['BansInfo'] = 'Здесь вы управляете блокировками пользователей. Частичное соответствие (с использованием *) разрешено. Отдельные учётные записи могут быть заблокировны в интерфейсе их редактирования.';
$lang['Bans-username'] = 'Пользователи';
$lang['Bans-email'] = 'Адреса e-mail';
$lang['Bans-ip_addr'] = 'IP-адреса';
$lang['BansUsername'] = 'Пользователь';
$lang['BansEmail'] = 'Адрес e-mail';
$lang['BansIp_addr'] = 'IP-адрес';
$lang['BansNoBansExist'] = 'Блокировки такого типа пока не существуют.';
$lang['BansIPBansDisabledInfo'] = 'Блокировка по IP-адресам выключена в настройках форума.';

?>
