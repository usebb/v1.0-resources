<?php
/*
	Copyright (C) 2005 Druid VAV [druidvav@gmail.com]
	updated by buzz [fly-x@mail.ru]
	
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
if ( !defined('INCLUDED') )	exit();

//
// Initialize a new translations holder array
//
$lang = array();
$lang['character_encoding'] = 'windows-1251';
//
// Define translations
//
$lang['Home'] = 'Начало';
$lang['YourPanel'] = 'Ваш профиль';
$lang['Register'] = 'Регистрация';
$lang['FAQ'] = 'ЧаВО';
$lang['Search'] = 'Поиск';
$lang['ActiveTopics'] = 'Активные темы';
$lang['LogIn'] = 'Войти';
$lang['LogOut'] = 'Выйти (%s)';
$lang['MemberList'] = 'Список пользователей';
$lang['StaffList'] = 'Администрация';
$lang['Statistics'] = 'Статистика';
$lang['ContactAdmin'] = 'Связь с администратором';
$lang['Forum'] = 'Форум';
$lang['Topics'] = 'Темы';
$lang['Posts'] = 'Сообщения';
$lang['LatestPost'] = 'Последнее сообщение';
$lang['RSSFeed'] = 'RSS';
$lang['NewPosts'] = 'Новые сообщения';
$lang['NoNewPosts'] = 'Нет новых сообщений';
$lang['LockedNewPosts'] = 'Закрыто (новые сообщения)';
$lang['LockedNoNewPosts'] = 'Закрыто (нет новых сообщений)';
$lang['Locked'] = 'Закрыто';
$lang['LastLogin'] = 'Последнее посещение';
$lang['VariousInfo'] = 'Разная информация';
$lang['IndexStats'] = 'На форуме %d сообщений в %d темах и %d зарегистрированных пользователя.';
$lang['NewestMember'] = 'Приветствуем нашего новичка: %s.';
$lang['NewestMemberExtended'] = 'Приветствуем новичка по имени %s.';
$lang['UsersOnline'] = 'Здесь побывали %d пользователей и %d гостей (за последние %d минут).';
$lang['Username'] = 'Имя пользователя (логин)';
$lang['CurrentPassword'] = 'Текущий пароль';
$lang['UserID'] = 'ID пользователя';
$lang['NoSuchForum'] = 'Форум %s не существует!';
$lang['WrongPassword'] = 'Введённый вами пароль не верен. Запросите новый пароль через форму входа если вы забыли его.';
$lang['Reset'] = 'Сбросить';
$lang['SendPassword'] = 'Выслать новый пароль';
$lang['RegisterNewAccount'] = 'Зарегистрировать нового пользователя';
$lang['RememberMe'] = 'Запомнить меня';
$lang['Yes'] = 'Да';
$lang['No'] = 'Нет';
$lang['NotActivated'] = 'Ваш аккаунт %s ещё не активирован. Проверьте свой почтовый ящик (на который вы регистрировали свой аккаунт) на наличие письма с инструкциями по активации аккаунта.';
$lang['Error'] = 'Ошибка';
$lang['Profile'] = 'Профиль пользователя %s';
$lang['Level'] = 'Уровень';
$lang['Administrator'] = 'Администратор';
$lang['Moderator'] = 'Модератор';
$lang['Registered'] = 'Пользователь';
$lang['Email'] = 'Адрес E-mail';
$lang['ContactInfo'] = 'Контактная информация';
$lang['Password'] = 'Пароль';
$lang['PasswordAgain'] = 'Пароль (ещё раз)';
$lang['EverythingRequired'] = 'Все поля являются обязательными!';
$lang['UserAlreadyExists'] = 'Аккаунт %s уже зарегистрирован. Если он ваш, то войдите или запросите новый пароль. Если нет - выберите другое имя пользователя.';
$lang['RegisteredNotActivated'] = 'Аккаунт %s создан. На Ваш e-mail выслано письмо с инструкциями по активации аккаунта. Вы должны активировать аккаунт прежде чем войти.';
$lang['RegisteredActivated'] = 'Аккаунт %s создан. На Ваш e-mail выслана информация об аккаунте. Вы можете войти прямо сейчас!';
$lang['Never'] = 'Никогда';
$lang['Member'] = 'Пользователь';
$lang['RegistrationActivationEmailBody'] = 'Здравствуйте,

Вас беспокоит [board_name]. Вы зарегистрировали аккаунт [account_name] на нашем форуме, но он ещё не активирован.
Для активации аккаунта используйте ссылку: 
[activate_link]

Для входа используйте эти данные:

Имя пользователя: [account_name]
Пароль: [password]

Если вы забудете пароль, мы вышлем вам новый на этот же адрес. Спасибо за регистрацию!

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdActivationEmailSubject'] = 'Новый пароль';
$lang['NoForums'] = 'Администратор не создал ни одного форума.';
$lang['AlreadyActivated'] = 'Аккаунт #%d уже активирован.';
$lang['Activate'] = 'Активировать';
$lang['Activated'] = 'Ваш аккаунт %s активирован. Теперь вы можете войти, используя своё имя пользователя и пароль.';
$lang['WrongActivationKey'] = 'Невозможно активировать аккаунт #%d, так как ключ активации неверен.';
$lang['RegisterIt'] = 'Вы можете создать аккаунт перейдя по ссылке "Регистрация".';
$lang['BoardClosed'] = 'Форумы закрыты';
$lang['SendpwdActivationEmailBody'] = 'Здравствуйте,

Вас беспокоит [board_name]. Вы запросили новый пароль для аккаунта [account_name] и теперь аккаунт
нужно реактивировать, для чего вы должны использовать ссылку: 
[activate_link]

Для входа используйте эти данные:

Имя пользователя: [account_name]
Пароль: [password]

Если вы забудете пароль, мы вышлем вам новый на этот же адрес. Спасибо за регистрацию!

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailBody'] = 'Здравствуйте,

Вас беспокоит [board_name]. Вы запросили новый пароль для аккаунта [account_name].

Для входа используйте эти данные:
Имя пользователя: [account_name]
Пароль: [password]

Если вы забудете пароль, мы вышлем вам новый на этот же адрес. Спасибо за регистрацию!

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Новый пароль';
$lang['SendpwdActivated'] = 'Новый пароль для аккаунта %s выслан на %s. Теперь вы можете войти используя новый пароль.';
$lang['SendpwdNotActivated'] = 'Новый пароль для аккаунта %s выслан на %s, так же как и информация по реактивации аккаунта.';
$lang['ForumIndex'] = 'Список форумов';
$lang['MissingFields'] = 'Следующие поля не заполнены или заполнены неверно: %s.';
$lang['TermsOfUseContent'] = '
Хотя администраторы и модераторы этого форума стараются удалять или редактировать неприемлемые сообщения как можно быстрее, все сообщения просмотреть невозможно. Таким образом, вы признаёте, что сообщения на этих форумах отражают точки зрения их авторов, а не администрации форумов (кроме сообщений, размещённых её представителями) и администрация не может быть ответственна за их содержание.

Вы соглашаетесь не размещать оскорбительных, угрожающих, клеветнических сообщений, порнографических сообщений, призывов к национальной розни и прочих сообщений, могущих нарушить соответствующие законы. Попытки размещения таких сообщений могут привести к вашему немедленному отключению от форумов (при этом ваш провайдер будет поставлен в известность). IP адреса всех сообщений сохраняются для возможности проведения такой политики.

Вы соглашаетесь с тем, что администраторы форума имеют право удалить, отредактировать, перенести или закрыть любую тему в любое время по своему усмотрению. Как пользователь вы согласны с тем, что введённая вами информация будет храниться в базе данных. Хотя эта информация не будет открыта третьим лицам без вашего разрешения, администрация форумов не может быть ответственна за действия хакеров, которые могут привести к несанкционированному доступу к ней.

Эти форумы используют cookies для хранения информации на вашем компьютере. Эти cookie не содержат никакой информации из введённой вами и служат лишь для улучшения качества работы форумов. Ваш e-mail адрес используется лишь для подтверждения вашей регистрации и пароля (и для высылки нового пароля если вы забудете текущий).

Нажатием на кнопку регистрации вы подтверждаете своё согласие с этими условиями.';
$lang['TermsOfUse'] = 'Пользовательское соглашение';
$lang['RegistrationActivationEmailSubject'] = 'Активация аккаунта';
$lang['NeedToBeLoggedIn'] = 'Вы должны быть зарегистрированы, чтобы сделать это. Используйте ссылку \'Войти\'  чтобы войти или \'Регистрация\' чтобы создать новый аккаунт.';
$lang['WrongEmail'] = '%s - неправильный адрес электронной почты для аккаунта %s. Если Вы не можете вспомнить ваш адрес электронной почты, обратитесь к администратору.';
$lang['Topic'] = 'Тема';
$lang['Author'] = 'Автор';
$lang['Replies'] = 'Ответов';
$lang['Views'] = 'Просмотров';
$lang['Note'] = 'Заметка';
$lang['Hidden'] = 'Скрыто';
$lang['ACP'] = 'Панель Администратора';
$lang['SendMessage'] = 'Отправить сообщение';
$lang['NoViewableForums'] = 'Вам запрещено просматривать все форумы с этим пользовательским уровнем. Если Вы не зарегистрированы - зарегистрируйтесь. Если Вы зарегистрированы, Вы вероятно не должны быть здесь :)';
$lang['Rank'] = 'Ранг';
$lang['Location'] = 'Местонахождение';
$lang['Website'] = 'Сайт';
$lang['Occupation'] = 'Род деятельности';
$lang['Interests'] = 'Интересы';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber';
$lang['BannedIP'] = 'Ваш IP адрес %s заблокирован.';
$lang['Avatar'] = 'Аватар';
$lang['AvatarURL'] = 'URL аватара';
$lang['BannedUser'] = 'Заблокированный аккаунт';
$lang['BannedUserExplain'] = 'Ваш аккаунт %s заблокирован. Причина:';
$lang['BannedUsername'] = 'Имя пользователя %s запрещено. Пожалуйста, выберите другое.';
$lang['BannedEmail'] = 'Адрес электронной почты %s заблокирован. Пожалуйста, выберите другой.';
$lang['PostsPerDay'] = 'Сообщений в день';
$lang['BoardClosedOnlyAdmins'] = 'Только администратор может входить, когда форумы закрыты.';
$lang['NoPosts'] = 'Нет сообщений';
$lang['NoActivetopics'] = 'На данный момент активные темы отсутствуют.';
$lang['AuthorDate'] = 'Автор -  %s, дата - %s';
$lang['ByAuthor'] = 'Автор: %s';
$lang['OnDate'] = 'Дата: %s';
$lang['Re'] = 'Re:';
$lang['MailForm'] = 'Отправить письмо для %s';
$lang['SendEmail'] = 'Отправить сообщение для %s';
$lang['NoMails'] = 'Этот пользователь запретил посылать ему сообщения.';
$lang['UserEmailBody'] = 'Здравствуйте,

Вас беспокоит [board_name]. Пользователь [username] отправил вам через форумы это письмо. Текст письма приведён ниже

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'E-mail для %s отправлен успешно!';
$lang['To'] = 'Для';
$lang['From'] = 'От';
$lang['Subject'] = 'Тема';
$lang['Body'] = 'Текст';
$lang['Send'] = 'Отправить';
$lang['EditProfile'] = 'Редактировать профиль';
$lang['EditOptions'] = 'Настройки';
$lang['EditPasswd'] = 'Смена пароля';
$lang['PanelHome'] = 'Панель Пользователя';
$lang['NewEmailNotActivated'] = 'Ваш профиль обновлён успешно, но так как вы изменили свой адрес e-mail, то вы должны реактивировать аккаунт. Письмо с инструциями отправлено на новый адрес.';
$lang['Required'] = 'Обязательно';
$lang['ViewProfile'] = 'Показать профиль';
$lang['NewEmailActivationEmailBody'] = 'Здравствуйте,

Вас беспокоит [board_name]. Вы изменили свой e-mail адрес для аккаунта [account_name] и теперь аккаунт
нужно реактивировать, для чего вы должны использовать ссылку: 
[activate_link]

Для входа используйте эти данные:
Имя пользователя: [account_name]
Пароль: [password]

Если вы забудете пароль, мы вышлем вам новый на этот же адрес. Спасибо за регистрацию!

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Активация аккаунта';
$lang['Signature'] = 'Подпись';
$lang['SessionInfo'] = 'Информация о сессии';
$lang['SessionID'] = 'ID сессии';
$lang['IPAddress'] = 'IP адрес';
$lang['Seconds'] = 'сек.';
$lang['Updated'] = 'Обновление';
$lang['Pages'] = 'Показов';
$lang['AutoLogin'] = 'Автовход';
$lang['Enabled'] = 'Включено';
$lang['Disabled'] = 'Отключено';
$lang['Enable'] = 'Включить';
$lang['Disable'] = 'Отключить';
$lang['AutoLoginSet'] = 'Включена функция автоматического входа.';
$lang['AutoLoginUnset'] = 'Функция автоматического входа выключена.';
$lang['RegistrationEmailBody'] = 'Здравствуйте,

Вас беспокоит [board_name]. Вы зарегистрировали аккаунт [account_name] на нашем форуме.
Для входа используйте эти данные:

Имя пользователя: [account_name]
Пароль: [password]

Если вы забудете пароль, мы вышлем вам новый на этот же адрес. Спасибо за регистрацию!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Регистрация аккаунта';
$lang['PublicEmail'] = 'Показывать адрес e-mail';
$lang['PublicLastLogin'] = 'Показывать дату последнего посещения';
$lang['DateFormat'] = 'Формат даты';
$lang['DateFormatHelp'] = 'Синтаксис совпадает с синтаксисом функции %s в PHP.';
$lang['Again'] = 'Ещё раз';
$lang['NewPassword'] = 'Новый пароль';
$lang['NewPasswordAgain'] = 'Новый пароль (ещё раз)';
$lang['PasswordEdited'] = 'Ваш пароль удачно изменён.';
$lang['DetailedOnlineList'] = 'Подробный список';
$lang['Detailed'] = 'Подробно';
$lang['OptionsEdited'] = 'Настройки обновлены успешно.';
$lang['ProfileEdited'] = 'Ваш профиль успешно обновлён.';
$lang['Started'] = 'Начало';
$lang['Minutes'] = 'мин.';
$lang['Hours'] = 'час.';
$lang['Days'] = 'дн.';
$lang['Weeks'] = 'нед.';
$lang['TotalTime'] = 'Общее время';
$lang['NoTopics'] = 'В этом форуме нет тем.';
$lang['NotPermitted'] = 'У вас нет необходимых прав.';
$lang['Language'] = 'Язык';
$lang['Template'] = 'Шаблон';
$lang['NoSuchMember'] = 'Пользователь %s не существует.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Эта возможность отключена, так как форум не может установить или прочитать настройки, сохраннённые в вашем браузере (cookies).';
$lang['LogOutConfirm'] = 'Вы действительно хотите выйти? Функция автоматичского входа будет выключена!';
$lang['Cancel'] = 'Отмена';
$lang['Timezone'] = 'Часовой пояс';
$lang['DST'] = 'Зимнее/летнее время';
$lang['Sticky'] = 'Важная';
$lang['PostNewTopic'] = 'Новая тема';
$lang['ForumIsLocked'] = 'Форум закрыт';
$lang['NoSuchTopic'] = 'Тема %s не существует.';
$lang['PostReply'] = 'Ответить';
$lang['TopicIsLocked'] = 'Тема закрыта';
$lang['Post'] = 'Сообщение';
$lang['Edit'] = 'Править';
$lang['Delete'] = 'Удалить';
$lang['Quote'] = 'Цитата';
$lang['Wrote'] = '%s писал(а)';
$lang['ViewingIP'] = 'IP: %s';
$lang['ReplyTo'] = 'Ответ на "%s"';
$lang['TopicIsLockedExplain'] = 'Тема, в которую вы пытаетесь опубликовать ответ закрыта.';
$lang['Content'] = 'Содержание';
$lang['Options'] = 'Настройки';
$lang['EnableBBCode'] = 'Включить BBCode.';
$lang['EnableSmilies'] = 'Включить смайлы.';
$lang['EnableSig'] = 'Использовать подпись.';
$lang['EnableHTML'] = 'Включить HTML.';
$lang['LockTopicAfterPost'] = 'Закрыть тему после публикации.';
$lang['Guest'] = 'Гость';
$lang['BackToPrevious'] = 'Вернуться к предыдущей странице';
$lang['NoSuchPost'] = 'Сообщение %s не существует.';
$lang['UserPostedImage'] = 'Пользователь прикрепил изображение';
$lang['ForumIsLockedExplain'] = 'Этот форум закрыт. Только авторизованные пользователи могут создавать новые темы.';
$lang['MakeTopicSticky'] = 'Пометить тему как "важная".';
$lang['QuickReply'] = 'Быстрый ответ';
$lang['ReturnToTopicAfterPosting'] = 'Вернуться к теме после публикации.';
$lang['ModeratorList'] = 'Модераторы: %s.';
$lang['Nobody'] = 'отсутствуют';
$lang['DeleteTopic'] = 'Удалить тему';
$lang['MoveTopic'] = 'Перенести тему';
$lang['LockTopic'] = 'Закрыть тему';
$lang['UnlockTopic'] = 'Открыть тему';
$lang['MakeSticky'] = 'Сделать важной темой';
$lang['ConfirmDeleteTopic'] = 'Вы действительно хотите удалить тему %s из форума %s?';
$lang['MakeNormalTopic'] = 'Сделать обычной темой';
$lang['OldForum'] = 'Старый форум';
$lang['NewForum'] = 'Новый форум';
$lang['IAccept'] = 'Я согласен';
$lang['IDontAccept'] = 'Я не согласен';
$lang['OpenLinksNewWindow'] = 'Открывать внешние ссылки в новом окне';
$lang['HideAllAvatars'] = 'Не показывать аватара';
$lang['HideUserinfo'] = 'Не показывать информацию о пользователе';
$lang['HideAllSignatures'] = 'Не показывать подпись';
$lang['HideFromOnlineList'] = 'Скрывать пребывание на форуме';
$lang['PageLinks'] = 'Страница: %s';
$lang['Preview'] = 'Предпросмотр';
$lang['DeletePost'] = 'Удаление сообщения';
$lang['ConfirmDeletePost'] = 'Вы уверены, что хотите удалить это сообщение из темы %s?';
$lang['EditPost'] = 'Редактирование сообщения';
$lang['PostEditInfo'] = 'Последний раз редактировалось %s %s.';
$lang['PasswdInfo'] = 'Пароль не может содержать пробелы и кавычки. Минимальная длина составляет %d символов.';
$lang['SubscribeTopic'] = 'Подписаться на обновления';
$lang['UnsubscribeTopic'] = 'Отписаться от обновлений';
$lang['NewReplyEmailBody'] = 'Здравствуйте,

Вас беспокоит [board_name]. [poster_name] опубликовал ответ в теме "[topic_title]", на которую вы подписаны.
Для просмотра ответа следуйте по ссылке: [topic_link].

Чтобы отписаться от обновлений следуйте по этой ссылке (необходимо войти в форум): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Новый ответ в теме "%s"';
$lang['SubscribedTopic'] = 'Теперь вы подписаны на обновления этой темы.';
$lang['UnsubscribedTopic'] = 'Теперь вы отписаны от обновлений этой темы.';
$lang['SubscribeToThisTopic'] = 'Подписка на обновления в теме.';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = 'Рассылки';
$lang['NoSubscribedTopics'] = 'Вы не подписаны ни на одну тему.';
$lang['LatestUpdate'] = 'Последнее обновление';
$lang['Unknown'] = 'Неизвестно';
$lang['PostingTopic'] = 'Публикация темы в %s';
$lang['PostingReply'] = 'Публикация ответа в %s';
$lang['MovingTopic'] = 'Перенос темы %s';
$lang['DeletingTopic'] = 'Удаление темы %s';
$lang['EditingPost'] = 'Редактирование ответа %s';
$lang['DeletingPost'] = 'Удаление ответа из %s';
$lang['DebugMode'] = 'Режим отладки';
$lang['ParseTime'] = 'Время обработки';
$lang['ServerLoad'] = 'Загрузка сервера';
$lang['TemplateSections'] = 'Шаблоны';
$lang['SQLQueries'] = 'SQL запросы';
$lang['RealName'] = 'Настоящее имя';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Администраторы';
$lang['Moderators'] = 'Модераторы';
$lang['SortBy'] = 'Сортировать по: %s';
$lang['TopicReview'] = 'Содержание темы';
$lang['ViewMorePosts'] = 'Все сообщения';
$lang['DisplayedName'] = 'Публичное имя';
$lang['UsernameInfo'] = 'Имя пользователя должно содержать только цифры, латинские буквы и символы _ и - (без пробелов).';
$lang['Code'] = 'Код';
$lang['Img'] = 'Картинка';
$lang['URL'] = 'URL';
$lang['Color'] = 'Цвет';
$lang['Size'] = 'Размер';
$lang['ViewingForum'] = 'Форум: %s.';
$lang['ViewingTopic'] = 'Тема: %s.';
$lang['FloodIntervalWarning'] = 'Администратор выбрал чтобы пользователи могли публиковать сообщения с минимальным интервалом %d секунд. Попробуйте отправить форму позже.';
$lang['AutoSubscribe'] = 'Подписываться автоматически';
$lang['OnPostingNewTopics'] = 'При создании тем';
$lang['OnPostingNewReplies'] = 'При публикации ответа';
$lang['UnsubscribeSelected'] = 'Отписаться от выделенных';
$lang['SelectedTopicsUnsubscribed'] = 'Вы отписались от выбранных тем.';
$lang['TrashTopic'] = 'Удалить в корзину';
$lang['ConfirmTrashTopic'] = 'Вы уверены что хотите удалить тему %s из форума %s в корзину?';
$lang['Birthday'] = 'День рождения';
$lang['Age'] = 'Возраст';
$lang['Month'] = 'Месяц';
$lang['Day'] = 'День';
$lang['PoweredBy'] = '%s работает на движке %s';
$lang['GeneralStats'] = 'Общая статистика';
$lang['Members'] = 'Пользователи';
$lang['TopicsPerDay'] = 'Тем в день';
$lang['MembersPerDay'] = 'Пользователей в день';
$lang['BoardStarted'] = 'Доска объявлений запущена';
$lang['BoardAge'] = 'Возраст доски объявлений';
$lang['NewestMember'] = 'Наш новичок';
$lang['MostActiveTopics'] = 'Самые активные темы';
$lang['MostViewedTopics'] = 'Самые популярные темы';
$lang['PostsPerMember'] = 'Среднее кол-во сообщений на пользователя';
$lang['PostsPerForum'] = 'Среднее кол-во сообщений в форуме';
$lang['Categories'] = 'Категории';
$lang['Forums'] = 'Форумы';
$lang['TopicsPerMember'] = 'Среднее кол-во тем на пользователя';
$lang['TopicsPerForum'] = 'Среднее кол-во сообщений в форуме';
$lang['MostActiveMembers'] = 'Самые активные пользователи';
$lang['MostActiveForums'] = 'Самые активные форумы';
$lang['DisplayedNameTaken'] = 'Извините, %s уже используется как имя пользователя или публичное имя.';
$lang['SearchKeywords'] = 'Ключевые слова для поиска';
$lang['SearchMode'] = 'Режим поиска';
$lang['SearchAuthor'] = 'Искать по автору';
$lang['SearchForums'] = 'Искать по форумам';
$lang['AllForums'] = 'Все форумы';
$lang['AllKeywords'] = 'Все слова';
$lang['OneOrMoreKeywords'] = 'Одно или более слов';
$lang['NoSearchResults'] = 'Извините, ничего не найдено.';
$lang['SearchMembersPosts'] = 'Сообщения пользователя';
$lang['CurrentPage'] = 'Текущая страница';
$lang['MemberGuestOnline'] = 'За последние %d минут, %d пользователь (%d скрытых) и %d гость посетили форум.';
$lang['MembersGuestOnline'] = 'За последние %d минут, %d пользователей (%d скрытых) и %d гость посетили форум.';
$lang['MemberGuestsOnline'] = 'За последние %d минут, %d пользователь (%d скрытых) и %d гостей посетили форум.';
$lang['MembersGuestsOnline'] = 'За последние %d минут, %d пользователей (%d скрытых) и %d гостей посетили форум.';
$lang['WhosOnline'] = 'Кто сейчас на связи';
$lang['Done'] = 'Сделано';
$lang['KeywordsExplain'] = 'Любые слова, из не менее %d символов, разделенных пробелами.';
$lang['BCCMyself'] = 'Послать копию на адрес моей электронной почты.';
$lang['Save'] = 'Сохранить';
$lang['Add'] = 'Добавить';
$lang['MarkAllAsRead'] = 'Пометить все как прочитанное';
$lang['MarkAllAsReadDone'] = 'Все форумы и темы помечены сейчас как прочитанные.';
$lang['StringTooShort'] = '%s слишком короткая, как минимум необходимо %d символов.';
$lang['StringTooLong'] = '%s слишком длинная, возможна строка не больше, чем %d cимволов.';
$lang['Upload'] = 'Загрузить';
$lang['RegistrationsDisabled'] = 'Регистрация отключена';
$lang['PostFormShortcut'] = 'Нажмите Alt+S (Cmd+S на Макинтош) для быстрой отправки.';

//
// Date translations
//
$lang['date_translations'] = array(
	'Mon' => 'Пн',
	'Tue' => 'Вт',
	'Wed' => 'Ср',
	'Thu' => 'Чт',
	'Fri' => 'Пт',
	'Sat' => 'Сб',
	'Sun' => 'Вс',
	'Monday' => 'Понедельник',
	'Tuesday' => 'Вторник',
	'Wednesday' => 'Среда',
	'Thursday' => 'Четверг',
	'Friday' => 'Пятница',
	'Saturday' => 'Суббота',
	'Sunday' => 'Воскресенье',
	'Jan' => 'Янв',
	'Feb' => 'Фев',
	'Mar' => 'Мар',
	'Apr' => 'Апр',
	'May' => 'Май',
	'Jun' => 'Июн',
	'Jul' => 'Июл',
	'Aug' => 'Авг',
	'Sep' => 'Сен',
	'Oct' => 'Окт',
	'Nov' => 'Ноя',
	'Dec' => 'Дек',
	'January' => 'Январь',
	'February' => 'Февраль',
	'March' => 'Март',
	'April' => 'Апрель',
	'May' => 'Май',
	'June' => 'Июнь',
	'July' => 'Июль',
	'August' => 'Август',
	'September' => 'Сентябрь',
	'October' => 'Октябрь',
	'November' => 'Ноябрь',
	'December' => 'Декабрь',
	'st' => 'ое',
	'nd' => 'ое',
	'th' => 'ое'
);
?>
