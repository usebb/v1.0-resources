<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/faq_English.php,v 1.10 2007/01/01 11:58:43 pc_freak Exp $
	
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
// Initialize a new faq holder array
//
$faq = array();

//
// Define headings and questions
//

$faq[] = array('--', 'Cuentas de usuario');
$faq[] = array('¿Es necesario registrarse?', 'El registro puede ser obligatorio para comentar en este foro, esto depende de si el administrador del foro ha permitido publicar a los invitados o no (puede ser por foro). En general, el registro es una buena idea ya que te da muchas características adicionales.');
$faq[] = array('¿Cuáles son los beneficios de registrarse?', 'En primer lugar, se obtiene una cuenta personal con tu nombre, que sólo estará disponible para usted. Usted también obtiene un perfil personal donde se puede dar alguna información adicional acerca de ti mismo si te gusta y se puede ajustar el foro para sus deseos a través de la función Editar Opciones, que también podrá incluir la elección de un idioma y configuración de plantilla. Una característica muy interesante es la posibilidad de suscribirse a los temas.');
$faq[] = array('¿Qué necesito para registrar una cuenta?', 'Para inscribirse, es necesario escoger un nick (nombre de usuario) que será la clave para su cuenta. Si lo desea, también puede utilizar su nombre real en lugar de su apodo. Tenga en cuenta que no puede cambiar su nombre de usuario por sí mismo después de registrarse, aunque usted puede cambiar su nombre a mostrar en cualquier momento mientras su nombre de usuario sigue siendo el mismo. Usted también necesita tener una dirección de correo electrónico (como puede ser necesaria para activar su cuenta) y hay que elegir una contraseña (que usted puede cambiar después).');
$faq[] = array('No he recibido el correo electrónico de activación!', 'Es posible que pueda acceder sin activar. Si no, intente solicitar una nueva contraseña. Si esto no funciona, póngase en contacto con el administrador.');
$faq[] = array('¿Qué pasa si me olvido de mi información de acceso o mi dirección de correo electrónico ya no funciona?', 'Siempre podrá pedir una nueva contraseña a través del enlace en el formulario de entrada. Si su dirección de e-mail ya no funciona o si la ha olvidado, póngase en contacto con un administrador. Él o ella le puede dar la dirección de correo electrónico que registró con su cuenta o ajustar a su nueva dirección de trabajo.');
$faq[] = array('¿Qué son los moderadores y administradores?', 'Un moderador es una persona que controla uno o más foros de los mensajes inapropiados. Él / ella también puede ayudar a los usuarios en su foro. Un administrador es un moderador en toda la comunidad, también puede asignar moderadores y cambiar todas las opciones de configuración del foro.');
$faq[] = array('¿Cómo puedo ser un moderador o administrador?', 'Normalmente, no se puede, pero trata de pedir al administrador si usted está interesado.');
$faq[] = array('¿Puedo cambiar mi rango?', 'No, sólo los administradores pueden dar a los usuarios un rango personalizado.');

$faq[] = array('--', 'Suscripciones');
$faq[] = array('¿Cómo me suscribo a los temas?', 'En la parte inferior de cada tema, encontrarás un enlace para suscribirse a él. Sólo se puede suscribir a los temas si se ha identificado.');
$faq[] = array('¿Cómo darse de baja de temas?', 'Usted puede cancelar la suscripción haciendo clic en el enlace o darse de baja a través de la vista de suscripcion en el panel.');

$faq[] = array('--', 'Tu perfil');
$faq[] = array('¿Cómo puedo cambiar mi nombre de usuario?', 'No puede cambiar su nombre de usuario usted mismo. Sólo el administrador del foro se le permite hacer eso. Sin embargo, puede cambiar su nombre a mostrar en cualquier momento.');
$faq[] = array('¿Cuál es la diferencia entre nombre de usuario, nombre que se muestra y el nombre real?', 'Su nombre de usuario, que se utiliza para iniciar sesión en los foros, es constante, no puede cambiarlo. Su nombre a mostrar (que es igual al inscribirse a su nombre de usuario) es el nombre que se muestra públicamente. Siempre se puede cambiar este nombre. Tenga en cuenta que igual tendrá que registrarse con su nombre de usuario constante. Su nombre real, que es opcional, sólo se muestra en su página de perfil.');
$faq[] = array('Mi idioma no se encuentra en el cuadro desplegable!', 'Pregunte al administrador de este foro si él / ella quiere añadir una traducción a su idioma.');
$faq[] = array('¿Por qué no puedo seleccionar otra plantilla?', 'Probablemente, no hay otras plantillas disponibles en este foro.');

$faq[] = array('--', 'Temas y Mensajes');
$faq[] = array('¿Qué son los temas y mensajes?', 'Un tema es un grupo de mensajes (posts) en un foro determinado. Si hace clic en el nombre de un foro sobre el índice del foro, puedes ver un resumen de los temas en este foro.');
$faq[] = array('¿Cuáles son los temas pegados?', 'Los temas pegados están diseñados para permanecer siempre en la parte superior del foro. En general, los usuarios normales no puede crear los temas fijos, pero los moderadores y administradores pueden.');
$faq[] = array('¿Por qué no puedo publicar nuevos temas o respuestas?', 'Si no aparece el vínculo para crear nuevos temas o mensajes, no se les permite hacer nuevos temas o mensajes en ese foro. Este bien puede ser un ajuste del foro o el tema puede haber sido cerrado por un moderador. En caso de duda, contacte con el administrador.');
$faq[] = array('¿Qué son los BBCode y smilies?', 'BBCode son etiquetas que se pueden utilizar para agregar algunos elementos a su mensaje. Pruebe y mire su mensaje para ver el efecto. Smilies se utilizan para expresar emociones en sus mensajes.');
$faq[] = array('Mi contador de mensajes no aumenta al publicar!', 'En algunos foros, el recuento de mensajes puede haber sido deshabilitado. Esto es común para las pruebas generales o foros de chat.');
$faq[] = array('¿Por qué tengo que esperar una cierta cantidad de tiempo entre la creación de entradas?', 'Protección contra las inundaciones se utiliza para omitir spam o inundar el servidor con peticiones anuncio. Por favor, espere un momento y vuelva a enviar el mensaje.');

$faq[] = array('--', 'Varios');
$faq[] = array('No recibo ningún correo electronico de este foro!!', 'Asegúrese de que el correo electrónico no son bloqueados por el software anti-spam. Si no, la dirección de correo electrónico configurada en el perfil no pueden trabajar más.');
$faq[] = array('¿Que es RSS feed?', 'se utilizan para buscar información reciente de una página web o un foro para ver en un lector de RSS o algun navegador.');
$faq[] = array('¿Donde en mi perfil puedo colocar mi cuenta de Google Talk?', 'Google Talk es una red de mensajería instantánea con el protocolo Jabber/XMPP. Usted puede colocar su nombre de cuenta (completo, incluyendo el nombre de dominio) en el campo del perfil de Jabber/XMPP.');

$faq[] = array('--', 'UseBB Cuestiones');
$faq[] = array('¿Quién hizo este foro? ¿Qué es UseBB?', 'Este foro, llamado <em>UseBB</em>, ha sido desarrollado por el Equipo de UseBB. UseBB es un software de código abierto publicado bajo la licencia GPL. Usted puede descargar gratuitamente UseBB desde <a href="http://www.usebb.net">www.usebb.net</a>. Tenga en cuenta que el administrador (s) de este foro / página web se ha añadido una funcionalidad adicional.');
$faq[] = array('¿Son los creadores de UseBB responsable de este foro?', 'No, esta comunidad es gestionada por el webmaster del sitio web. El equipo de UseBB no se hace responsable de este foro de ninguna manera.');
$faq[] = array('Tengo una queja acerca de este foro. ¿A quién debo dirigirme?', 'Si usted tiene una queja sobre el software del foro, no el contenido, le invitamos a <a href="http://www.usebb.net">decirla al Equipo de UseBB</a>. Para cualquier otra consulta, por favor póngase en contacto con el administrador de este foro.');

?>
