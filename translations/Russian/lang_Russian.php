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

//
// Initialize a new translations holder array
//
$lang = array();

//
// Translation settings
// Uncomment and change when necessary for translations
//
$lang['character_encoding'] = 'windows-1251';
$lang['language_code'] = 'ru';
$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = 'Главная';
$lang['YourPanel'] = 'Ваш профиль';
$lang['Register'] = 'Регистрация';
$lang['FAQ'] = 'FAQ';
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
$lang['IndexStats'] = 'Всего содержится %d сообщений в %d темах и %d пользователей.';
$lang['NewestMemberExtended'] = 'Приветствуем нашего новичка: %s.';
$lang['Username'] = 'Имя пользователя';
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
$lang['NotActivated'] = 'Ваша учётная запись %s ещё не активирована. Проверьте почтовый ящик, указанный при регистрации, на наличие письма с инструкциями по активации учётной записи.';
$lang['Error'] = 'Ошибка';
$lang['Profile'] = 'Профиль пользователя %s';
$lang['Level'] = 'Уровень';
$lang['Administrator'] = 'Администратор';
$lang['Moderator'] = 'Модератор';
$lang['Registered'] = 'Пользователь';
$lang['Email'] = 'Адрес e-mail';
$lang['ContactInfo'] = 'Контактная информация';
$lang['Password'] = 'Пароль';
$lang['PasswordAgain'] = 'Пароль (ещё раз)';
$lang['EverythingRequired'] = 'Все поля являются обязательными!';
$lang['RegisteredNotActivated'] = 'Учётная запись пользователя %s создана. На Ваш e-mail выслано письмо с инструкциями по её активации, после которой Вы сможете войти под своим именем.';
$lang['RegisteredActivated'] = 'Учётная запись пользователя %s создана и теперь можете войти под своим именем. На Ваш e-mail выслана информация о ней.';
$lang['Never'] = 'Никогда';
$lang['Member'] = 'Пользователь';
$lang['RegistrationActivationEmailBody'] = 'Здравствуйте,

Вы зарегистрировали учётную запись [account_name] на форуме [board_name], но она ещё не активна. Чтобы активировать учётную запись перейдите по следующей ссылке: 

[activate_link]

Для входа используйте эти данные:

Имя пользователя: [account_name]
Пароль: [password]

Если вы забудете пароль, мы вышлем вам новый на этот же адрес. Спасибо за регистрацию!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'Администратор не создал ни одного форума.';
$lang['AlreadyActivated'] = 'Учётная запись #%d уже активирована.';
$lang['Activate'] = 'Активировать';
$lang['Activated'] = 'Учётная запись %s активирована. Теперь Вы можете войти со своими именем пользователя и паролем.';
$lang['WrongActivationKey'] = 'Невозможно активировать учётную запись #%d, так как ключ активации неверен.';
$lang['RegisterIt'] = 'Вы можете зарегистрироваться перейдя по ссылке "Регистрация".';
$lang['BoardClosed'] = 'Форумы закрыты';
$lang['SendpwdEmailBody'] = 'Здравствуйте,

Вы запросили новый пароль для учётной записи [account_name] на форуме [board_name]. Для входа используйте эти данные:

Имя пользователя: [account_name]
Пароль: [password]

Если вы забудете пароль, мы вышлем вам новый на этот же адрес. Спасибо за регистрацию!

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Новый пароль';
$lang['SendpwdActivated'] = 'Новый пароль для учётной записи %s выслан на %s. Теперь Вы можете войти используя новый пароль.';
$lang['ForumIndex'] = 'Список форумов';
$lang['MissingFields'] = 'Следующие обязательные поля не заполнены или заполнены неверно: %s.';
$lang['TermsOfUseContent'] = 'Хотя администраторы и модераторы этого форума стараются удалять или редактировать неприемлемые сообщения как можно быстрее, все сообщения просмотреть невозможно. Таким образом, вы признаёте, что сообщения на этих форумах отражают точки зрения их авторов, а не администрации форумов (кроме сообщений, размещённых её представителями) и администрация не может быть ответственна за их содержание.

Вы соглашаетесь не размещать оскорбительных, угрожающих, клеветнических сообщений, порнографических сообщений, призывов к национальной розни и прочих сообщений, могущих нарушить соответствующие законы. Попытки размещения таких сообщений могут привести к вашему немедленному отключению от форумов (при этом ваш провайдер будет поставлен в известность). IP адреса всех сообщений сохраняются для возможности проведения такой политики.

Вы соглашаетесь с тем, что администраторы форума имеют право удалить, отредактировать, перенести или закрыть любую тему в любое время по своему усмотрению. Как пользователь вы согласны с тем, что введённая вами информация будет храниться в базе данных. Хотя эта информация не будет открыта третьим лицам без вашего разрешения, администрация форумов не может быть ответственна за действия хакеров, которые могут привести к несанкционированному доступу к ней.

Эти форумы используют cookies для хранения информации на вашем компьютере. Эти cookie не содержат никакой информации из введённой вами и служат лишь для улучшения качества работы форумов. Ваш e-mail адрес используется лишь для подтверждения вашей регистрации и пароля (и для высылки нового пароля если вы забудете текущий).

Нажатием на кнопку регистрации вы подтверждаете своё согласие с этими условиями.';
$lang['TermsOfUse'] = 'Пользовательское соглашение';
$lang['RegistrationActivationEmailSubject'] = 'Активация учётной записи';
$lang['NeedToBeLoggedIn'] = 'Вы должны быть зарегистрированы! Войдите используя свои имя пользователя и пароль или зарегистрируйтесь, чтобы получить их.';
$lang['WrongEmail'] = '%s не является адресом электронной почты %s. Если Вы не можете вспомнить Ваш адрес электронной почты, обратитесь к администратору.';
$lang['Topic'] = 'Тема';
$lang['Author'] = 'Автор';
$lang['Replies'] = 'Ответы';
$lang['Views'] = 'Просмотры';
$lang['Note'] = 'Заметка';
$lang['Hidden'] = 'Скрыто';
$lang['ACP'] = 'Администрирование';
$lang['SendMessage'] = 'Отправить сообщение';
$lang['NoViewableForums'] = 'Вам запрещено просматривать все форумы с этим пользовательским уровнем. Если Вы не зарегистрированы - зарегистрируйтесь, а если Вы уже зарегистрированы - Вы, вероятно, не должны быть здесь.';
$lang['Rank'] = 'Ранг';
$lang['Location'] = 'Местонахождение';
$lang['Website'] = 'Сайт';
$lang['Occupation'] = 'Род деятельности';
$lang['Interests'] = 'Интересы';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'Ваш IP адрес %s заблокирован.';
$lang['Avatar'] = 'Аватар';
$lang['AvatarURL'] = 'URL аватара';
$lang['BannedUser'] = 'Заблокированная учётная запись';
$lang['BannedUserExplain'] = 'Ваша учётная запись %s заблокирована. Причина:';
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

Пользователь [username] с форума [board_name] отправил вам через форумы это письмо. Текст письма приведён ниже

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
$lang['PanelHome'] = 'Панель пользователя';
$lang['NewEmailNotActivated'] = 'Ваш профиль обновлён успешно, но так как вы изменили свой адрес e-mail, то вы должны активировать учётную запись заново. Письмо с инструкциями отправлено на новый адрес.';
$lang['Required'] = 'Обязательно';
$lang['ViewProfile'] = 'Показать профиль';
$lang['NewEmailActivationEmailBody'] = 'Здравствуйте,

Вы изменили свой e-mail адрес для учётной записи [account_name] на форуме [board_name] и её нужно активировать, перейдя по ссылке: 

[activate_link]



Если вы забудете пароль, мы вышлем вам новый на этот же адрес. Спасибо за регистрацию!

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Активация учётной записи';
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
$lang['AutoLoginSet'] = 'Cookie автовхода установлена.';
$lang['AutoLoginUnset'] = 'Cookie автовхода удалена.';
$lang['RegistrationEmailBody'] = 'Здравствуйте,

Вы зарегистрировали учётную запись [account_name] на  форуме [board_name]. Для входа используйте эти данные:

Имя пользователя: [account_name]
Пароль: [password]

Если вы забудете пароль, мы вышлем вам новый на этот же адрес. Спасибо за регистрацию!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Регистрация учётной записи';
$lang['PublicEmail'] = 'Показывать адрес e-mail';
$lang['PublicLastLogin'] = 'Показывать дату последнего посещения';
$lang['DateFormat'] = 'Формат даты';
$lang['DateFormatHelp'] = 'Синтаксис совпадает с синтаксисом функции %s в PHP.';
$lang['Again'] = 'Ещё раз';
$lang['NewPassword'] = 'Новый пароль';
$lang['NewPasswordAgain'] = 'Новый пароль (ещё раз)';
$lang['PasswordEdited'] = 'Ваш пароль успешно изменён.';
$lang['DetailedOnlineList'] = 'Подробный список';
$lang['Detailed'] = 'Подробнее';
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
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Эта возможность отключена, так как форум не может установить или прочитать cookie из вашего браузера.';
$lang['LogOutConfirm'] = 'Вы действительно хотите выйти? Все cookie автовхода будут удалены!';
$lang['Cancel'] = 'Отмена';
$lang['Timezone'] = 'Часовой пояс';
$lang['DST'] = 'Зимнее/летнее время';
$lang['Sticky'] = 'Важная';
$lang['PostNewTopic'] = 'Новая тема';
$lang['ForumIsLocked'] = 'Форум закрыт';
$lang['NoSuchTopic'] = 'Тема %s не существует.';
$lang['PostReply'] = 'Ответить';
$lang['TopicIsLocked'] = 'Тема закрыта';
$lang['Post'] = 'Опубликовать';
$lang['Edit'] = 'Править';
$lang['Delete'] = 'Удалить';
$lang['Quote'] = 'Цитата';
$lang['Wrote'] = '%s писал(а)';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'Тема, в которой Вы пытаетесь ответить ответ закрыта.';
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
$lang['MakeTopicSticky'] = 'Сделать тему важной.';
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
$lang['HideAllAvatars'] = 'Не показывать аватары';
$lang['HideUserinfo'] = 'Не показывать информацию о пользователях';
$lang['HideAllSignatures'] = 'Не показывать подписи';
$lang['HideFromOnlineList'] = 'Скрывать пребывание на форуме';
$lang['PageLinks'] = 'Страница: %s';
$lang['Preview'] = 'Предпросмотр';
$lang['DeletePost'] = 'Удаление сообщения';
$lang['ConfirmDeletePost'] = 'Вы уверены, что хотите удалить это сообщение из темы %s?';
$lang['EditPost'] = 'Редактирование сообщения';
$lang['PostEditInfo'] = 'Последнее редактирование произвёл %s. Дата: %s.';
$lang['PasswdInfo'] = 'Пароль не может содержать пробелы и кавычки. Минимальная длина составляет %d символов.';
$lang['SubscribeTopic'] = 'Подписаться на обновления';
$lang['UnsubscribeTopic'] = 'Отписаться от обновлений';
$lang['NewReplyEmailBody'] = 'Здравствуйте,

[poster_name] опубликовал ответ в теме "[topic_title]" на форуме [board_name], на которую вы подписаны. Для просмотра ответа следуйте по ссылке: [topic_link].

Чтобы отписаться от обновлений следуйте по этой ссылке (необходимо войти на форум): [unsubscribe_link].

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
$lang['TopicReview'] = 'Обзор темы';
$lang['ViewMorePosts'] = 'Ещё сообщения';
$lang['DisplayedName'] = 'Публичное имя';
$lang['UsernameInfo'] = 'Имя пользователя должно содержать только цифры, латинские буквы, пробелы и символы _ и -.';
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
$lang['Birthday'] = 'День рождения';
$lang['Age'] = 'Возраст';
$lang['Month'] = 'Месяц';
$lang['Day'] = 'День';
$lang['Year'] = 'Год';
$lang['PoweredBy'] = '%s работает на движке %s';
$lang['ForumSoftware'] = 'Forum Software';
$lang['GeneralStats'] = 'Общая статистика';
$lang['Members'] = 'Пользователи';
$lang['TopicsPerDay'] = 'Тем в день';
$lang['MembersPerDay'] = 'Пользователей в день';
$lang['BoardStarted'] = 'Форумы запущены';
$lang['BoardAge'] = 'Возраст форумов';
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
$lang['NoSearchResults'] = 'Извините, ничего не найдено.';
$lang['SearchMembersPosts'] = 'Сообщения пользователя';
$lang['CurrentPage'] = 'Текущая страница';
$lang['MemberGuestOnline'] = 'За последние %d минут форум посетили %d пользователь (%d скрытых) и %d гость.';
$lang['MembersGuestOnline'] = 'За последние %d минут форум посетили %d пользователей (%d скрытых) и %d гость.';
$lang['MemberGuestsOnline'] = 'За последние %d минут форум посетили %d пользователь (%d скрытых) и %d гостей.';
$lang['MembersGuestsOnline'] = 'За последние %d минут форум посетили %d пользователей (%d скрытых) и %d гостей.';
$lang['WhosOnline'] = 'Сейчас на форуме';
$lang['Done'] = 'Готово';
$lang['KeywordsExplain'] = 'Любые слова длиннее %d символов разделённые пробелами.';
$lang['BCCMyself'] = 'Отправить копию на мой e-mail.';
$lang['Save'] = 'Сохранить';
$lang['Add'] = 'Добавить';
$lang['MarkAllAsRead'] = 'Пометить все как прочтённые';
$lang['MarkAllAsReadDone'] = 'Все форумы и темы помечены как прочтённые.';
$lang['StringTooShort'] = 'Строка "%s" слишком коротка, она должна быть не короче %d символов.';
$lang['StringTooLong'] = 'Строка "%s" слишком длинна, она должна быть не длиннее %d символов.';
$lang['Upload'] = 'Загрузка';
$lang['RegistrationsDisabled'] = 'Регистрация отключена';
$lang['PostFormShortcut'] = 'Используйте сочетание клавиш Alt+S (Cmd+S для Apple) для быстрой отправки формы.';
$lang['EditThisMember'] = 'Правка профиля';
$lang['EmailTaken'] = 'Адрес e-mail %s уже используется. Вы должны выбрать другой адрес.';
$lang['RegisteredNotActivatedByAdmin'] = 'Ваша учётная запись %s создана. Администратор должен подтвердить вашу регистрацию прежде чем вы сможете войти. Пожалуйста, подождите пока это не произойдёт.';
$lang['AdminActivationEmailBody'] = 'Здравствуйте,

Вы зарегистрировали учётную запись [account_name] на форуме [board_name], но она ещё не подтверждена администратором форума. После получения подтверждения для входа используйте эти данные:

Имя пользователя: [account_name]
Пароль: [password]

Если вы забудете пароль, мы вышлем вам новый на этот же адрес. Спасибо за регистрацию!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'Учётная запись ожидает подтверждения';
$lang['NewEmailNotActivatedByAdmin'] = 'Профиль успешно изменён, но, так как вы изменили свой адрес e-mail, администратор должен подтвердить это изменение и вы не сможете войти на форум некоторое время.';
$lang['NewEmailAdminActivationEmailBody'] = 'Здравствуйте,

Вы изменили свой e-mail адрес для учётной записи [account_name] на форуме [board_name], но изменение ещё не подтверждено администратором форума и ваша учётная запись временно неактивна.: 

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'Учётная запись ожидает подтверждения';
$lang['AdminActivatedAccountEmailBody'] = 'Здравствуйте,

Администратор форума [board_name] активизировал вашу учётную запись [account_name]. Теперь вы можете войти.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Учётная запись подтверждена';
$lang['Sort'] = 'Сортировка';
$lang['SortBy'] = 'Сортировать по';
$lang['SortBy-displayed_name'] = 'Имени пользователя';
$lang['SortBy-real_name'] = 'Настоящему имени';
$lang['SortBy-level'] = 'Уровню';
$lang['SortBy-rank'] = 'Рангу';
$lang['SortBy-regdate'] = 'Дате регистрации';
$lang['SortBy-posts'] = 'Количеству сообщений';
$lang['SortBy-latest_post'] = 'Дате последнего сообщения';
$lang['SortBy-topic_title'] = 'Заголовку темы';
$lang['SortBy-forum'] = 'Форуму';
$lang['SortBy-author'] = 'Автору';
$lang['SortBy-replies'] = 'Количеству ответов';
$lang['SortBy-views'] = 'Количеству просмотров';
$lang['SortOrder-asc'] = 'По возрастанию';
$lang['SortOrder-desc'] = 'По убыванию';
$lang['NoUsersFound'] = 'Пользователи не найдены.';
$lang['SaveConfigManually'] = 'Так как config.php закрыт для записи, UseBB не может самостоятельно сохранить настройки. Пожалуйта, сохраните следующую информацию в файл config.php самостоятельно.';
$lang['ShowResultsAs'] = 'Показывать результаты в виде';
$lang['ShowMode-topics'] = 'Тем';
$lang['ShowMode-posts'] = 'Сообщений';
$lang['Mode-and'] = 'Все слова (И)';
$lang['Mode-or'] = 'Любое слово (ИЛИ)';
$lang['ExactMatch'] = 'Точное совпадение';
$lang['IncludeGuests'] = 'Включая гостей';
$lang['Action'] = 'Действие';

$lang['date_translations'] = array('Mon' => 'Пн', 'Tue' => 'Вт', 'Wed' => 'Ср', 'Thu' => 'Чт', 'Fri' => 'Пт', 'Sat' => 'Сб', 'Sun' => 'Вс', 'Monday' => 'Понедельник', 'Tuesday' => 'Вторник', 'Wednesday' => 'Среда', 'Thursday' => 'Четверг', 'Friday' => 'Пятница', 'Saturday' => 'Суббота', 'Sunday' => 'Воскресенье', 'Jan' => 'Янв', 'Feb' => 'Фев', 'Mar' => 'Мар', 'Apr' => 'Апр', 'May' => 'Май', 'Jun' => 'Июн', 'Jul' => 'Июл', 'Aug' => 'Авг', 'Sep' => 'Сен', 'Oct' => 'Окт', 'Nov' => 'Ноя', 'Dec' => 'Дек', 'January' => 'Январь', 'February' => 'Февраль', 'March' => 'Март', 'April' => 'Апрель', 'May' => 'Май', 'June' => 'Июнь', 'July' => 'Июль', 'August' => 'Август', 'September' => 'Сентябрь', 'October' => 'Октябрь', 'November' => 'Ноябрь', 'December' => 'Декабрь', 'st' => 'ое', 'nd' => 'ое', 'th' => 'ое');
?>