<?php

/*
	Copyright (C) 2003-2005 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/lang_Spanish.php,v 1.70 2005/05/21 16:31:22 pc_freak Exp $
	
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
#$lang['character_encoding'] = 'iso-8859-1';
#$lang['language_code'] = 'es';
#$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = 'Home';
$lang['YourPanel'] = 'Tu panel';
$lang['Register'] = 'Registrarse';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = 'Buscar';
$lang['ActiveTopics'] = 'Topics Activos';
$lang['LogIn'] = 'Loguearse';
$lang['LogOut'] = 'Desloguearse (%s)';
$lang['MemberList'] = 'Lista de Miembros';
$lang['StaffList'] = 'Lista del Staff';
$lang['Statistics'] = 'Estadísticas';
$lang['ContactAdmin'] = 'Contactar Admin';
$lang['Forum'] = 'Foro';
$lang['Topics'] = 'Topics';
$lang['Posts'] = 'Posts';
$lang['LatestPost'] = 'Último Post';
$lang['RSSFeed'] = 'RSS Feed';
$lang['NewPosts'] = 'Nuevos posts';
$lang['NoNewPosts'] = 'No hay nuevos posts';
$lang['LockedNewPosts'] = 'Bloqueados (nuevos posts)';
$lang['LockedNoNewPosts'] = 'Bloqueados (no hay nuevos posts)';
$lang['Locked'] = 'Bloqueados';
$lang['LastLogin'] = 'Último login';
$lang['VariousInfo'] = 'Información Varia';
$lang['IndexStats'] = 'Esta tabla contiene %d posts en %d topics posteados por %d miembros.';
$lang['NewestMemberExtended'] = 'Demos la bienvenida a: %s.';
$lang['UsersOnline'] = 'Había %d miembros (%d escondidos) y %d invitados conectados en los últimos %d minutos.';
$lang['Username'] = 'Nombre de Usuario';
$lang['CurrentPassword'] = 'Contraseña Actual';
$lang['UserID'] = 'User ID';
$lang['NoSuchForum'] = 'El foro %s no existe en esta tabla!';
$lang['WrongPassword'] = 'Lo siento, pero este password no es correcto! Pide un nuevo password mediante el formulario de login, si lo olvidaste.';
$lang['Reset'] = 'Reset';
$lang['SendPassword'] = 'Enviame un nuevo password';
$lang['RegisterNewAccount'] = 'Registrar una nueva cuenta';
$lang['RememberMe'] = 'Recordarme';
$lang['Yes'] = 'Si';
$lang['No'] = 'No';
$lang['NotActivated'] = 'Tu cuenta %s todavía no ha sido activada. Porfavor consulta tu correo para activar tu cuenta.';
$lang['Error'] = 'Error';
$lang['Profile'] = 'Perfil de %s';
$lang['Level'] = 'Nivel';
$lang['Administrator'] = 'Administrador';
$lang['Moderator'] = 'Moderador';
$lang['Registered'] = 'Registrado';
$lang['Email'] = 'Dirección de correo';
$lang['ContactInfo'] = 'Información de contacto';
$lang['Password'] = 'Contraseña';
$lang['PasswordAgain'] = 'Contraseña (otra vez)';
$lang['EverythingRequired'] = '¡Todo los campos son requeridos!';
$lang['RegisteredNotActivated'] = 'Tu cuenta %s ha sido creada. Un correo ha sido enviado a %s con las instrucciones para activar tu cuenta. Necesitas activarla antes de loguearte.';
$lang['RegisteredActivated'] = 'Tu cuenta %s ha sido creada. Un correo ha sido enviado a  %s con las instrucciones. Te puedes loguear de todas formas ahora.';
$lang['Never'] = 'Nunca';
$lang['Member'] = 'Miembro';
$lang['RegistrationActivationEmailBody'] = 'Hola,

Te damos la bienvenida desde [board_name] . Acabas de registrar una cuenta con este nombre: [account_name], pero todavía no esta activa. Porfavor clickea en el link inferior para activarla:

[activate_link]

o copia y pega en tu navegador. Una vez hecho esto, ya puedes loguearte:

login: [account_name]
contraseña: [password]

Si olvidas el password, puedes pedir otro en el formulario de login. Gracias por registrate!

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdActivationEmailSubject'] = 'Nuevo password';
$lang['NoForums'] = 'La tabla esta vacía. El administrador todavía no ha creado ningún foro.';
$lang['AlreadyActivated'] = 'La cuenta con ID %d ha sido activada.';
$lang['Activate'] = 'Activar';
$lang['Activated'] = 'Tu cuenta %s ha sido (re)activada. Ahora puedes loguearte con el nombre y el password que has recibido.';
$lang['WrongActivationKey'] = 'No hemos podido activar la cuenta con ID %d. La clave es incorrecta. ¿Estás seguro de no pedir otro password?';
$lang['RegisterIt'] = 'Puedes crearla clickeando el link \'Register\' .';
$lang['BoardClosed'] = 'Tabla cerrada';
$lang['SendpwdActivationEmailBody'] = 'Hola,

Te damos la bienvenida desde  [board_name] . Acabas de pedir un password para esta cuenta: [account_name]. Porfavor pulsa en el link inferior para reactivarla:

[activate_link]

o copy y pega en tu navegador. Una vez hecho, tu puedes loguearte:

login: [account_name]
contraseña: [password]

Si olvidas tu password, puedes pedir uno en el formulario de login. 

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailBody'] = 'Hola,

Te damos la bienvenida desde  [board_name] . Acabas de pedir un nuevo password para esta cuenta: [account_name]. Puedes loguearte usando este login y password:

login: [account_name]
contraseña: [password]

Si olvidas la contraseña, puedes pedir otro en el formulario de login. 

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Nuevo password';
$lang['SendpwdActivated'] = 'Tu nuevo password para tu cuenta %s ha sido enviado a %s. Ya puedes loguearte con el nuevo password.';
$lang['SendpwdNotActivated'] = 'El nuevo password para tu cuenta %s ha sido enviado a %s, junto con la información para reactivar tu cuenta.';
$lang['ForumIndex'] = 'Índice del foro';
$lang['MissingFields'] = 'Los siguientes campos estan vacíos o son incorrectos: %s.';
$lang['TermsOfUseContent'] = 'Le hacemos saber que todos los post encontrados en esta tabla son opiniones de los autores y no del website\'s webmasters, administradores del foro o moderadores, excepto los posts escritos por ellos.

Te comprometes a no postear contenido ofensivo, obsceno o inapropiado. También queda prohibido el contenido que este al margen de la ley en estos foros. Haciéndolo puede ocurrir que tu cuenta en los foros pueda ser banneada o borrada e incluso tu isp puede tomar medidas contra ti. De todas formas, tu dirección IP address es guardada cada vez que realizas un post. También estas de acuerdo en que los administradores y moderadores tienen permiso para editar, borrar, mover o bloquear los topics cuando ellos crean que es necesario.

Toda la información que postees en este foro se almacena en una base de datos para futuras referencias. Los administrados no distribuirán esta información sin tu permiso solamente lo harán por obligación legal. Sin embargo, ni los webmasters, administradores, moderadores, ni el equipo de UseBB pueden hacerse responsables cuando cualquier información pueda ser robada como resultado de un ataque hacker.

Este foro usa cookies para almacenar información temporal  en tu ordenador local necesaria por el sistema de foros. También, una cookie puede almacenar tu user ID y tu password en un formulario encriptado para activar el logueo automático de cuenta si optas por ello. Si no quieres que se almacene ninguna cookie en tu ordenador, configura tu navegador manualmente inhabilitando las cookies.

Clickeando en el botón "Yo acepto", tu aceptas estos términos y condiciones.';
$lang['TermsOfUse'] = 'Condiciones de uso';
$lang['RegistrationActivationEmailSubject'] = 'Activación de cuenta';
$lang['NeedToBeLoggedIn'] = 'Necesitas loguearte para hacer esto. Cliquea en \'Log In\' link para loguearte o en \'Register\' para crear una nueva cuenta.';
$lang['WrongEmail'] = 'Lo siento, pero %s no es la dirección de correo correcta de la cuenta %s. Si no puedes recordad tu dirección de correo, porfavor contacta con el administador de los foros.';
$lang['Topic'] = 'Topic';
$lang['Author'] = 'Autor';
$lang['Replies'] = 'Replies';
$lang['Views'] = 'Views';
$lang['Note'] = 'Note';
$lang['Hidden'] = 'Escondido';
$lang['ACP'] = 'Panel de control Admin';
$lang['SendMessage'] = 'Envia un mensaje';
$lang['NoViewableForums'] = 'No tienes permiso para ver cualquier foro con este nivel de usuario. Si no estas logueado, hazlo. Si estas logueado, probablemente no deberías estar aquí.';
$lang['Rank'] = 'Ranking';
$lang['Location'] = 'Localización';
$lang['Website'] = 'Página Web';
$lang['Occupation'] = 'Ocupación';
$lang['Interests'] = 'Intereses';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber';
$lang['BannedIP'] = 'Tu dirección IP %s ha sido baneada de esta tabla.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'Avatar URL';
$lang['BannedUser'] = 'Cuenta de usuario baneada';
$lang['BannedUserExplain'] = 'Tu cuenta %s ha sido baneada de este foro. La razón es:';
$lang['BannedUsername'] = 'EL usuario %s ha sido baneado de este foro. Porfavor elija otro.';
$lang['BannedEmail'] = 'La dirección de correo %s ha sido baneada. Porfavor elija otra.';
$lang['PostsPerDay'] = 'Post por día';
$lang['BoardClosedOnlyAdmins'] = 'Sólo los administradores pueden loguearse cuando el foro esta cerrado.';
$lang['NoPosts'] = 'Ningún Posts';
$lang['NoActivetopics'] = 'Esta tabla no tiene actualmente ningún post activo.';
$lang['AuthorDate'] = 'Por %s en %s';
$lang['ByAuthor'] = 'Por: %s';
$lang['OnDate'] = 'en: %s';
$lang['Re'] = 'Re:';
$lang['MailForm'] = 'Envia un correo a %s';
$lang['SendEmail'] = 'Envia un mensaje a %s';
$lang['NoMails'] = 'Este usuario ha elegido no recibir ningún correo.';
$lang['UserEmailBody'] = 'Hola,

Te damos la bienvenida desde [board_name] . El usuario [username] ha enviado este mensaje desde el foro. El mensaje es el siguiente.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = '¡Tu correo a %s se ha realizado con éxito!';
$lang['To'] = 'a';
$lang['From'] = 'Desde';
$lang['Subject'] = 'Asunto';
$lang['Body'] = 'Cuerpo del mensaje';
$lang['Send'] = 'Enviar';
$lang['EditProfile'] = 'Editar Perfil';
$lang['EditOptions'] = 'Editar Opciones';
$lang['EditPasswd'] = 'Editar Password';
$lang['PanelHome'] = 'Panel Control';
$lang['NewEmailNotActivated'] = 'El perfil ha sido editado con éxito. Al haber cambiado el correo electrónico de tu cuenta %s, es necesario reactivarla. Un correo se te ha enviado %s con las instrucciones necesarias. Ahora usted saldrá de la sesión.';
$lang['Required'] = 'Requerido';
$lang['ViewProfile'] = 'Ver Perfil';
$lang['NewEmailActivationEmailBody'] = 'Hola,

Te damos la bienvenida desde [board_name] . Usted acaba de cambiar la dirección de correo electrónico de su cuenta [account_name], pero no ha sido reactivada todavía. Porfavor haga click en el link inferior para reactivarla:

[activate_link]

o copie y pegue en su navegador. Después puede loguearse con este login y password:

login: [account_name]
contraseña: [password]
Si olvidas tu contraseña, Si olvidas tu contraseña puedes pedir otra en el formulario de login.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Reactivación de la Cuenta';
$lang['Signature'] = 'Firma';
$lang['SessionInfo'] = 'Información de la Sesión';
$lang['SessionID'] = 'Session ID';
$lang['IPAddress'] = 'Dirección IP';
$lang['Seconds'] = 'Segundos';
$lang['Updated'] = 'Actualizado';
$lang['Pages'] = 'Páginas';
$lang['AutoLogin'] = 'Auto login';
$lang['Enabled'] = 'Activado';
$lang['Disabled'] = 'Desactivado';
$lang['Enable'] = 'Activar';
$lang['Disable'] = 'Desactivar';
$lang['AutoLoginSet'] = 'El auto login ha sido activado.';
$lang['AutoLoginUnset'] = 'El auto login ha sido desactivado.';
$lang['RegistrationEmailBody'] = 'Hola,

Te damos la bienvenida desde [board_name] . Acabas de registrar una cuenta con este nombre [account_name]. Puedes loguearte usando login y contraseña:

login: [account_name]
contraseña: [password]

Si olvidas la contraseña, puedes pedir una en el formulario de login. ¡Gracias por registrate!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Registro de Cuenta';
$lang['PublicEmail'] = 'Cuenta de correo pública';
$lang['PublicLastLogin'] = 'última vez que alguien se logueo';
$lang['DateFormat'] = 'Formato Fecha';
$lang['DateFormatHelp'] = 'El formato de fecha es igual a %s función en PHP.';
$lang['Again'] = 'Otra vez';
$lang['NewPassword'] = 'Nueva contraseña';
$lang['NewPasswordAgain'] = 'Nueva contraseña (otra vez)';
$lang['PasswordEdited'] = 'Tu contraseña ha sido editada correctamente.';
$lang['DetailedOnlineList'] = 'Lista detallada online';
$lang['Detailed'] = 'Detailed';
$lang['OptionsEdited'] = 'Las opciones del foro se han editado correctamente.';
$lang['ProfileEdited'] = 'Tu perfil se ha editado correctamente.';
$lang['Started'] = 'Comenzado';
$lang['Minutes'] = 'Minutps';
$lang['Hours'] = 'Houras';
$lang['Days'] = 'Días';
$lang['Weeks'] = 'Semanas';
$lang['TotalTime'] = 'Tiempo total';
$lang['NoTopics'] = 'Este foro no contiene topics. ¡Podrías ser el primero en postear!';
$lang['NotPermitted'] = 'No tienes los permisos adecuados para hacer esto. Si tienes alguna duda, contacta con el Administrador.';
$lang['Language'] = 'Lenguaje';
$lang['Template'] = 'Aspecto';
$lang['NoSuchMember'] = 'El socio %s no existe en este foro.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Esta característica ha sido deshabilitada porque este foro no puede almacenar cookies con tu navegador actual.';
$lang['LogOutConfirm'] = '¿Estás seguro de que quieres salir? ¡El autologin será eliminado!';
$lang['Cancel'] = 'Cancelar';
$lang['Timezone'] = 'Zona horaria';
$lang['DST'] = 'Activar Horario de Verano';
$lang['Sticky'] = 'Sticky';
$lang['PostNewTopic'] = 'Nuevo Topic';
$lang['ForumIsLocked'] = 'Foro bloqueado';
$lang['NoSuchTopic'] = 'El topic %s no existe en este foro.';
$lang['PostReply'] = 'Post Reply';
$lang['TopicIsLocked'] = 'Topic esta bloqueado';
$lang['Post'] = 'Post';
$lang['Edit'] = 'Editar';
$lang['Delete'] = 'Borrar';
$lang['Quote'] = 'Cuota';
$lang['Wrote'] = '%s escribió';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'En el topic que estas intentado postear esta bloqueado. Sólo gente autorizada puede postear.';
$lang['Content'] = 'Contenido';
$lang['Options'] = 'Opciones';
$lang['EnableBBCode'] = 'Activar BBCode.';
$lang['EnableSmilies'] = 'Activar smilies.';
$lang['EnableSig'] = 'Activar firma.';
$lang['EnableHTML'] = 'Activar HTML.';
$lang['LockTopicAfterPost'] = 'Bloquear topic después de postear.';
$lang['Guest'] = 'Invitado';
$lang['BackToPrevious'] = 'Volver a la página anterior';
$lang['NoSuchPost'] = 'El post %s ya no existe en este foro.';
$lang['UserPostedImage'] = 'El usuario posteó una imagen';
$lang['ForumIsLockedExplain'] = 'Este foro esta bloqueado. Sólo gente autorizada puede postear.';
$lang['MakeTopicSticky'] = 'Haz este topic sticky.';
$lang['QuickReply'] = 'Reply rápido';
$lang['ReturnToTopicAfterPosting'] = 'Volver al topic después de postear';
$lang['ModeratorList'] = 'Moderadores: %s.';
$lang['Nobody'] = 'Nadie';
$lang['DeleteTopic'] = 'Borrar topic';
$lang['MoveTopic'] = 'Mover topic';
$lang['LockTopic'] = 'Bloquear topic';
$lang['UnlockTopic'] = 'Desbloquear topic';
$lang['MakeSticky'] = 'Hacer sticky';
$lang['ConfirmDeleteTopic'] = '¿ Estás seguro de querer borrar el topic %s en el foro %s? ¡Esto será irreversible!';
$lang['MakeNormalTopic'] = 'Haz normal el topic';
$lang['OldForum'] = 'Foro antiguo';
$lang['NewForum'] = 'Nuevo foro';
$lang['IAccept'] = 'Yo acepto';
$lang['IDontAccept'] = 'No acepto';
$lang['OpenLinksNewWindow'] = 'Abrir links en ventanas nuevas';
$lang['HideAllAvatars'] = 'Ocultar todos los avatares';
$lang['HideUserinfo'] = 'Ocultar la información del usuario';
$lang['HideAllSignatures'] = 'Ocultar todas las firmas';
$lang['HideFromOnlineList'] = 'Ocultar de la lista online';
$lang['PageLinks'] = 'Página: %s';
$lang['Preview'] = 'Previsualizar';
$lang['DeletePost'] = 'Borrar post';
$lang['ConfirmDeletePost'] = '¿Estás seguro de que querer borrar este post en el topic %s? ¡Esto será irreversible!';
$lang['EditPost'] = 'Editar post';
$lang['PostEditInfo'] = 'Último en editar %s en %s.';
$lang['PasswdInfo'] = 'La contraseña sólo puede contener carácteres alfanuméricos y una longitud mínima de %d carácteres.';
$lang['SubscribeTopic'] = 'Suscribirse';
$lang['UnsubscribeTopic'] = 'Desuscribirse';
$lang['NewReplyEmailBody'] = 'Hola,

Te damos la bienvenida desde [board_name] . Alguien ([poster_name]) posteó una réplica al topic que esta subscríto ("[topic_title]"). Para ver la réplica, porfavor clickea en el link siguiente: [topic_link].

Clickea en el siguiente link si quieres desuscribirte (requiere login): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Nueva Réplica en "%s"';
$lang['SubscribedTopic'] = 'Ahora estás suscrito a este topic.';
$lang['UnsubscribedTopic'] = 'Ya no estás suscrito a este topic.';
$lang['SubscribeToThisTopic'] = 'Suscribirse a este topic.';
$lang['OK'] = 'Aceptar';
$lang['Subscriptions'] = 'Suscripciones';
$lang['NoSubscribedTopics'] = 'Actualmente no estás suscrito a ningún topic.';
$lang['LatestUpdate'] = 'Última actualización';
$lang['Unknown'] = 'Desconocido';
$lang['PostingTopic'] = 'Posteando un topic en %s';
$lang['PostingReply'] = 'Posteando una réplica en %s';
$lang['MovingTopic'] = 'Moviendo topic %s';
$lang['DeletingTopic'] = 'Borrando topic %s';
$lang['TrashingTopic'] = 'Eliminando topic %s';
$lang['EditingPost'] = 'Editando post en %s';
$lang['DeletingPost'] = 'Borrando post en %s';
$lang['DebugMode'] = 'Modo Debug';
$lang['ParseTime'] = 'Parse time';
$lang['ServerLoad'] = 'Carga del Servidor';
$lang['TemplateSections'] = 'Sección Aspecto (temas)';
$lang['SQLQueries'] = 'SQL queries';
$lang['RealName'] = 'Nombre Real';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administradores';
$lang['Moderators'] = 'Moderadores';
$lang['SortBy'] = 'Ordenado por: %s';
$lang['TopicReview'] = 'Revisión de Topic';
$lang['ViewMorePosts'] = 'Ver más posts';
$lang['DisplayedName'] = 'Nombre mostrado';
$lang['UsernameInfo'] = 'El nombre mostrado solo puede tener carácteres alfanuméricos, _ y - (no espacios).';
$lang['Code'] = 'Código';
$lang['Img'] = 'Imagen';
$lang['URL'] = 'URL';
$lang['Color'] = 'Color';
$lang['Size'] = 'Tamaño';
$lang['ViewingForum'] = 'Viendo foro: %s.';
$lang['ViewingTopic'] = 'Viendo topic: %s.';
$lang['FloodIntervalWarning'] = 'El administrador ha especificado que sólo puedes postear con un intérvalo de %d segundos. Porfavor espere y repita el envío un poco más tarde.';
$lang['AutoSubscribe'] = 'Auto suscribir';
$lang['OnPostingNewTopics'] = 'En los nuevos topics';
$lang['OnPostingNewReplies'] = 'En las nuevas réplicas';
$lang['UnsubscribeSelected'] = 'Desuscribirse de lo seleccionado';
$lang['SelectedTopicsUnsubscribed'] = 'Ahora ya no estás suscrito a los topics seleccionados.';
$lang['TrashTopic'] = 'Topic basura';
$lang['ConfirmTrashTopic'] = '¿Estás seguro de que quieres mover el topic %s del foro %s a la basura?';
$lang['Birthday'] = 'Cumpleaños';
$lang['Age'] = 'Edad';
$lang['Month'] = 'Mes';
$lang['Day'] = 'Día';
$lang['PoweredBy'] = '%s gracias a %s';
$lang['GeneralStats'] = 'Estadísticas generales';
$lang['Members'] = 'Miembros';
$lang['TopicsPerDay'] = 'Topics por día';
$lang['MembersPerDay'] = 'Miembros por día';
$lang['BoardStarted'] = 'Tabla empezada';
$lang['BoardAge'] = 'Tiempo de la tabla';
$lang['NewestMember'] = 'Nuevo Miembro';
$lang['MostActiveTopics'] = 'Topics más activos';
$lang['MostViewedTopics'] = 'Topics más vistos';
$lang['PostsPerMember'] = 'Posts por miembro';
$lang['PostsPerForum'] = 'Posts por foro';
$lang['Categories'] = 'Categorías';
$lang['Forums'] = 'Foros';
$lang['TopicsPerMember'] = 'Topics por miembros';
$lang['TopicsPerForum'] = 'Topics por foros';
$lang['MostActiveMembers'] = 'Miembros más activos';
$lang['MostActiveForums'] = 'Foros más activos';
$lang['DisplayedNameTaken'] = 'Lo siento, %s ya ha sido registrado como login, escoja otro.';
$lang['SearchKeywords'] = 'Buscar palabras clave';
$lang['SearchMode'] = 'Modo de búsqueda';
$lang['SearchAuthor'] = 'Buscar por autor';
$lang['SearchForums'] = 'Buscar foro';
$lang['AllForums'] = 'Todos los foros';
$lang['AllKeywords'] = 'Todas las palabras clave';
$lang['OneOrMoreKeywords'] = 'Una o más palabras clave';
$lang['NoSearchResults'] = 'Lo siento, pero no hubo resultados con este criterio.';
$lang['SearchMembersPosts'] = 'Buscar posts';
$lang['CurrentPage'] = 'Página actual';

?>
