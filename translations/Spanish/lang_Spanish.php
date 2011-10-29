<?php

/*
	Copyright (C) 2003-2010 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/lang_English.php,v 1.131 2010/08/22 19:50:15 pc_freak Exp $
	
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
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

	***Traducido al español por Javier Rivero (jarive) de USEBB HISPANO en http://www.usebbhispano.co.cc
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
#$lang['character_encoding'] = 'iso-8859-15';
#$lang['language_code'] = 'es';
#$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = 'Inicio';
$lang['YourPanel'] = 'Tu Panel';
$lang['Register'] = 'Registrar';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = 'Buscar';
$lang['ActiveTopics'] = 'Temas Activos';
$lang['LogIn'] = 'Entrar';
$lang['LogOut'] = 'Salir (%s)';
$lang['MemberList'] = 'Miembros';
$lang['StaffList'] = 'Staff List';
$lang['Statistics'] = 'Estadísticas';
$lang['ContactAdmin'] = 'Contactar Administrador';
$lang['Forum'] = 'Foro';
$lang['Topics'] = 'Temas';
$lang['Posts'] = 'Mensajes';
$lang['LatestPost'] = 'Ultimo Mensaje';
$lang['RSSFeed'] = 'RSS Feed';
$lang['NewPosts'] = 'Nuevos Mensajes';
$lang['NoNewPosts'] = 'No hay nuevos mensajes';
$lang['LockedNewPosts'] = 'Bloqueado (nuevos mensajes)';
$lang['LockedNoNewPosts'] = 'Bloqueado (no hay nuevos mensajes)';
$lang['Locked'] = 'Bloqueado';
$lang['LastLogin'] = 'Ultima entrada';
$lang['VariousInfo'] = 'Información Variada';
$lang['IndexStats'] = 'Esta comunidad contiene %d mensajes en %d temas y tiene %d miembros registrados.';
$lang['NewestMemberExtended'] = 'Bienvenido a nuestro miembro más reciente: %s.';
$lang['Username'] = 'Usuario';
$lang['CurrentPassword'] = 'Contraseña actual';
$lang['UserID'] = 'ID de Usuario';
$lang['NoSuchForum'] = 'El foro %s no existe (nunca más) en esta comunidad!';
$lang['WrongPassword'] = 'Lo sentimos, pero que la contraseña no es correcta! Solicite una nueva contraseña a través del formulario de acceso si la ha olvidado.';
$lang['Reset'] = 'Reset';
$lang['SendPassword'] = 'Enviar una nueva contraseña';
$lang['RegisterNewAccount'] = 'Registrar una nueva cuenta';
$lang['RememberMe'] = 'Recordarme';
$lang['Yes'] = 'Si';
$lang['No'] = 'No';
$lang['NotActivated'] = 'Tu cuenta %s no ha sido activada aun. Por favor revise su buzón de correo electrónico que usted registró con en este foro para obtener instrucciones sobre cómo activar su cuenta.';
$lang['Error'] = 'Error';
$lang['Profile'] = 'Perfil de %s';
$lang['Level'] = 'Nivel';
$lang['Administrator'] = 'Administrador';
$lang['Moderator'] = 'Moderador';
$lang['Registered'] = 'Registrado';
$lang['Email'] = 'Correo Electrónico';
$lang['ContactInfo'] = 'Información de Contacto';
$lang['Password'] = 'Contraseña';
$lang['PasswordAgain'] = 'Contraseña (otra vez)';
$lang['EverythingRequired'] = 'Todos los campos son obligatorios!';
$lang['RegisteredNotActivated'] = 'Tu cuenta %s ha sido creada. Un correo electrónico ha sido enviado a %s con las instrucciones sobre cómo activar su cuenta. Usted necesita activarla para iniciar sesión con su cuenta.';
$lang['RegisteredActivated'] = 'Tu cuenta %s ha sido creada. Puedes acceder cuando quieras.';
$lang['Never'] = 'Nunca';
$lang['Member'] = 'Miembro';
$lang['RegistrationActivationEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. Usted acaba de registrar una cuenta llamada [account_name], pero no esta activada aún. Por favor, haga clic en el enlace de abajo para activar su cuenta:

[activate_link]

o copie y peguelo en su navegador. Luego podra iniciar la sesión usando el siguiente usuario y contraseña:

Usuario: [account_name]
Contraseña: [password]

Si olvidó su contraseña, usted puede solicitar una nueva a través del enlace en el formulario de entrada. Gracias por registrarse!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'Esto es una comunidad vacia. El administrador aún no ha creado algun foro.';
$lang['AlreadyActivated'] = 'La cuenta con ID %d ha sido activada.';
$lang['Activate'] = 'Activar';
$lang['Activated'] = 'Tu cuenta %s ha sido (re)activada. Usted entrará de forma automática.';
$lang['WrongActivationKey'] = 'No hemos podido activar su cuenta con ID %d. La clave de activación es incorrecta. ¿Está seguro de que no ha solicitado una nueva contraseña en el algún momento?';
$lang['RegisterIt'] = 'Usted puede crearlo a través del \'Register\' de enlace.';
$lang['BoardClosed'] = 'Comunidad cerrada';
$lang['SendpwdEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. Usted ha solicitado una nueva contraseña para la cuenta [account_name]. Usted puede entrar usando este usuario y contraseña:

Usuario: [account_name]
Contraseña: [password]

Si no recuerda su contraseña, puede solicitar una nueva a través del enlace en el formulario de entrada.. 

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Nueva Contraseña';
$lang['SendpwdActivated'] = 'La nueva contraseña para su cuenta %s ha sido enviada a %s. Usted está ahora en condiciones de ingresar con su nueva contraseña.';
$lang['ForumIndex'] = 'Foros de discusión';
$lang['MissingFields'] = 'Los siguientes campos requeridos estan perdido o incorrectos: %s.';
$lang['TermsOfUseContent'] = 'Usted reconoce que todos los mensajes encontrados en este foro son las opiniones de sus autores y no del webmaster del sitio, los administradores o moderadores del foro, con excepción de los mensajes escritos por cada uno de ellos.

Usted acepta no publicar material abusivo, ofensivo, obsceno o de contenido inapropiado o contenido que está prohibido por la ley en estos foros. Si lo hace, puede hacer que su cuenta en estos foros sea borrada, y si reitera en su comportamiento será notificado de su comportamiento a su proveedor de internet. Por lo tanto, su dirección IP se almacena con todos los envíos que usted pone. También acepta que los administradores y moderadores tienen permiso para editar, borrar, mover o bloquear sus temas cuando se piensa que esto es necesario.

Toda la información que escriba en estos foros se almacena en una base de datos para futuras referencias. El administrador del foro no redistribuirá esta información sin su permiso o por obligación de cuestiones jurídicas. Sin embargo, ni el webmaster, administradores o moderadores, ni el Equipo de UseBB pueden ser considerados responsables cuando la información se filtró como resultado de un intento de "hacking".

Esta comunidad utiliza cookies para almacenar información temporal que necesita el sistema de foros en el equipo local. Además, una cookie puede almacenar su nombre de usuario y su contraseña en forma encriptada para permitir la conexión automática de su cuenta, si opta por permitir esto. Si no quieres que las cookies se almacenen en su ordenador, consulte el manual de su navegador acerca de cómo deshabilitar las cookies

Al pulsar en "Acepto", usted está de acuerdo con estos términos y condiciones.';
$lang['TermsOfUse'] = 'Terminos De Uso';
$lang['RegistrationActivationEmailSubject'] = 'Activación de la cuenta';
$lang['NeedToBeLoggedIn'] = 'You need to be logged in to do this. Click the \'Log In\' link to log in or \'Register\' to create a new account.';
$lang['WrongEmail'] = 'Sorry, but %s isn\'t the correct e-mail address for your account %s. If you can\'t remember your e-mail address, please contact the board admin.';
$lang['Topic'] = 'Tema';
$lang['Author'] = 'Autor';
$lang['Replies'] = 'Respuestas';
$lang['Views'] = 'Vistas';
$lang['Note'] = 'Nota';
$lang['Hidden'] = 'Oculto';
$lang['ACP'] = 'ACP';
$lang['SendMessage'] = 'Enviar un mensaje';
$lang['NoViewableForums'] = 'Usted no tiene permiso para ver cualquier foro con el nivel de este usuario. Si no está registrado, hágalo. Si usted se ha identificado, probablemente no debería estar aquí.';
$lang['Rank'] = 'Rango';
$lang['Location'] = 'Localización';
$lang['Website'] = 'Pagina Web';
$lang['Occupation'] = 'Ocupación';
$lang['Interests'] = 'Intereses';
$lang['MSNM'] = 'Windows Live Messenger';
$lang['YahooM'] = 'Yahoo! Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'Su dirección IP %s ha sido expulsada de este foro.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'Avatar URL';
$lang['BannedUser'] = 'Cuenta Expulsada';
$lang['BannedUserExplain'] = 'Su cuenta %s ha sido expulsada de este foro. La razón es:';
$lang['BannedUsername'] = 'El nombre de usuario %s ha sido expulsado de este foro. Por favor elija otro.';
$lang['BannedEmail'] = 'El correo electronico %s ha sido expulsado de este foro. Por favor elija otro.';
$lang['PostsPerDay'] = 'Mensajes por día';
$lang['BoardClosedOnlyAdmins'] = 'Sólo los administradores pueden iniciar sesión cuando el foro está cerrado.';
$lang['NoPosts'] = 'Ningún mensaje';
$lang['NoActivetopics'] = 'Esta foro no tiene actualmente ningún tema activo.';
$lang['AuthorDate'] = 'Por %s en %s';
$lang['ByAuthor'] = 'Por: %s';
$lang['OnDate'] = 'En: %s';
$lang['Re'] = 'Re:';
$lang['MailForm'] = 'Enviar un e-mail a %s';
$lang['SendEmail'] = 'Enviar un mensaje a %s';
$lang['NoMails'] = 'Este usuario ha elegido no recibir correos electrónicos.';
$lang['UserEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. El usuario [username] le ha enviado este mensaje a través del foro. El mensaje dice lo siguiente.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'El correo electronico a %s ha sido enviado con éxito!';
$lang['To'] = 'A';
$lang['From'] = 'De';
$lang['Subject'] = 'Asunto';
$lang['Body'] = 'Cuerpo';
$lang['Send'] = 'Enviar';
$lang['EditProfile'] = 'Editar Perfil';
$lang['EditOptions'] = 'Editar Opciones';
$lang['EditPasswd'] = 'Editar Contraseña';
$lang['PanelHome'] = 'Panel Inicio';
$lang['NewEmailNotActivated'] = 'Tu perfil ha sido editado con éxito. Como has cambiado el correo electronico de tu cuenta %s, necesitas reactivarla. Un correo electronico ha sido enviado a %s con instrucciones de como hacer esto. La sesión se cerrará en breves momentos.';
$lang['Required'] = 'Requerido';
$lang['ViewProfile'] = 'Ver Perfil';
$lang['NewEmailActivationEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. Usted acaba de modificar la dirección de correo electrónico de su cuenta [account_name], pero no se ha reactivado aún. Por favor, haga clic en el siguiente enlace para reactivar su cuenta:

[activate_link]

o copie y peguelo en su navegador.

Si olvidó su contraseña, usted puede solicitar una nueva a través del enlace en el formulario de entrada.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Reactivación de la cuenta';
$lang['Signature'] = 'Firma';
$lang['SessionInfo'] = 'Información de la sesión';
$lang['SessionID'] = 'ID de Sesión';
$lang['IPAddress'] = 'Dirección IP';
$lang['Seconds'] = 'Segundos';
$lang['Updated'] = 'Actualizado';
$lang['Pages'] = 'Paginas';
$lang['AutoLogin'] = 'Inicio de Sesión Automatico';
$lang['Enabled'] = 'Activado';
$lang['Disabled'] = 'Desactivado';
$lang['Enable'] = 'Activado';
$lang['Disable'] = 'Desactivado';
$lang['AutoLoginSet'] = 'La cookie de inicio de sesión automático ya se ha establecido.';
$lang['AutoLoginUnset'] = 'La cookie de inicio de sesión automático ha sido desactivada.';
$lang['RegistrationEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. Usted acaba de registrar una cuenta llamada [account_name]. Puede iniciar sesión usando este nombre de usuario y contraseña:

Username: [account_name]
Password: [password]

Si olvidó su contraseña, usted puede solicitar una nueva a través del enlace en el formulario de entrada. Gracias por registrarte!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Registro de Cuenta';
$lang['PublicEmail'] = 'Dirección de correo electrónico publica';
$lang['PublicLastLogin'] = 'Día de la última visita pública';
$lang['DateFormat'] = 'Formato de fecha';
$lang['DateFormatHelp'] = 'La sintaxis de formato de fecha es igual a %s la función en PHP.';
$lang['Again'] = 'Otra vez';
$lang['NewPassword'] = 'Nueva contraseña';
$lang['NewPasswordAgain'] = 'Nueva contraseña (otra vez)';
$lang['PasswordEdited'] = 'Su contraseña ha sido modificada con éxito.';
$lang['DetailedOnlineList'] = 'Lista detallada en línea';
$lang['Detailed'] = 'Detallada';
$lang['OptionsEdited'] = 'Sus opciones del foro han sido modificadas con éxito.';
$lang['ProfileEdited'] = 'Tu perfil ha sido modificado con éxito.';
$lang['Started'] = 'Iniciado';
$lang['Minutes'] = 'Minutos';
$lang['Hours'] = 'Horas';
$lang['Days'] = 'Dias';
$lang['Weeks'] = 'Semanas';
$lang['TotalTime'] = 'Tiempo total';
$lang['NoTopics'] = 'Este foro no contiene ningún tema. Usted puede publicar el primero!';
$lang['NotPermitted'] = 'No tiene los permisos adecuados para hacerlo. En caso de duda, contacte con el administrador.';
$lang['Language'] = 'Lenguaje';
$lang['Template'] = 'Plantilla';
$lang['NoSuchMember'] = 'El miembro %s no existe (ya) en este foro.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Esta función está desactivada, porque este foro no puede establecer o leer las cookies en tu navegador.';
$lang['LogOutConfirm'] = '¿Está seguro que desea salir?';
$lang['Cancel'] = 'Cancelar';
$lang['Timezone'] = 'Zona Horaria';
$lang['DST'] = 'Horario de Verano';
$lang['Sticky'] = 'Pegado';
$lang['PostNewTopic'] = 'Nuevo Tema';
$lang['ForumIsLocked'] = 'El foro está cerrado';
$lang['NoSuchTopic'] = 'El tema %s no existe (ya) en este foro.';
$lang['PostReply'] = 'Responder';
$lang['TopicIsLocked'] = 'El tema está cerrado';
$lang['Post'] = 'Mensaje';
$lang['Edit'] = 'Editar';
$lang['Delete'] = 'Borrar';
$lang['Quote'] = 'Citar';
$lang['Wrote'] = '%s escribió';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'El tema que en el que estás intentando escribir un mensaje está bloqueado. Solamente las personas autorizadas pueden enviar respuestas.';
$lang['Content'] = 'Contenido';
$lang['Options'] = 'Opciones';
$lang['EnableBBCode'] = 'Habilitar BBCode.';
$lang['EnableSmilies'] = 'Habilitar smilies.';
$lang['EnableSig'] = 'Activar Firma.';
$lang['EnableHTML'] = 'Activar HTML.';
$lang['LockTopicAfterPost'] = 'Bloquear tema después de publicar.';
$lang['Guest'] = 'Invitado';
$lang['BackToPrevious'] = 'Volver a la página anterior';
$lang['NoSuchPost'] = 'El mensaje %s no existe (ya) en este foro.';
$lang['UserPostedImage'] = 'El usuario fijó la imagen';
$lang['ForumIsLockedExplain'] = 'Este foro está bloqueado. Solamente las personas autorizadas pueden publicar nuevos temas.';
$lang['MakeTopicSticky'] = 'Pegar el tema.';
$lang['QuickReply'] = 'Respuesta rapida';
$lang['ReturnToTopicAfterPosting'] = 'Regresar al tema después de publicar';
$lang['ModeratorList'] = 'Moderadores: %s.';
$lang['Nobody'] = 'Nadie';
$lang['DeleteTopic'] = 'Borrar tema';
$lang['MoveTopic'] = 'Mover tema';
$lang['LockTopic'] = 'Bloquear tema';
$lang['UnlockTopic'] = 'Desbloquear tema';
$lang['MakeSticky'] = 'Pegar';
$lang['ConfirmDeleteTopic'] = '¿Está seguro que desea eliminar el tema %s en el foro %s? Esto es irreversible!';
$lang['MakeNormalTopic'] = 'Despegar';
$lang['OldForum'] = 'Antiguo foro';
$lang['NewForum'] = 'Nuevo foro';
$lang['IAccept'] = 'Acepto';
$lang['IDontAccept'] = 'No acepto';
$lang['OpenLinksNewWindow'] = 'Abrir enlaces externos en nueva ventana';
$lang['HideAllAvatars'] = 'Ocultar todos los avatares';
$lang['HideUserinfo'] = 'Ocultar la información del usuario';
$lang['HideAllSignatures'] = 'Ocultar todas las firmas';
$lang['HideFromOnlineList'] = 'Ocultar la lista en linea';
$lang['PageLinks'] = 'Pagina: %s';
$lang['Preview'] = 'Previsualizar';
$lang['DeletePost'] = 'Borrar mensaje';
$lang['ConfirmDeletePost'] = '¿Estás seguro que quieres eliminar este mensaje en el tema %s? Esto es irreversible!';
$lang['EditPost'] = 'Editar mensaje';
$lang['PostEditInfo'] = 'Ultima edición por %s en %s.';
$lang['PasswdInfo'] = 'La contraseña sólo puede contener caracteres alfanuméricos y tener una longitud mínima de %d caracteres.';
$lang['SubscribeTopic'] = 'Suscribir';
$lang['UnsubscribeTopic'] = 'Darse de baja';
$lang['NewReplyEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. Alguien ([poster_name]) ha publicado una respuesta en el tema que estas suscrito ("[topic_title]"). Para ver la respuesta, por favor pulsa en el siguiente enlace: [topic_link].

Pulse en el siguiente enlace si desea darse de baja de este tema (requiere identificarse): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Nueva respuesta en "%s"';
$lang['SubscribedTopic'] = 'Tu estas ahora suscrito a este tema.';
$lang['UnsubscribedTopic'] = 'Tu estas ahora dado de baja de este tema.';
$lang['SubscribeToThisTopic'] = 'Suscribete a este tema.';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = 'Suscripciones';
$lang['NoSubscribedTopics'] = 'Actualmente no estás suscrito a ningún tema.';
$lang['LatestUpdate'] = 'Última actualización';
$lang['Unknown'] = 'Desconocido';
$lang['PostingTopic'] = 'Publicar un tema en %s';
$lang['PostingReply'] = 'Publicar una respuesta en %s';
$lang['MovingTopic'] = 'Moviendo tema %s';
$lang['DeletingTopic'] = 'Borrando tema %s';
$lang['EditingPost'] = 'Editando mensaje en %s';
$lang['DeletingPost'] = 'Borrando mensaje en %s';
$lang['DebugMode'] = 'Modo de depuración';
$lang['ParseTime'] = 'Analizar el tiempo';
$lang['ServerLoad'] = 'Carga del servidor';
$lang['TemplateSections'] = 'Secciones de Plantillas';
$lang['SQLQueries'] = 'SQL consultas';
$lang['RealName'] = 'Nombre real';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administradores';
$lang['Moderators'] = 'Moderadores';
$lang['TopicReview'] = 'Revisar tema';
$lang['ViewMorePosts'] = 'Ver mas mensajes';
$lang['DisplayedName'] = 'Nombre a mostrar';
$lang['UsernameInfo'] = 'Un nombre de usuario sólo pueden contener caracteres alfanuméricos, espacios, _ y -.';
$lang['Code'] = 'Codigo';
$lang['Img'] = 'Img';
$lang['URL'] = 'URL';
$lang['Color'] = 'Color';
$lang['Size'] = 'Tamaño';
$lang['ViewingForum'] = 'Foro: %s';
$lang['ViewingTopic'] = 'Tema: %s';
$lang['FloodIntervalWarning'] = 'El administrador ha especificado que sólo se pueden escribir con intervalos de %d segundos. Por favor espera por lo menos %d segundos antes de volver a presentar el formulario.';
$lang['AutoSubscribe'] = 'Auto suscribir';
$lang['OnPostingNewTopics'] = 'En los temas que publicar';
$lang['OnPostingNewReplies'] = 'En las respuestas que publicar';
$lang['UnsubscribeSelected'] = 'Anular seleccionados';
$lang['SelectedTopicsUnsubscribed'] = 'Ahora está de baja de los temas seleccionados.';
$lang['Birthday'] = 'Cumpleaños';
$lang['Age'] = 'Edad';
$lang['Month'] = 'Mes';
$lang['Day'] = 'Día';
$lang['Year'] = 'Año';
$lang['PoweredBy'] = '%s is powered by %s';
$lang['ForumSoftware'] = 'Forum Software';
$lang['GeneralStats'] = 'Estadisticas generales';
$lang['Members'] = 'Miembros';
$lang['TopicsPerDay'] = 'Temas por dia';
$lang['MembersPerDay'] = 'Miembros por dia';
$lang['BoardStarted'] = 'Comunidad iniciada';
$lang['BoardAge'] = 'Edad de la comunidad';
$lang['NewestMember'] = 'Miembro mas reciente';
$lang['MostActiveTopics'] = 'Temas mas activos';
$lang['MostViewedTopics'] = 'Temas mas vistos';
$lang['PostsPerMember'] = 'Mensajes por miembro';
$lang['PostsPerForum'] = 'Mensajes por foro';
$lang['Categories'] = 'Categorias';
$lang['Forums'] = 'Foros';
$lang['TopicsPerMember'] = 'Temas por miembro';
$lang['TopicsPerForum'] = 'Temas por foro';
$lang['MostActiveMembers'] = 'Miembro mas activo';
$lang['MostActiveForums'] = 'Foro mas activo';
$lang['DisplayedNameTaken'] = 'Lo sentimos, %s ya ha sido tomado como un nombre de usuario o un nombre a mostrar.';
$lang['SearchKeywords'] = 'Búsqueda de palabras clave';
$lang['SearchMode'] = 'Modo de búsqueda';
$lang['SearchAuthor'] = 'Buscar autor';
$lang['SearchForums'] = 'Buscar foros';
$lang['AllForums'] = 'Todos los foros';
$lang['NoSearchResults'] = 'Lo sentimos, pero no se encontraron resultados que coincidan con los criterios que ha suministrado.';
$lang['SearchMembersPosts'] = 'Buscar mensajes de los miembros';
$lang['CurrentPage'] = 'Pagina actual';
$lang['MemberGuestOnline'] = 'En los últimos %d minutos, %d miembro (%d oculto) y %d invitado han visitado los foros.';
$lang['MembersGuestOnline'] = 'En los últimos %d minutos, %d miembros (%d oculto) y %d invitado han visitado los foros.';
$lang['MemberGuestsOnline'] = 'En los últimos %d minutos, %d miembro (%d oculto) y %d invitados han visitado los foros.';
$lang['MembersGuestsOnline'] = 'En los últimos %d minutos, %d miembros (%d oculto) y %d invitados han visitado los foros.';
$lang['WhosOnline'] = 'Quien está en línea';
$lang['Done'] = 'Hecho';
$lang['KeywordsExplain'] = 'Algunas palabras clave por lo menos %d caracteres separados por espacios.';
$lang['BCCMyself'] = 'Enviar una copia a mi propia dirección de e-mail.';
$lang['Save'] = 'Guardar';
$lang['Add'] = 'Añadir';
$lang['MarkAllAsRead'] = 'Marcar todo como leido';
$lang['MarkAllAsReadDone'] = 'Todos los foros y los temas son marcados como leídos.';
$lang['StringTooShort'] = '%s es demasiado corto, por lo menos %d caracteres son necesarios.';
$lang['StringTooLong'] = '%s es demasiado largo, solo %d caracteres estan permitidos.';
$lang['Upload'] = 'Cargar';
$lang['RegistrationsDisabled'] = 'Registros desactivados';
$lang['PostFormShortcut'] = 'Presione Alt+S (Control+S en Apple) para enviar rápidamente este formulario.';
$lang['EditThisMember'] = 'Editar este miembro';
$lang['EmailTaken'] = 'La dirección de correo electronico %s ya se está utilizando en este foro. Por favor, elija una dirección distinta.';
$lang['RegisteredNotActivatedByAdmin'] = 'Tu cuenta %s ahora se ha creado. Antes de que usted sea capaz de iniciar sesión, el administrador de este foro debe activar su cuenta. Por favor, espere un tiempo para que esto suceda.';
$lang['AdminActivationEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. Usted acaba de registrar una cuenta llamada [account_name]. El administrador del foro todavía tiene que activar su cuenta. Una vez que esto ha sucedido, se puede acceder usando lo siguiente:

Usuario: [account_name]
Contraseña: [password]

Si no recuerda su contraseña, puede solicitar uno nueva a través del enlace en el formulario de entrada. Gracias por registrarse!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'Cuenta a la espera de activación';
$lang['NewEmailNotActivatedByAdmin'] = 'Su perfil ha sido editado con éxito. Debido a que ha cambiado la dirección de correo electrónico de su cuenta %s, el administrador de este foro tiene que volver a activarlo. Usted será desconectado ahora.';
$lang['NewEmailAdminActivationEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. Usted acaba de modificar la dirección de correo electrónico de su cuenta [account_name], pero no se ha reactivado todavía. El administrador de la comunidad tiene que reactivar su cuenta. Por favor, espere un tiempo para que esto suceda.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'Cuenta la espera de la reactivación';
$lang['AdminActivatedAccountEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. El administrador ha activado su cuenta [account_name]. Ahora puede iniciar sesión.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Cuenta activa';
$lang['Sort'] = 'Ordenar';
$lang['SortBy'] = 'Ordenar por';
$lang['SortBy-displayed_name'] = 'Usuario';
$lang['SortBy-real_name'] = 'Nombre real';
$lang['SortBy-level'] = 'Nivel';
$lang['SortBy-rank'] = 'Rango';
$lang['SortBy-regdate'] = 'Registrado';
$lang['SortBy-posts'] = 'Mensajes';
$lang['SortBy-latest_post'] = 'Ultimo mensaje';
$lang['SortBy-topic_title'] = 'Título del tema';
$lang['SortBy-forum'] = 'Foro';
$lang['SortBy-author'] = 'Autor';
$lang['SortBy-replies'] = 'Respuestas';
$lang['SortBy-views'] = 'Vistas';
$lang['SortOrder-asc'] = 'Ascendente';
$lang['SortOrder-desc'] = 'Descendente';
$lang['NoUsersFound'] = 'Ningún miembro encontrado.';
$lang['SaveConfigManually'] = 'Porque config.php no es escribible, UseBB no puede grabar los valores de configuración por si mismo. Por favor, guardar el contenido siguiente para config.php y subelo si es necesario.';
$lang['ShowResultsAs'] = 'Mostrar los resultados como';
$lang['ShowMode-topics'] = 'Temas';
$lang['ShowMode-posts'] = 'Mensajes';
$lang['Mode-and'] = 'Todas las palabras clave (Y)';
$lang['Mode-or'] = 'Algunas palabras clave (O)';
$lang['ExactMatch'] = 'Búsqueda exacta';
$lang['IncludeGuests'] = 'Incluir invitados';
$lang['Top'] = 'Arriba';
$lang['Bottom'] = 'Abajo';
$lang['Action'] = 'Acción';
$lang['AntiSpamQuestion'] = 'Pregunta Anti-spam';
$lang['AntiSpamQuestionInfo'] = 'Como una medida anti-spam, necesita responder a esta pregunta correctamente para poder acceder a este componente del foro. Sólo una pregunta por sesión se preguntará, mientras se registraba lo desactivará por completo. Gracias por su comprensión.';
$lang['Question'] = 'Pregunta';
$lang['Answer'] = 'Respuesta';
$lang['AntiSpamQuestionMathPlus'] = '¿Cuánto es %d más %d?';
$lang['AntiSpamQuestionMathMinus'] = 'Cuánto es %d menos %d?';
$lang['AntiSpamWrongAnswer'] = 'La respuesta es incorrecta. Por favor, rellene la respuesta correcta para acceder a este componente.';
$lang['WrongUsernamePassword'] = 'El usuario (%s) y la contraseña no es correcta. Por favor intentelo de nuevo.';

$lang['date_translations'] = array(
	'Mon' => 'Lun',
	'Tue' => 'Mar',
	'Wed' => 'Mie',
	'Thu' => 'Jue',
	'Fri' => 'Vie',
	'Sat' => 'Sab',
	'Sun' => 'Dom',
	'Monday' => 'Lunes',
	'Tuesday' => 'Martes',
	'Wednesday' => 'Miercoles',
	'Thursday' => 'Jueves',
	'Friday' => 'Viernes',
	'Saturday' => 'Sabado',
	'Sunday' => 'Domingo',
	'Jan' => 'ene',
	'Feb' => 'feb',
	'Mar' => 'mar',
	'Apr' => 'abr',
	'May' => 'may',
	'Jun' => 'jun',
	'Jul' => 'jul',
	'Aug' => 'ago',
	'Sep' => 'sep',
	'Oct' => 'oct',
	'Nov' => 'nov',
	'Dec' => 'dic',
	'January' => 'Enero',
	'February' => 'Febrero',
	'March' => 'Marzo',
	'April' => 'April',
	'May' => 'Mayo',
	'June' => 'Junio',
	'July' => 'Julio',
	'August' => 'Agosto',
	'September' => 'Septiembre',
	'October' => 'Octubre',
	'November' => 'Noviembre',
	'December' => 'Diciembre',
	'st' => 'er',
	'nd' => 'o',
	'th' => 'er'
);

?>
