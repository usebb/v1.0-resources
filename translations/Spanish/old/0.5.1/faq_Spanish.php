<?php

/*
	Copyright (C) 2003-2005 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/faq_Spanish.php,v 1.5 2005/05/18 09:22:12 pc_freak Exp $
	
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
// Initialize a new faq holder array
//
$faq = array();

//
// Define headings and questions
//

$faq[] = array('--', 'Cuentas de Usuario');
$faq[] = array('¿Necesito Registrarme?', 'Para postear en el foro debes estar registrado, esto depende de si el administrador del foro ha activado la opción de que los usuarios invitados puedan postear o no (puede ser por sección). Generalmente, registrarse es una buena idea y te da muchas características adicionales.');
$faq[] = array('¿Cuales son los beneficios de registrarse?', 'Lo primero de todo, Conseguiras una cuenta personal con tu nick que sera único en el foro y sólo disponible para ti. También tendrás un perfil personal donde puedes añadir información sobre ti y si quieres ajustar el foro como desees utilizando las opciones de edición, en donde puedes elegir el lenguaje y el aspecto del foro. Una interesante característica es la posibilidad de suscribirte a los topics.');
$faq[] = array('¿Qué necesito para registrar una cuenta?', 'Para registrar, Necesitas escojer un nick(nombreusuario) que lo utilizaras para entrar en el foro. Si quieres, puedes usar tu nombre real como nick. Nota:  puedes cambiar el nombre usuario después de registrarte, tambié puedes cambiar el nombre que se muestra en cualquier momento mientras el nombre de usuario sigue siendo el mismo. También necesitas tener una dirección de correo electrónico que funcione ( es necesario para activar tu cuenta) y elegir una contraseña (que podrás cambiar cuando quieras).');
$faq[] = array('¡No he recibido el correo de activación!', 'Entonces podras loguearte sin activar nada. Si no es eso, intenta pedir una nueva contraseña. Si esto tampoco funciona, contacta con el administrador.');
$faq[] = array('¿Qué ocurre si olvido mi información para loguearme o mi dirección de correo no funciona?', 'Puedes pedir una nueva contraseña mediante el link en el formulario de login. Si la dirección de correo no funciona o si la has olvidado, conctacta con el administrador. El te dará la dirección de correo con la que te registraste o ajustará tu cuenta a tu nueva cuenta de correo electrónico que le facilites.');
$faq[] = array('¿Qués es un moderador y un administrador?', 'Un moderador es una persona que verifica uno o más foros para mantenerlos correctamente funcionando.Él/Ella debería también ayudar a los usuarios en el foro. Un administrador es un moderador en todas las tablas y foros, también él/ella puede asignar moderadores y cambiar todas las opciones de configuración de los foros.');
$faq[] = array('¿Como puedo llegar a ser un moderador o administrador?', 'Normalmente, no puedes, pero intenta preguntar al administrador a lo mejor esta interesado.');
$faq[] = array('¿Puedo cambiar mi nivel o rank?', 'No, sólo los administradores pueden cambiar el rank.');

$faq[] = array('--', 'Suscripciones');
$faq[] = array('¿Cómo puedo suscribirme a los topics?', 'En la parte de abajo de cada topic, puedes encontrar un link para suscribirte. Puedes solamente suscribirte a topics si estás logueado.');
$faq[] = array('¿Cómo puedo dejar de estar suscrito a un topic?', 'Puedes desuscribirte clickeando  en el link desuscribir o en la vista de suscripciones que esta en tu panel.');

$faq[] = array('--', 'Tu perfil');
$faq[] = array('¿Cómo puedo cambiar mi nombre de usuario?', 'No puedes cambiar tu nombre de usuario (login) tu mismo. Solamente el administrador de la tabla tiene permisos suficientes para hacerlo. Sin embargo se puede cambiar el nombre que muestras en cualquier momento.');
$faq[] = array('¿Cuál es la diferencia entre nombre de usuario, nombre que se muestra y nombre real?', 'El nombre de usuario, es el que utilizas para loguearte en los foros, es único, y no puedes cambiarlo. El nombre que muestras (cuando te registras es el mismo que el nombre de usuario) es el nombre que muestras a la gente. Siempre podrás cambiar este nombre. Nota: Siempre vas a tener que loguearte con el mismo nombre de usuario. El nombre real, que es opcional, sólo se muestra en la página del perfil.');
$faq[] = array('¡No tengo traducción del foro a mi idioma!', 'Pregunta al administrador si le gustaría añadir una traducción a tu lenguaje.');
$faq[] = array('¿Por qué no puedo seleccionar otro aspecto para el foro?', 'Probablemente, no existan otros aspectos para el foro.');

$faq[] = array('--', 'Topics and Posts');
$faq[] = array('¿Qué son los topics y los posts?', 'Un topic es un grupo de mensajes (posts) en un foro. si clickeas en el nombre del foro, puedes ver una lista de topics.');
$faq[] = array('¿Qué son los topics stiycky?', 'Los topics Sticky son para estar siempre arriba en la vista del foro. Generalmente, los usuarios normales no pueden crear topics sticky, pero moderadores y administradores si pueden.');
$faq[] = array('¿Por qué no puedo postear nuevos posts o replies?', 'Si no aparece el link para crear nuevos topics o post, no tienes permiso para crear nuevos topics o post en el foro. Esto es porque el foro o el topic han sido cerrados por el administrador o moderador. Si tienes duda, contacta con el administador.');
$faq[] = array('¿Qué son BBCode y smilies?', 'BBCode son etiquetas que puedes usar para añadir ciertos elementos al post. Intenta algunas y clickea en preview para ver el efecto. Smilies se usan para expresar emociones en tus posts.');
$faq[] = array('¡El contador de posts no se incrementa cuando posteo!', 'En ciertos foros, el contador ha sido deshabilitado. Esto se hace a modo de test o para chat general.');
$faq[] = array('¿Por qué tengo que esperar un cierto tiempo entre posteo y posteo?', 'La protección contra flood se usa para combatir el spamming o flooding contra el servidor mediante los posteos masivos. Porfavor espera un momento y vuelve a enviar el post.');

$faq[] = array('--', 'Varios');
$faq[] = array('¡No he recibido ningún email del foro!', 'El administrador del foro debe haber deshabilitado los mails informativos o tu dirección de correo no funciona correctamente.');
$faq[] = array('¿Qué es un RSS feed?', 'RSS feeds se usan para que la información reciente de una web o forum la puedan leer los lectores de RSS o algunos navegadores.');

$faq[] = array('--', 'Acerca de UseBB');
$faq[] = array('¿Quién hizo este foro? ¿Qué es UseBB?', 'Es un foro, called <em>UseBB</em>, programado por el UseBB team. UseBB es de código abierto liberado bajo la licencia GPL. Puedes bajarte UseBB de <a href="http://www.usebb.net">www.usebb.net</a>. Nota: El administador(s) del foro/página web puede añadir cualquier funcionalidad libremente.');
$faq[] = array('¿Son los creadores del UseBB responsables del foro?', 'No, este foro es mantenido por el website\'s webmaster(s). El UseBB Team no puede hacerse responsable de este foro de ninguna manera.');
$faq[] = array('Si tengo alguna queja de este foro. ¿A quién debería dirigirme?', 'Si tienes una queja sobre el software en si, no sobre el contenido, serás bienvenido en <a href="http://www.usebb.net">cuentaselo al UseBB Team</a>. Para cualquier otra pregunta, porfavor contacta con el administrador(s) del foro/página web.');

?>
