<?php

/*
	Copyright (C) 2003-2011 UseBB Team
	http://www.usebb.net
	
	$Id: faq_Polish.php - 09.05.2011 23:57 pc_freak $
	
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
	
	Wykonano przez: bryan
        Wykonano dla: UseBB.pl - Polskie oficjalne wsparcie Usable Bulletin Board.
        Usuniêcie tego wpisu jest równoznacze ze z³amaniem warunków u¿ytkowania skryptu.
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

$lang['character_encoding'] = 'iso-8859-2';
$lang['language_code'] = 'pl';
$lang['text_direction'] = 'ltr';

$faq[] = array('--', 'Konta u¿ytkowników');
$faq[] = array('Czy muszê siê zarejestrowaæ?', ' Rejestracja mo¿e byæ konieczna do pisania/tworzenia tematów na tym forum, to zale¿y od tego, czy administrator pozwoli³ na udzielanie siê i zak³adanie nowych w±tków go¶ciom. Ogólnie rzecz bior±c, rejestracja jest dobrym pomys³em, poniewa¿ daje wiele dodatkowych funkcji.');
$faq[] = array('Jakie s± korzy¶ci z rejestracji?', ' Przede wszystkim, masz swoje osobiste konto o unikatowym, rozpoznawalnym nicku, który bêdzie dostêpny tylko dla Ciebie. Zapraszamy równie¿ na profil osobisty, gdzie mo¿esz dodawaæ dodatkowe informacje o sobie, je¶li chcesz mo¿esz dostosowaæ forum do swoich potrzeb i wymagañ za po¶rednictwem funkcji Edytuj opcje, w której mo¿esz równie¿ wybraæ jêzyk i ustawienia szablonu. Bardzo ciekawa jest mo¿liwo¶æ subskrypcji tematów.');
$faq[] = array('Co trzeba zrobiæ, aby zarejestrowaæ konto?', ' Aby siê zarejestrowaæ, musisz wybraæ swój nick (login), który bêdzie niezbêdny aby siê zalogowaæ do Twojego konta. Je¶li chcesz, mo¿esz tak¿e u¿yæ swoje prawdziwe nazwisko, zamiast pseudonimu. Oczywi¶cie nie ma mo¿liwo¶ci zmiany nazwy u¿ytkownika po zarejestrowaniu, lecz masz mo¿liwo¶æ zmiany nazwy wy¶wietlanej, w dowolnym momencie, podczas gdy nazwa u¿ytkownika pozostaje taka sama. Musisz tak¿e posiadaæ dzia³aj±cy adres e-mail (poniewa¿ mo¿e byæ wymagany do aktywacji konta) oraz wybraæ has³o (które mo¿na zmieniæ pó¼niej).');
$faq[] = array('Nie dotar³ do mnie e-mail aktywacyjny!', ' Sprawd¼ czy jeste¶ w stanie zalogowaæ siê bez aktywacji po przez e-mail. Je¶li nie, spróbuj wys³aæ pro¶bê o nowe has³o. Je¿eli to nie zadzia³a, skontaktuj siê z administratorem.');
$faq[] = array('Co zrobiæ, je¶li zapomnia³em swojego loginu lub adresu e-mail?', ' Zawsze mo¿esz poprosiæ o nowe has³o, klikaj±c w link na stronie logowania. Je¶li adres e-mail ju¿ nie jest aktywny lub je¶li nie pamiêtasz go, skontaktuj siê z administratorem. On poda Ci Twój adres e-mail u¿yty podczas rejestracji konta lub dostosuje Twój nowy, dzia³aj±cy adres e-mail.');
$faq[] = array('Kim s± Moderatorzy i Administratorzy?', ' Moderator to osoba, która sprawdza na jednym lub kilku forach posty pisane przez u¿ytkowników. Mo¿e on równie¿ pomóc u¿ytkownikom forum. Administrator jest moderatorem na wszystkich forach, ma mo¿liwo¶æ przydzielenia rangi moderatora u¿ytkownikom oraz ma dostêp do pe³nej konfiguracji forum w Panelu Administratora.');
$faq[] = array('Jak mogê zostaæ Moderatorem lub Administratorem?', ' Mo¿esz nim zostaæ dopiero wtedy gdy zg³osisz siê do administratora forum i poprosisz go o t± rangê.');
$faq[] = array('Czy mogê zmieniæ swoj± rangê?', ' Nie, tylko Administrator ma mo¿liwo¶æ podwy¿szenia rang u¿ytkownikom.');

$faq[] = array('--', 'Subskrypcje');
$faq[] = array('Jak w³±czyæ subskrypcje tematów?', ' Na dole ka¿dego tematu, znajdziesz link do w³±czenia subskrypcji. Jest to mo¿liwe dopiero gdy jeste¶ zalogowany/a');
$faq[] = array('Jak wy³±czyæ subskrypcje tematów?', ' Mo¿esz tego dokonaæ, w panelu u¿ytkownika.');

$faq[] = array('--', 'Twój profil');
$faq[] = array('Mogê zmieniæ nazwê u¿ytkownika?', ' Nie mo¿na zmieniæ swojej nazwy u¿ytkownika (loginu) samodzielnie. Tylko administrator mo¿e to zrobiæ. Mo¿na jednak zmieniæ nazwê wy¶wietlan± w dowolnym momencie.');
$faq[] = array('Jaka jest ró¿nica pomiêdzy Nazw± u¿ytkownika a Nazw± wy¶wietlan±?', ' Twoja nazwa u¿ytkownika, której u¿ywasz do logowania siê na forum, jest sta³a, nie mo¿na jej zmieniæ. Nazwa wy¶wietlana, to nazwa wy¶wietlana publicznie. Zawsze j± mo¿esz zmieniæ. Pamiêtaj, ¿e zmieni±j±c nazwê wy¶wietlan±, musisz logowaæ siê na forum nazw± u¿ytkownika (loginem).');
$faq[] = array('Mojego jêzyka nie ma na forum!', ' Zapytaj administratora czy nie doda³by dodatkowego t³umaczenia do forum.');
$faq[] = array('Dlaczego nie mogê wybraæ innego szablonu?', ' Prawdopodobnie ¿adne inne szablony nie s± dostêpne na tym forum.');

$faq[] = array('--', 'Tematy oraz posty');
$faq[] = array('Tematy i posty?', ' Temat jest grup± wiadomo¶ci (postów) w pewnym forum. Je¶li klikniesz na nazwê forum, masz mo¿liwo¶æ przegl±dania tematów w tym forum.');
$faq[] = array('Czym s± tematy przyklejone? ', ' Tematy przyklejone zosta³y zaprojektowane, aby zawsze pozostaæ na szczycie w danym forum posród innych tematów w nim zawartych. Ogólnie rzecz bior±c, zwykli u¿ytkownicy nie mog± przykleiæ tematu, ale moderatorzy i administratorzy owszem.');
$faq[] = array('Dlaczego nie mogê dodawaæ nowych tematów i odpowiedzi? ', ' Je¿eli nie pojawi siê opcja do tworzenia nowych tematów lub postów, nie masz uprawnieñ do tworzenia nowych tematów lub postów na tym forum, b±d¼ jest on zamkniêty przez moderatora. W razie w±tpliwo¶ci skontaktuj siê z administratorem.');
$faq[] = array('Co to BBCode oraz Emotikony? ', ' BBCode s± to tagi, które mo¿na wykorzystaæ, aby dodaæ pewne elementy do Twojego posta. U¿yj jaki¶ z nich i naci¶nij podgl±d postu, aby zobaczyæ efekt. U¶mieszki s± u¿ywane do wyra¿ania emocji w Twoich postach.');
$faq[] = array('Liczba postów nie wzros³a po wys³aniu!', ' W niektórych forach, zwiêkszenie liczby postów mo¿e byæ wy³±czone. To jest dla wszystkich u¿ytkowników, np. w forum "Ogólne rozmowy".');
$faq[] = array('Dlaczego muszê czekaæ okre¶lon± ilo¶æ czasu na wys³anie postu? ', ' Jest to po to aby pomin±æ niepotrzebny spam oraz ¿eby nie obici±¿aæ a¿ tak serwera. Poczekaj chwilê i ponownie wy¶lij.');

$faq[] = array('--', 'Ró¿ne');
$faq[] = array('Nie otrzymuje e-maili z tego forum! ',' Upewnij siê, ¿e e-maile nie s± zablokowane przez oprogramowanie antyspam. Je¶li nie, adres e-mail ustawiony w Twoim profilu mo¿e siê ró¿niæ od Twojego aktualnego.');
$faq[] = array('Czym jest RSS? ', ' Kana³y RSS s³u¿± do pobierania najnowszych informacji ze strony internetowej lub forum, by zobaczyæ news / czytnik RSS w niektórych przegl±darkach.');
$faq[] = array('Gdzie w moim profilu mogê umie¶ciæ moje konto Google Talk? ', ' Google Talk IM mo¿esz umie¶ciæ w polu sieci Jabber / XMPP. Mo¿esz umie¶ciæ nazwê konta (w ca³o¶ci, w tym nazwy domeny).');

$faq[] = array('--', 'Na temat UseBB');
$faq[] = array('Kto zrobi³ to forum? Czym jest UseBB? ', ' Skrypt o nazwie UseBB, jest rozwijany przez UseBB Project. UseBB jest oprogramowaniem Open Source wydany na licencji GPL. Mo¿esz pobraæ go za darmo z oficjalnej strony UseBB <a href="http://www.usebb.net"> www.usebb.net</a>');
$faq[] = array('Czy twórcy UseBB s± odpowiedzialni za to forum? ',' Nie, to forum jest prowadzone przez administratora wiêc, autor projektu UseBB nie mo¿e byæ poci±gniêty do odpowiedzialno¶ci za to forum w jakikolwiek sposób.');
$faq[] = array('Mam zarzut co do tego forum. Do kogo mam siê zg³osiæ bezpo¶rednio? ',' Je¶li chcesz z³o¿yæ skargê na to forum, zapraszamy do <a href="http://www.usebb.net">UseBB Project</a>. W przypadku innych pytañ prosimy o kontakt z administratorem forum.');

?>
