<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/faq_French.php,v 1.10 2007/01/01 11:58:43 pc_freak Exp $
	
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
*/

/* FRENCH TRANSLATION BY M. Calogero GIGANTE  */
/* Personnal website : http://www.gigante.be/ */

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

$faq[] = array('--',
               'Comptes utilisateurs');
$faq[] = array('Dois-je m\'enregistrer ?',
               'Le fait de vous enregistrer peut &ecirc;tre obligatoire pour &eacute;crire vos messages sur certains forums, cela d&eacute;pend de l\'administrateur qui a peut-&ecirc;tre autoris&eacute; ou non les invit&eacute;s ( = les non-enregistr&eacute;s) &agrave; pouvoir y &eacute;crire quand m&ecirc;me (l\'autorisation peut varier selon les diff&eacute;rentes parties du forum). En g&eacute;n&eacute;ral, l\'enregistrement est une bonne id&eacute;e, parce que cela vous donne plus de possibilit&eacute;s.');
$faq[] = array('Quels sont les avantages à s\'enregistrer ?',
               'D\'abord, vous disposerez d\'un compte personnel avec un nom de connection, lequel ne sera utilisable que par vous seul. Vous aurez aussi la possibilit&eacute; d\'&eacute;diter vous-m&ecirc;me votre profil personnel, dans lequel vous pourrez ajouter des informations suppl&eacute;mentaires &agrave; votre propos, si vous le d&eacute;sirez. Et vous pourrez aussi param&eacute;trer le forum selon vos go&ucirc;ts, gr&acirc;ce &agrave; la section \'Editer les options\', dans laquelle se trouve notamment le choix de la langue. Une option int&eacute;ressante est de pouvoir s\'abonner &agrave; des sujets, pour mieux les suivre.');
$faq[] = array('De quoi ai-je besoin pour m\'enregistrer ?',
               'Pour vous enregistrer, vous devez choisir un surnom ( = nom d\'utilisateur = nom de connection) qui sera la cl&eacute; de votre compte. Si vous pr&eacute;ferez, vous pouvez utiliser votre nom r&eacute;el au lieu d\'un surnom. Notez que par la suite, vous ne pourrez pas changer vous-m&ecirc;me votre nom de connection apr&egrave;s votre enregistrement (vous pourrez seulement changer votre nom affich&eacute;). Vous avez &eacute;galement besoin d\'une adresse e-mail valide et fonctionnelle (car elle sera requise pour activer votre compte) et vous devrez choisir un mot de passe (qui sera modifiable par la suite).');
$faq[] = array('Je n\'ai pas re&ccedil;u l\'e-mail d\'activation !',
               'Vous pouvez peut-&ecirc;tre vous connecter quand m&ecirc;me sans avoir re&ccedil;u aucun e-mail d\'activation. Si &ccedil;a ne marche toujours pas, demandez un nouveau mot de passe. Autrement, contactez l\'administrateur du forum.');
$faq[] = array('Que faire si j\'oublie mon nom d\'utilisateur ou si mon e-mail ne fonctionne plus ?',
               'Vous pouvez toujours demander un nouveau mot de passe via le lien qui se trouve dans le formulaire de connection. Si votre adresse e-mail n\'est plus fonctionnelle ou si vous l\'avez oubli&eacute;, contactez un administrateur. Il/elle pourra vous communiquer l\'e-mail avec lequel vous vous &ecirc;tes enregistr&eacute;, et ajustera votre compte &agrave; la nouvelle adresse de votre choix.');
$faq[] = array('Qui sont les mod&eacute;rateurs et les administrateurs ?',
               'Un mod&eacute;rateur est un membre particulier qui v&eacute;rifie et surveille une ou plusieurs parties du forum, pour rep&eacute;rer les messages douteux. Il/elle peut aussi venir en aide aux utilisateurs de son forum. Un administrateur est un mod&eacute;rateur de l\'int&eacute;gralit&eacute; du forum, qui peut d&eacute;signer de nouveaux mod&eacute;rateurs et qui a le pouvoir de changer toutes les options disponibles pour la configuration de son forum.');
$faq[] = array('Comment puis-je devenir un mod&eacute;rateur ou un administrateur ?',
               'Normalement, vous ne pouvez pas le devenir. Mais faites-en quand m&ecirc;me la demande &agrave; l\'administrateur si vous &ecirc;tes vraiment int&eacute;ress&eacute;.');
$faq[] = array('Puis-je changer mon rang ?',
               'Non, seuls les administrateurs peuvent donner aux utilisateurs un rang particulier.');

$faq[] = array('--', 'Abonnements');
$faq[] = array('Comment puis-je m\'abonner &agrave; un sujet ?',
               'Sur le bas de chaque sujet, vous trouverez un lien pour vous y abonner. Vous ne pouvez vous abonner aux sujets que si vous &ecirc;tes connect&eacute;.');
$faq[] = array('Comment puis-je me d&eacute;sabonner des sujets ?',
               'Vous pouvez vous d&eacute;sabonner d\'un sujet en cliquant sur le lien au bas de celui-ci, ou en allant voir le listing complet de vos abonnements dans votre panneau.');

$faq[] = array('--',
               'Votre profil');
$faq[] = array('Comment puis-je changer mon nom d\'utilisateur ?',
               'Vous ne pouvez pas changer vous-m&ecirc;me votre nom d\'utilisateur ( = nom de connection). Seul l\'administrateur du forum a le pouvoir de le faire. Vous pouvez par contre changer votre nom affich&eacute; quand vous le voulez.');
$faq[] = array('Quelle est la diff&eacute;rence entre nom d\'utilisateur, nom affich&eacute; et nom r&eacute;el ?',
               'Le nom d\'utilisateur, celui que vous utilisez pour vous connecter sur le forum, est permanent, et ne peut pas &ecirc;tre chang&eacute;. Le nom affich&eacute; (qui est le m&ecirc;me que votre nom d\'utilisateur lors de l\'enregistrement) est le nom affich&eacute; publiquement. C\'est ce nom affich&eacute; que vous pouvez changer &agrave; votre guise. Notez bien que vous devrez toujours utiliser votre nom d\'utilisateur pour vous connecter. Le nom r&eacute;el, lui, est tout &agrave; fait optionnel et n\'est montr&eacute; que lors de l\'affichage de votre profil.');
$faq[] = array('Mon choix de langue ne se trouve pas dans la liste d&eacute;roulante !',
               'Demandez &agrave; l\'administrateur de ce forum s\'il peut ajouter aux options une traduction de l\'interface dans votre langue, si celle-ci existe.');
$faq[] = array('Pourquoi ne puis-je pas choisir un autre mod&egrave;le graphique pour ce forum ?',
               'Probablement parce qu\'il n\'y a pas d\'autres mod&eacute;les disponibles sur ce forum.');

$faq[] = array('--',
               'Sujets et messages');
$faq[] = array('Que sont les sujets et les messages ?',
               'Un sujet est un groupe de messages dans une partie du forum. Si vous cliquez sur le nom d\'une partie du forum, vous pourrez voir une liste de tous les sujets qu\'elle contient.');
$faq[] = array('Que sont les sujets dits \'important\' ?',
               'Un sujet dit \'important\' ( n.d.t. : sticky en anglais) est destin&eacute; &agrave; rester toujours en t&ecirc;te de la liste des sujets d\'un forum donn&eacute;. En g&eacute;n&eacute;ral, les utilisateurs normaux ne peuvent pas cr&eacute;er de sujets \'importants\', ceci est r&eacute;serv&eacute; aux mod&eacute;rateurs et aux administrateurs.');
$faq[] = array('Pourquoi ne puis-je pas placer de nouveaux sujets ou des r&eacute;ponses ?',
               'Si aucun lien n\'est visible pour vous permettre de cr&eacute;er un nouveau sujet ou pour placer un nouveau message ( = une r&eacute;ponse), c\'est parce que vous n\'&ecirc;tes pas autoris&eacute; &agrave; le faire sur ce forum. Cela peut &ecirc;tre d&ucirc; &agrave; une volont&eacute; d\'un mod&eacute;rateur qui a d&eacute;cid&eacute; de fermer cette partie du forum ou ce sujet en particulier. Dans le doute, contactez l\'administrateur.');
$faq[] = array('Qu\'est-ce que le BBCode et les smileys ?',
               'Le BBCode est un ensemble de balises (comme en langage HTML) que vous pouvez utiliser pour ajouter certains &eacute;l&eacute;ments (images, couleurs, citations,...) dans vos messages. Essayez-en quelques uns, et faites un aper&ccedil;u de vos messages pour voir ce qu\'ils permettent de faire. Les smileys sont de petites t&ecirc;tes jaunes qui vous permettent d\'exprimer vos &eacute;motions dans vos messages.');
$faq[] = array('Mon compteur de messages n\'augmente pas quand j\'en place un ?',
               'Dans certains forums, l\'incr&eacute;mentation du comptage de vos messages est d&eacute;sactiv&eacute;e. C\'est souvent le cas pour des tests ou dans des forums de chat intensif.');
$faq[] = array('Pourquoi dois-je attendre un certain temps entre deux &eacute;critures ?',
               'C\'est une protection contre le flood ( = submerger le serveur avec des envois de messages en masse). Le but est aussi d\'&eacute;viter le spamming. Veuillez donc attendre un petit peu avant d\'envoyer votre message suivant.');

$faq[] = array('--',
               'Divers');
$faq[] = array('Je ne re&ccedil;ois aucun e-mail de ce forum !',
               'Soyez s&ucirc;r que les e-mails ne sont pas bloqu&eacute;s par un logiciel anti-spam. Si ce n\'est pas le cas, l\'adresse e-mail r&eacute;f&eacute;renc&eacute;e dans votre profil n\'est peut-&ecirc;tre plus fonctionnelle.');
$faq[] = array('Qu\'est-ce qu\'un flux RSS ?',
               'Les flux RSS sont utilis&eacute;s pour r&eacute;cup&eacute;rer les informations r&eacute;centes qu\'un site web propose, dans le but de les consulter dans un logiciel de news/RSS ou dans certains navigateurs.');
$faq[] = array('O&ugrave; puis-je mettre dans mon profil mon compte Google Talk ?',
               'Google Talk est un r&eacute;seau IM utilisant le protocole Jabber/XMPP. Vous pouvez placer votre nom de compte (au complet, avec le nom de domaine inclus) dans le champ Jabber/XMPP de votre profil.');

$faq[] = array('--',
               'A propos de UseBB');
$faq[] = array('Qui a cr&eacute;&eacute; ce forum ? UseBB, c\'est quoi ?',
               'Les scripts de ce forum, appel&eacute; <em>UseBB</em>, ont &eacute;t&eacute; d&eacute;velopp&eacute;s par l\'&eacute;quipe de UseBB. UseBB est un logiciel open source, publi&eacute; sous licence GPL. Vous pouvez donc le t&eacute;l&eacute;charger gratuitement sur <a href="http://www.usebb.net">www.usebb.net</a>. Notez que l\'administrateur de ce forum peut avoir ajout&eacute; des fonctionnalit&eacute;s suppl&eacute;mentaires.');
$faq[] = array('Les cr&eacute;ateurs de UseBB sont-ils responsables de ce forum ?',
               'Non, car ce forum est maintenu par le webmaster de ce site web. L\'&eacute;quipe de UseBB ne peut pas &ecirc;tre tenue pour responsable du contenu de ce forum, d\'aucune mani&egrave;re que ce soit.');
$faq[] = array('J\'ai des reproches &agrave; faire sur ce forum ! A qui dois-je m\'adresser ?',
               'Si vous avez des probl&egrave;mes avec le logiciel m&ecirc;me du forum, vous &ecirc;tes le bienvenu sur <a href="http://www.usebb.net">www.usebb.net</a> pour en faire part &agrave; l\'&eacute;quipe de d&eacute;veloppement de UseBB. Pour les autres types de probl&egrave;mes, c\'est l\'administrateur de ce forum ou de ce site web qu\'il vous faut contacter.');

?>
