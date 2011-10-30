<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/admin_Danish.php,v 1.0 2007/04/28 20:02:42 Dahlsoft.dk Exp $
	
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

$faq[] = array('--', 'Bruger konti');
$faq[] = array('Er det n&oslash;dvendigt at jeg bliver registreret?', 'Der er m&aring;ske kr&aelig;vet at v&aelig;re registreret for at kunne oprette eller svare p&aring; indl&aelig;g i dette forum, Det afh&aelig;nger af hvade denne sides administrator(er) har givet g&aelig;ster tilladelse til (kan tildeles pr forum). Generelt er det en god ide at blive registreret, da det giver dig mange forskellige muligheder.');
$faq[] = array('Hvad er fordelene ved at lade sig registrer?', 'F&oslash;rst og fremmest, f&aring;r du en personlig konto med dit eget brugernavn som kun vil v&aelig;re tilg&aelig;ngeligt for dig selv. Du f&aring;r ogs&aring; en personlig profil hvor du kan tilf&oslash;je flere informationer om dig selv hvis du vil, og du kan justerer forummet efter dit &oslash;nske via rediger optioner, i hvilket du ogs&aring; kan &aelig;ndre sprog og skabelon ops&aelig;tninger. Et andet interessant punkt er at du kan abonnerer p&aring; emner.');
$faq[] = array('Hvad skal jeg g&oslash;re for at oprette en konto?', 'For at registrer dig, skal du finde et brugernavn hvilket vil v&aelig;re n&oslash;glen til din konto. Hvis du vil, kan du ogs&aring; bruge dit rigtige navn. Bem&aelig;rk du kan ikke &aelig;ndre dit brugernavn selv efter oprettelsen, dog kan du &aelig;ndre d&aelig;knavnet til hver en tid mens dit brugernavn forbliver u&aelig;ndret. Du skal ogs&aring; have en brugbar E-mail adresse (Da den m&aring;ske skal bruges for at aktiverer din konto) og du skal v&aelig;lge en adgangskode (hvilke du kan &aelig;ndre efterf&oslash;lgende).');
$faq[] = array('Jeg har ikke modtaget en aktiverings e-mail!', 'Du kan m&aring;ske logge p&aring; uden en aktivering. Hvis ikke, s&aring; pr&oslash;v at f&aring; en ny adgangskode. Hvis det heller ikke virker, s&aring; kontakt administratoren.');
$faq[] = array('Hvad hvis jeg har glemt mine log ind info eller min e-mail addresse ikke virker mere?', 'Du kan altid f&aring; en ny adgangskode via linket p&aring; log ind formularen. Hvis din e-mail addresse ikke virker mere eller hvis du har glemt den, kontakt en administrator. Han/hun kan give dig den e-mail addresse du registrerede dig med eller justerer din konto til din nye fungerende e-mail addresse.');
$faq[] = array('Hvad er moderatorere og administratorere?', 'En moderator er en person som kontrollerer et eller flere fora for for un&oslash;jagtig indl&aelig;s/svar. Han/hun kan ogs&aring; hj&aelig;lpe brugerne i hans/hendes forum. En administrator er en moderator p&aring; alle sider, han/hun kan ogs&aring; udpege moderatorerne og &aelig;ndre alle konfigurations optioner i forummet.');
$faq[] = array('Hvordan kan jeg blive en moderator eller administrator?', 'Det kan du normalt ikke, men pr&oslash;v at sp&oslash;rge administratoren hvis du er interesseret.');
$faq[] = array('Kan jeg &aelig;ndre min rang?', 'Nej, Kun administratorer kan give brugerne rang.');

$faq[] = array('--', 'Abonnementer');
$faq[] = array('Hvordan abonnerer jeg p&aring; et emne?', 'I bunden af hver emne, finder du et link hvor du kan abonnerer p&aring; det. Du kan kun abonnerer p&aring; et emne hvis du er logget p&aring;.');
$faq[] = array('Hvordan afmelder jeg et abonnement?', 'Du kan afmelde et abonnement ved at klikke p&aring; linket under emnet eller via Abonnements oversigten i "mit panel".');

$faq[] = array('--', 'Din profil');
$faq[] = array('Hvordan kan jeg &aelig;ndre mit brugernavn?', 'Du kan ikke &aelig;ndre dit brugernavn (log ind navn) selv. Kun sidens administrator har adgang til at g&oslash;re det. Men du kan altid &aelig;ndre dit daknavn.');
$faq[] = array('Hvad er forskellen mellem brugernavn, d&aelig;knavn og rigtige navn?', 'Dit brugernavn, som du bruger til at logge p&aring; forummet med, er konstant, dvs. du kan ikke &aelig;ndre det. Dit d&aelig;knavn (som ved oprettelse er det samme som dit brugernavn) er offentlige navn der bliver vist udad til. Du kan altid &aelig;ndre dette navn. Bem&aelig;rk du skal stadig logge p&aring; med dit konstante brugernavn. Dit rigtige navn, som er valgfrit, bliver kun vist p&aring; din profilside.');
$faq[] = array('Mit sprog mangler i drop ned boksen!', 'Sp&oslash;rg administratoren af siden om han/hun vil tilf&oslash;je en overs&aelig;ttelse med dit sprog.');
$faq[] = array('Hvorfor kan jeg ikke v&aelig;lge en anden skabelon?', 'Der er h&oslash;jst sandsynligt ikke andre skabeloner tilr&aring;dighed p&aring; denne side.');

$faq[] = array('--', 'Emner, indl&aelig;g og svar');
$faq[] = array('Hvad er emner, indl&aelig;g og svar?', 'Et emne er en gruppe af indl&aelig;g og svar i et specifikt forum. Hvis du klikker p&aring; forummets navn i forum indekset, kan du sew en oversigt over emner i det forum.');
$faq[] = array('Hvad er faste emner?', 'Faste emner er designet til altid at ligge i toppen af emne oversigten. Generelt kan almindelige brugere ikke oprette faste emner, men moderatorere and administratorere kan.');
$faq[] = array('Hvorfor kan jeg ikke oprette nye emner eller svar?', 'Hvis ikke linkene til oprettelse af emner eller svar er vist, har du ikke tilladelse til at oprette nye emner eller svar i det forum. Det kan enten v&aelig;re en ops&aelig;tning af forummet eller et emne der er lukket af en moderator. Er du i tvivl, kontakt administratoren.');
$faq[] = array('Hvad er BBCode og smilies?', 'BBCode er tags med hvilket du kan tilf&aelig;je visse elementer til dine indl&aelig;g/svar. Pr&oslash;v nogle af dem og gennemse dine indl&aelig;g/svar for at se effekten. Smilies bruges til at udtrykke f&oslash;lelser i dine indl&aelig;g/svar.');
$faq[] = array('Min indl&aelig;gst&aelig;ller for&oslash;ges ikke n&aring;r jeg gemmer!', 'I visse fora kan t&aelig;lleren v&aelig;re sl&aring;et fra. Dette er normalt ved testning eller generelt ved chat fora.');
$faq[] = array('Hvorfor skal jeg vente i et bestemt tidsrum mellem mine indl&aelig;g/svar?', 'Overstr&oslash;mnings beskyttelse bruges for at undg&aring; spamming eller oversv&oslash;mning af serveren med oprettelses foresp&oslash;rgelser. Vent venligst et &oslash;jeblik og send s&aring; igen.');

$faq[] = array('--', 'Diverse');
$faq[] = array('Jeg modtager ingen e-mail fra denne side!', 'Sikre dig at e-mailene ikke bliver borkeret af et anti-spam program. Hvis ikke, kan det v&aelig;re at e-mail addressen i din profil ikke l&aelig;ngre virker.');
$faq[] = array('Hvad er RSS feed?', 'RSS feeds bliver brugt til at fange det sidste nye fra en hjemmeside eller et forum til visning i en nyheds/RSS l&aelig;ser eller i nogle browsere.');
$faq[] = array('Hvor i min profil kan jeg placerer min Google Talk konto?', 'Google Talk er et IM netv&aelig;rk som bruger Jabber/XMPP protokollen. Du kan placerer dit konto navn (fulde, inklusive domain navnet) i Jabber/XMPP feltet i profilen.');

$faq[] = array('--', 'UseBB sp&oslash;rgsm&aring;l');
$faq[] = array('Hvem har lavet dette forum? Hvad er UseBB?', 'Denne bulletin side, kaldet <em>UseBB</em>, er udviklet af UseBB Teamet. UseBB er et Open Source software frigivet under GPL\'en. Du kan hente UseBB gratis fra<a href="http://www.usebb.net">www.usebb.net</a>. Bem&aelig;rk administrator(erne) af dette forum/ denne hjemmeside kan have tilf&oslash;jet ekstra funktionaliteter.');
$faq[] = array('Er udviklerene af UseBB Ansvarlige for dette forum?', 'Nej, denne side er vedligeholdt af sidens webmaster(e). UseBB Teamet kan ikke holdes ansvarlig for dette forum p&aring; nogen m&aring;de.');
$faq[] = array('Jeg har en klage over dette forum. Hvem skal jeg klage til?', 'Hvis du har en klage over selve programmet bag dette forum, og ikke indholdet, er du velkommen til at kontakte <a href="http://www.usebb.net">UseBB Teamet</a>. Alle andre klager bedes rettet mod administrator(erne) af dette forum/denne hjemmeside.');

?>
