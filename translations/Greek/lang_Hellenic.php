<?php

/*
	Copyright (C) 2003-2005 UseBB Team
	http://www.usebb.net

	$Header: /cvsroot/usebb/UseBB/languages/lang_English.php,v 1.25 2005/02/09 14:18:04 pc_freak Exp $

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

/*
	Author : George Petsagourakis
	email : petsagouris@hotmail.com
	Date : 26/3/2005
	UseBB version : 0.4
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
// Define the Language Settings
//
$lang['language_code'] = 'el';
$lang['character_encoding'] = 'utf-8';
$lang['text_direction'] = 'ltr';

//
// Date Translations
//
$lang['date_translations'] = array();

// Days
$lang['date_translations']['Sunday'] = 'Κυριακή';
$lang['date_translations']['Monday'] = 'Δευτέρα';
$lang['date_translations']['Tuesday'] = 'Τρίτη';
$lang['date_translations']['Wednesday'] = 'Τετάρτη';
$lang['date_translations']['Thursday'] = 'Πέμπτη';
$lang['date_translations']['Friday'] = 'Παρασκευή';
$lang['date_translations']['Saturday'] = 'Σάββατο';
$lang['date_translations']['Sun'] = 'Κυρ';
$lang['date_translations']['Mon'] = 'Δευ';
$lang['date_translations']['Tue'] = 'Τρι';
$lang['date_translations']['Wed'] = 'Τετ';
$lang['date_translations']['Thu'] = 'Πεμ';
$lang['date_translations']['Fri'] = 'Παρ';
$lang['date_translations']['Sat'] = 'Σαβ';

// Months
$lang['date_translations']['January'] = 'Ιανουάριος';
$lang['date_translations']['February'] = 'Φεβρουάριος';
$lang['date_translations']['March'] = 'Μάρτιος';
$lang['date_translations']['April'] = 'Απρίλιος';
$lang['date_translations']['May'] = 'Μάϊ';
$lang['date_translations']['June'] = 'Ιούνιος';
$lang['date_translations']['July'] = 'Ιούλιος';
$lang['date_translations']['August'] = 'Αύγουστος';
$lang['date_translations']['September'] = 'Σεπτέμβριος';
$lang['date_translations']['October'] = 'Οκτώβριος';
$lang['date_translations']['November'] = 'Νοέμβριος';
$lang['date_translations']['December'] = 'Δεκέμβριος';
$lang['date_translations']['Jan'] = 'Ιαν';
$lang['date_translations']['Feb'] = 'Φεβ';
$lang['date_translations']['Mar'] = 'Μάρ';
$lang['date_translations']['Apr'] = 'Απρ';
$lang['date_translations']['May'] = 'Μάϊ';
$lang['date_translations']['Jun'] = 'Ιούν';
$lang['date_translations']['Jul'] = 'Ιούλ';
$lang['date_translations']['Aug'] = 'Αύγ';
$lang['date_translations']['Sep'] = 'Σεπ';
$lang['date_translations']['Oct'] = 'Οκτ';
$lang['date_translations']['Nov'] = 'Νοέ';
$lang['date_translations']['Dec'] = 'Δεκ';

// am-AM/pm-PM
$lang['date_translations']['pm'] = 'πμ';
$lang['date_translations']['am'] = 'μμ';
$lang['date_translations']['PM'] = 'ΠΜ';
$lang['date_translations']['AM'] = 'ΜΜ';


//
// Define translations
//
$lang['Home'] = 'Κεντρική';
$lang['YourPanel'] = 'Οι Ρυθμίσεις σας';
$lang['Register'] = 'Εγγραφή';
$lang['FAQ'] = 'Συνήθεις Ερωτήσεις';
$lang['Search'] = 'Αναζήτηση';
$lang['ActiveTopics'] = 'Ενεργά Θέματα';
$lang['LogIn'] = 'Σύνδεση';
$lang['LogOut'] = 'Αποσύνδεση (%s)';
$lang['MemberList'] = 'Κατάλογος Μελών';
$lang['StaffList'] = 'Κατάλογος Προσωπικού';
$lang['Statistics'] = 'Στατιστικά';
$lang['ContactAdmin'] = 'Επικοινωνία με τον Διαχειριστή';
$lang['Forum'] = 'Forum';
$lang['Topics'] = 'Θέματα';
$lang['LatestPost'] = 'Τελευταία Δημοσίευση';
$lang['RSSFeed'] = 'Τροφοδοσία RSS';
$lang['NewPosts'] = 'Νέες Δημοσιεύσεις';
$lang['NoNewPosts'] = 'Δεν υπάρχουν νέες δημοσιεύσεις';
$lang['LockedNewPosts'] = 'Κλειστό (με νέες δημοσιεύσεις)';
$lang['LockedNoNewPosts'] = 'Κλειστό (χωρίς νέες δημοσιεύσεις)';
$lang['Locked'] = 'Κλειστό';
$lang['VariousInfo'] = 'Διαφορες Πληροφορίες';
$lang['IndexStats'] = 'Υπάρχουν %d δημοσιεύσεις σε %d θέματα, απο %d μέλη.';
$lang['NewestMember'] = 'Καλωσορίστε το νεότερο μας μέλος: %s.';
$lang['OnlineUsers'] = 'Υπήρξαν %d μέλος(οι) και %d επισκέπτης(ες) συνδεδεμένοι στα τελευταία %d λεπτά.';
$lang['Username'] = 'Όνομα χρήστη';
$lang['UserID'] = 'ΑΑ Χρήστη';
$lang['SendPassword'] = 'Αποστολή νέου συνθηματικού';
$lang['RegisterNewAccount'] = 'Εγγραφή νέου μέλους';
$lang['RememberMe'] = 'Να μην είναι απαραίτητη η εισαγωγή αυτών των στοιχείων σε κάθε επίσκεψη.';
$lang['Error'] = 'Περιπλοκή';
$lang['Administrator'] = 'Διαχειριστής';
$lang['Moderator'] = 'Συντονιστής';
$lang['Password'] = 'Συνθηματικό';
$lang['PasswordAgain'] = 'Συνθηματικό (επανάληψη)';
$lang['EverythingRequired'] = 'Είναι απαραίτητα όλα τα πεδία!';
$lang['Never'] = 'Ποτέ';
$lang['Member'] = 'Μέλος';
$lang['SendpwdActivationEmailSubject'] = 'Νέο Συνθηματικό';
$lang['NoForums'] = 'Αυτός είναι ενας άδειος πίνακας συζητήσεων. Ο διαχειριστής/ρια δεν έχει δημιουργήσει ακόμη κανένα φόρουμ.';
$lang['AlreadyActivated'] = 'Ο λογαριασμός με αριθμό ID %d έχει ήδη ενεργοποιηθεί.';
$lang['Activate'] = 'Ενεργοποίηση';
$lang['Activated'] = 'Ο λογαριασμός σας, με όνομα χρήστη %s, (επανα)ενεργοποιήθηκε. Τώρα θα πρέπει να μπορείτε να συνδεθείτε με το συνθηματικό που υπάρχει στο e-mail που λάβατε.';
$lang['RegisterIt'] = 'Μπορείτε να τον δημιουργήσετε μέσω του συνδέσμου \'Εγγραφή\'.';
$lang['BoardClosed'] = 'Ο πίνακας συζητήσεων έιναι κλειστός';
$lang['SendpwdEmailSubject'] = 'Νέο Συνθηματικό';
$lang['SendpwdActivated'] = 'Εστάλει το νέο συνθηματικό για τον λογαριασμό σας, %s, στο e-mail %s. Τώρα μπορείτε να συνδεθείτε με το νέο σας συνθηματικό.';
$lang['SendpwdNotActivated'] = 'Εστάλει το νέο συνθηματικό για τον λογαριασμό σας, %s, στο e-mail %s, μαζί θα βρείτε και πληροφορίες για την επαναενεργοποίηση του λογαριασμού σας.';
$lang['ForumIndex'] = 'Αρχική Σελίδα Φόρουμ';
$lang['MissingFields'] = 'Λείπουν, ή είναι εσφαλμένες, οι πληροφορίες απο τα ακόλουθα πεδία: %s.';
$lang['TermsOfUse'] = 'Όροι Χρήσης';
$lang['RegistrationActivationEmailSubject'] = 'Ενεργοποίηση Λογαριασμού';
$lang['NeedToBeLoggedIn'] = 'Πρέπει να είσαστε συνδεδεμένος για να ενεργήσετε καθ\'αυτόν τον τρόπο. Κάντε κλίκ στον σύνδεσμο \'Σύνδεση\', για να συνδεθείτε ή στον \'Εγγραφή\' για να δημιουργήσετε έναν νέο λογαριασμό.';
$lang['Topic'] = 'Θέμα';
$lang['Author'] = 'Συγγραφέας';
$lang['Replies'] = 'Απαντήσεις';
$lang['Views'] = 'Προβολές';
$lang['Note'] = 'Σημείωση';
$lang['ACP'] = 'Πίνακας Ελεγχου Διαχειριστού';
$lang['BannedIP'] = 'Η διεύθηνση IP σας, %s, έχει απαγορευθεί απο αυτό τον πίνακα ανακοινώσεων.';
$lang['BannedUser'] = 'Λογαριασμός υπο απαγόρευση';
$lang['BannedUserExplain'] = 'Ο λογαριασμός σας, %s, έχει απαγορευτεί απο αυτόν τον πίνακα συζητήσεων. Ο λόγος είναι:';
$lang['BannedUsername'] = 'Το όνομα χρήστη, %s έχει απαγορευτεί απο αυτόν τον πίνακα συζητήσεων. Παρακαλούμε επιλέξτε ένα άλλο.';
$lang['BannedEmail'] = 'Η διεύθηνση e-mail, %s έχει απαγορευτεί απο αυτόν τον πίνακα συζητήσεων. Παρακαλούμε επιλέξτε ένα άλλο.';
$lang['BoardClosedOnlyAdmins'] = 'Μόνο ο διαχειριστής μπορεί να συνδεθεί οταν ο πίνακας συζητήσεων είναι κλειστός.';
$lang['NoPosts'] = 'Καμμία δημοσίευση';
$lang['NoActivetopics'] = 'Ο πίνακας συζητήσεων δεν έχει, προς το παρών, ενεργά θέματα.';
$lang['AuthorDate'] = 'Απο τον/ην %s στις %s';
$lang['ByAuthor'] = 'απο: %s';
$lang['OnDate'] = 'στις %s';
$lang['Re'] = 'Απ:';
$lang['MailForm'] = 'Αποστολή e-mail στον/ην %s';
$lang['SendEmail'] = 'Αποστολή μυνήματος στον/ην %s';
$lang['To'] = 'Προς';
$lang['From'] = 'Από';
$lang['Subject'] = 'Θέμα';
$lang['Body'] = 'Περιεχόμενο';
$lang['Send'] = 'Αποστολή';
$lang['PanelHome'] = 'Κεντρική Σελίδα Πίνακα';
$lang['Required'] = 'Απαραίτητο';
$lang['NewEmailActivationEmailSubject'] = 'Επαναενεργοποίηση Λογαριασμού';
$lang['AutoLoginSet'] = 'Μόλις λάβατε το cookie για την Αυτόματη σύνδεση.';
$lang['AutoLoginUnset'] = 'Μόλις διαγράφηκε το cookie για την Αυτόματη σύνδεση.';
$lang['RegistrationEmailSubject'] = 'Εγγραφή Λογαριασμού';
$lang['Again'] = 'Again';
$lang['DetailedOnlineList'] = 'Λεπτομερής λίστα συνδεδεμένων χρηστών';
$lang['Detailed'] = 'Λεπτομερής';
$lang['TotalTime'] = 'Συνολικός χρόνος';
$lang['NoTopics'] = 'Αυτό το φόρουμ δεν περιέχει κανένα θέμα. Θα μπορούσατε να δημοσιεύσετε το πρώτο!';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Η συγκεκριμένη δυνατότητα είναι απενεργοποιημένη γιατι ο πίνακας συζητήσεων δεν μπορεί να αποθηκεύσει ή να διαβάσει cookies με τον τρέχωντα φυλλομετρητή σας.';
$lang['Sticky'] = 'Μόνιμο';
$lang['PostNewTopic'] = 'Δημοσίευση νέου θέματος';
$lang['ForumIsLocked'] = 'Το φόρουμ είναι κλειδώμενο';
$lang['PostReply'] = 'Δημοσίευση απάντησης';
$lang['TopicIsLocked'] = 'Το Θέμα κλειδώθηκε';
$lang['Post'] = 'Δημοσίευση';
$lang['Edit'] = 'Επεξεργασία';
$lang['Delete'] = 'Διαγραφή';
$lang['Quote'] = 'Φράση';
$lang['Wrote'] = 'ο/η %s έγραψε';
$lang['ViewingIP'] = 'IP: %s';
$lang['ReplyTo'] = 'Απάντηση στο "%s"';
$lang['Content'] = 'Περιεχόμενο';
$lang['Options'] = 'Επιλογές';
$lang['EnableBBCode'] = 'Ενεργοποίηση BBCode.';
$lang['EnableSmilies'] = 'Ενεργοποίηση smilies.';
$lang['EnableSig'] = 'Ενεργοποίηση υπογραφής.';
$lang['EnableHTML'] = 'Ενεργοποίηση HTML.';
$lang['LockTopicAfterPost'] = 'Κλείδωμα Θέματος μετά την δημοσίευση.';
$lang['Guest'] = 'Επισκέπτης';
$lang['BackToPrevious'] = 'Πίσω στην προηγούμενη σελίδα.';
$lang['UserPostedImage'] = 'Εικόνα δημοσιευμένη από τον χρήστη';
$lang['MakeTopicSticky'] = 'Μετατροπή Θέματος σε μόνιμο.';
$lang['Moderators'] = 'Ρυθμιστές: %s.';
$lang['Nobody'] = 'Κανείς';
$lang['DeleteTopic'] = 'Διαγραφή θέματος';
$lang['MoveTopic'] = 'Μετακίνηση θέματος';
$lang['LockTopic'] = 'Κλείδωμα θέματος';
$lang['UnlockTopic'] = 'Ξεκλείδωμα θέματος';
$lang['MakeSticky'] = 'Μετατροπή Θέματος σε μόνιμο';
$lang['MakeNormalTopic'] = 'Μετατροπή σε κανονικό Θέμα';
$lang['OldForum'] = 'Παλαιό φόρουμ';
$lang['NewForum'] = 'Νέο φόρουμ';
$lang['PageLinks'] = 'Σελίδα: %s';
$lang['Preview'] = 'Προεπισκόπηση';
$lang['DeletePost'] = 'Διαγραφή δημοσίευσης';
$lang['EditPost'] = 'Επεξεργασία δημοσίευσης';
$lang['PostEditInfo'] = 'Τελευταία επεξεργασία απο τον/την %s στις %s.';
$lang['NewReplyEmailSubject'] = 'Νέα απάντηση στο θέμα "%s"';
$lang['LatestUpdate'] = 'Τελευταία ανανέωση';
$lang['Unknown'] = 'Άγνωστο';
$lang['PostingTopic'] = 'Να δημοσιεύει ενα νέο Θέμα στο %s';
$lang['PostingReply'] = 'Να δημοσιεύει μια απάντηση στο %s';
$lang['MovingTopic'] = 'Να μεταφέρει το Θέμα %s';
$lang['DeletingTopic'] = 'Να διαγράφει το Θέμα %s';
$lang['EditingPost'] = 'Να επεξεργάζεται μια δημοσίευση στο %s';
$lang['DeletingPost'] = 'Να διαγράφει μια δημοσίευση στο %s';
$lang['DebugMode'] = 'Λειτουργία αναφορών';
$lang['ParseTime'] = 'Χρόνος σύνταξης σελίδας';
$lang['ServerLoad'] = 'Φόρτο εργασίας διακομιστή';
$lang['TemplateSections'] = 'Template sections';
$lang['SQLQueries'] = 'Επερωτήματα SQL';
$lang['Administrators'] = 'Διαχειριστές';
$lang['Moderators'] = 'Ρυθμιστές: %s';
$lang['SortBy'] = 'Ταξινόμηση κατά: %s';

//
// User Panel Messages
//

// Initial Panel Screen
$lang['SessionInfo'] = 'Πληροφορίες συνεδρίασης';
$lang['SessionID'] = 'ID συνεδριασης';
$lang['IPAddress'] = 'Διεύθηνση IP';
$lang['Started'] = 'Έναρξη';
$lang['Updated'] = 'Ανανεώθηκε';
$lang['Minutes'] = 'λεπτά';
$lang['Hours'] = 'ώρες';
$lang['Days'] = 'μέρες';
$lang['Weeks'] = 'εβδομάδες';
$lang['Seconds'] = 'δευτερόλεπτα';
$lang['Pages'] = 'Προβολές σελίδων';
$lang['AutoLogin'] = 'Αυτόματη Σύνδεση';
$lang['Enabled'] = 'Ενεργό';
$lang['Disabled'] = 'Ανενεργό';
$lang['Enable'] = 'Ενεργοποίηση';
$lang['Disable'] = 'Απενεργοποίηση';
// Subscriptions Panel
$lang['Subscriptions'] = 'Παρακολουθήσεις';
// Subscription Actions
$lang['SubscribeTopic'] = 'Παρακολούθηση Θέματος';
$lang['UnsubscribeTopic'] = 'Σταμάτημα παρακολούθησης Θέματος';
$lang['SubscribedTopic'] = 'Θα ενημερώνεστε για τυχόν εξελίσεις σε αυτό το θέμα.';
$lang['UnsubscribedTopic'] = 'Δεν θα ενημερώνεστε για τυχόν εξελίσεις σε αυτό το θέμα πλέον.';
$lang['SubscribeToThisTopic'] = 'Παρακολούθηση του συγκεκριμένου Θέματος.';
$lang['NoSubscribedTopics'] = 'Δεν έχετε δηλώσει ενδιαφέρον για κάποιο Θέμα ακόμη.';

// View profile
$lang['ViewProfile'] = 'Προβολή Προφίλ';
$lang['Profile'] = 'Το προφίλ του/ης %s';
$lang['RealName'] = 'Αληθινό Όνομα';
$lang['Level'] = 'Επίπεδο';
$lang['Rank'] = 'Βαθμός';
$lang['Registered'] = 'Ημερομηνία Εγγραφής';
$lang['Posts'] = 'Δημοσιεύσεις';
$lang['PostsPerDay'] = 'Δημοσιεύσεις ανα ημέρα';
$lang['LastLogin'] = 'Τελευταία Σύνδεση';
$lang['Location'] = 'Τοποθεσία';
$lang['Website'] = 'Διαδυκτιακός τόπος';
$lang['Occupation'] = 'Απασχόληση';
$lang['Interests'] = 'Ενδιαφέροντα';
$lang['Signature'] = 'Υπογραφή';
$lang['ContactInfo'] = 'Πληροφορίες Επικοινωνίας';
$lang['Email'] = 'Διεύθηνση e-mail';
$lang['SendMessage'] = 'Αποστολή ενός μυνήματος';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber';
$lang['Skype'] = 'Skype';
$lang['Hidden'] = 'Κρυφό';
// Edit Profile
$lang['EditProfile'] = 'Επεξεργασία Προφίλ';
$lang['AvatarURL'] = 'URL για την Προσωπική Εικόνα';
$lang['Avatar'] = 'Προσωπική Εικόνα';
// Edit Options
$lang['EditOptions'] = 'Επεξεργασία Επιλογών';
$lang['Language'] = 'Γλώσσα Πίνακα';
$lang['Template'] = 'Εμφάνηση Πίνακα';
$lang['PublicEmail'] = 'Δημοσια προβολή του e-mail σας';
$lang['PublicLastLogin'] = 'Δημόσια προβολή της τελευταίας επίσκεψης';
$lang['HideFromOnlineList'] = 'Απόκρυψη απο την λίστα συνδεδεμένων χρηστών';
$lang['DateFormat'] = 'Μορφή προβολή ημερομηνίας';
$lang['DateFormatHelp'] = 'Η μορφή πρέπει να έχει έγκυρη σύνταξη,<br /> σύμφωνα με τις προυποθέσεις της λειτουργείας %s της PHP.';
$lang['Timezone'] = 'Ζώνη Ώρας';
$lang['DST'] = 'Υπολογισμός ηλιοστάσιων';
$lang['QuickReply'] = 'Γρήγορη Απάντηση';
$lang['OpenLinksNewWindow'] = 'Άνοιγμα συνδέσμων σε νέο παράθυρο';
$lang['ReturnToTopicAfterPosting'] = 'Επιστροφή στο Θέμα μετά την δημοσίευση.';
$lang['HideAllAvatars'] = 'Αποκρυψη προσωπικών εικόνων';
$lang['HideUserinfo'] = 'Απόκρυψη πληροφοριών χρήστη';
$lang['HideAllSignatures'] = 'Απόκρυψη όλων των υπογραφών';

$lang['EditPasswd'] = 'Επεξεργασία Συνθηματικού';
$lang['CurrentPassword'] = 'Τρέχων συνθηματικό';
$lang['NewPassword'] = 'Νέο συνθηματικό';
$lang['NewPasswordAgain'] = 'Νέο συνθηματικό (επανάληψη)';
$lang['PasswdInfo'] = 'Το συνθηματικό δεν επιτρεπεται να περιέχει κένο ή εισαγωγικά. Απαιτούνται τουλάχιστον %d χαρακτήρες.';


//
// Button Messages
//
$lang['OK'] = 'Εντάξει';
$lang['Cancel'] = 'Ακύρωση';
$lang['IAccept'] = 'Δέχομαι';
$lang['IDontAccept'] = 'Αρνούμαι';
$lang['Yes'] = 'Ναί';
$lang['No'] = 'Όχι';
$lang['Reset'] = 'Επαναφορά αρχικών ρυθμίσεων';

//
// Feedback Messages
//
$lang['EmailSent'] = 'Επιτυχής αποστολή e-mail στον/ην %s!';
$lang['PasswordEdited'] = 'Επιτυχής επεξεργασία του συνθηματικού σας.';
$lang['OptionsEdited'] = 'Επιτυχής επεξεργασία των επιλογών σας επι του πίνακα συζητήσεων.';
$lang['ProfileEdited'] = 'Επιτυχής επεξεργασία των στοιχείων του προφίλ σας.';

$lang['NoMails'] = 'Ο συγκεκριμένος χρήστης έχει επιλέξει να μην λαμβάνει e-mails μέσω του φόρουμ.';
$lang['RegisteredNotActivated'] = 'Ο λογαριασμός σας, με όνομα χρήστη %s, δημιουργήθηκε. Έχει αποσταλεί ενα e-mail στην διεύθηνση %s, που περιέχει οδηγίες για το πως θα ενεργοποιήσετε τον λογαριασμό σας. Για να μπορείτε να συνδεθείτε με τον λογαριασμό σας, πρέπει πρώτα να ενεργοποιηθεί.';
$lang['RegisteredActivated'] = 'Ο λογαριασμός σας, με όνομα χρήστη %s, δημιουργήθηκε. Έχει αποσταλεί ενα e-mail στην διεύθηνση %s, που περιέχει τις πληροφορίες για να χρησιμοποιείσετε τον λογαριασμό σας. Μπορείτε να συνδεθείτε κατευθείαν.';
$lang['RegisteredReady'] = 'Ο λογαριασμός σας, με όνομα χρήστη %s, δημιουργήθηκε. Μπορείτε να συνδεθείτε κατευθείαν, χρησιμοποιώντας τα παρακάτω στοιχεία:';
$lang['UserAlreadyExists'] = 'Συγνώμη, υπάρχει ήδη κάποιος χρήστης με το όνομα %s σε αυτόν τον πίνακα συζητήσεων. Εάν είναι ο δικός σας λογαριασμός, είτε συνδεθείτε, είτε ζητήστε ενα νέο συνθηματικό. Σε περίπτωση που δεν είναι ο δικός σας λογαριασμός, παρακαλούμε διαλέξτε ένα διαφορετικό όνομα χρήστη.';
$lang['WrongPassword'] = 'Συγνώμη, αλλα το συνθηματικό που παρείχατε δεν είναι σωστό! Ζητήστε να σας αποσταλεί ένα νέο μέσω της επιλογής στην φόρμα σύνδεσης εάν το έχετε ξεχάσει.';
$lang['WrongActivationKey'] = 'Δεν ήταν εφικτή η ενεργοποίηση του λογαριασμού με αριθμό ID %d. Το κλειδί ενεργοποίησης ήταν λανθασμένο. Είστε σίγουρος/η οτι εν τω μεταξύ δεν ζητήσατε νέο συνθηματικό;';
$lang['WrongEmail'] = 'Συγγνώμη, αλλα το %s δεν είναι το e-mail που ανταποκρίνεται στον λογαριασμό σας, με όνομα %s. Εάν δεν μπορείτε να θυμηθείτε την διεύθηνσή του e-mail σας, παρακαλούμε επικοινωνήστε με τον διαχειριστή του πίνακα συζητήσεων.';
$lang['NewEmailNotActivated'] = 'Επιτυχημένη επεξεργασία του προφίλ σας. Λόγω του ότι αλλάξατε την διεύθηνση e-mail σας για τον λογαριασμό %s, θα χρειαστεί να γίνει επαναενεργοποιησή του. Έχει αποσταλεί ενα e-mail προς το %s με οδηγίες για το πώς θα γίνει η επαναενεργοποίηση. Εν το μεταξύ θα παραμείνετε αποσυνδεδεμένος.';
$lang['NotActivated'] = 'Ο λογαριασμός με το όνομα %s δεν έχει ενεργοποιηθεί ακόμη. Παρακαλούμε ελέξτε το email με το οποίο έγινε η εγγραφή σε αυτο το φόρουμ. Εκεί θα βρείτε οδηγίες για το πως θα ενεργοποίησετε τον λογαριασμό σας.';
$lang['ConfirmDeletePost'] = 'Είστε σίγουρος/η οτι θέλετε να διαγράψετε αυτήν την δημοσίευση στο θέμα %s; Αυτή η ενέργεια είναι μη αναστρέψιμη!';
$lang['ConfirmDeleteTopic'] = 'Είσαστε σίγουρος/η οτι θέλετε να διαγράψετε το θέμα %s στο φόρουμ %s; Αυτή η ενέργεια είναι μή αναστρέψιμη!';
$lang['NoSuchForum'] = 'Το φόρουμ με όνομα %s δεν υπάρχει (πλέον)σε αυτόν τον πίνακα ανακοινώσεων!';
$lang['NoSuchMember'] = 'Ο χρήστης %s δεν υπάρχει (πλέον) σε αυτόν τον πίνακα συζητήσεων.';
$lang['NoSuchPost'] = 'Η δημοσίευση %s δεν υπάρχει (πλέον) σε αυτόν τον πίνακα συζητήσεων.';
$lang['NoSuchTopic'] = 'Το Θέμα %s δεν υπάρχει (πλέον) σε αυτόν τον πίνακα συζητήσεων.';
$lang['LogOutConfirm'] = 'Είστε σίγουρος οτι θέλετε να αποσυνδεθείτε; Το cookie για την αυτόματη σας σύνδεση θα διαγραφεί!';
$lang['NotPermitted'] = 'Δεν έχετε την κατάλληλη διαπίστευση για την συγκεκριμένη ενέργεια. Σε περίπτωση που αμφιβάλλετε, επικοινωνήστε με τον διαχειριστή αυτού του πίνακα συζητήσεων.';
$lang['NoViewableForums'] = 'Δεν μπορείτε να δείτε κάποιο φόρουμ με το παρών σας επίπεδο. Εάν δεν είστε συνδεδεμένος/η, παρακαλούμε κάντε το, σε αντίθετη περίπτωση μάλλον δεν θα έπρεπε να είσαστε εδω.';
$lang['ForumIsLockedExplain'] = 'Αυτό το φόρουμ είναι κλειδωμένο. Μονάχα διαπιστευμένοι χρήστες μπορούν να δημοσιεύσουν νέα θέματα.';
$lang['TopicIsLockedExplain'] = 'Το Θέμα, στο οποίο προσπαθειτε να δημοσιεύσετε την απαντησή σας, είναι κλειδωμένο. Μονάχα διαπιστευμένοι χρήστες μπορούν να δημοσιεύσουν απαντήσεις.';

//
// e-mail messages part
//
$lang['RegistrationActivationEmailBody'] = '
Γεία σας,

	Σας μιλά το λογισμικό του φορουμ [board_name].
	Μόλις κάνατε την εγγραφή ενός λογαριασμού με όνομα [account_name], αλλα δεν έχει ενργοποιηθεί ακόμη.
	Παρακαλούμε ακολουθήστε τον παρακάτω σύνδεσμο για να ενεργοποίησετε τον λογαριασμό σας:

		[activate_link]

	ή αντιγράψτε τον και επικολήστε τον στην πεδίο διευθήνσης του φυλλομετρητή σας (browser).
	Εν ακολουθεία, θα μπορείτε να σύνδεθείτε στο φόρουμ με το παρακάτω όνομα χρήστη και συνθηματικό:

		Όνομα χρήστη: [account_name]
		Συνθηματικό: [password]

	Σε περίπτωση που ξεχάσετε το συνθηματικό σας, μπορείτε να ζητήσετε να σας αποσταλεί ένα νέο μέσω της επιλογής στην φόρμα συνδεσης.
						Σας ευχαριστούμε για την εγγραφή!

	[board_name]
	[board_link]
	[admin_email]';

$lang['SendpwdActivationEmailBody'] = '
Γεία σας,

	Σας μιλά το λογισμικό του φορουμ [board_name].
	Μόλις ζητήσατε ένα νέο συνθηματικό για τον λογαριασμό με όνομα [account_name].
	Παρακαλούμε ακολουθήστε τον παρακάτω σύνδεσμο για να επαναενεργοποιήσετε τον λογαριασμό σας:

		[activate_link]

	ή αντιγράψτε τον και επικολήστε τον στην πεδίο διευθήνσης του φυλλομετρητή σας (browser).
	Εν ακολουθεία, θα μπορείτε να σύνδεθείτε στο φόρουμ με το παρακάτω όνομα χρήστη και συνθηματικό:

		Όνομα χρήστη: [account_name]
		Συνθηματικό: [password]

	Σε περίπτωση που ξεχάσετε το συνθηματικό σας, μπορείτε να ζητήσετε να σας αποσταλεί ένα νέο μέσω της επιλογής στην φόρμα συνδεσης.

	[board_name]
	[board_link]
	[admin_email]';

$lang['SendpwdEmailBody'] = '
Γεία σας,

	Σας μιλά το λογισμικό του φορουμ [board_name].
	Μόλις ζητήσατε ένα νέο συνθηματικό για τον λογαριασμό με όνομα [account_name].
	Μπορείτε να συνδεθείτε με το παρακάτω Όνομα Χρήστη και Συνθηματικό:

		Όνομα χρήστη: [account_name]
		Συνθηματικό: [password]

	Σε περίπτωση που ξεχάσετε το συνθηματικό σας, μπορείτε να ζητήσετε να σας αποσταλεί ένα νέο μέσω της επιλογής στην φόρμα συνδεσης.

	[board_name]
	[board_link]
	[admin_email]';

$lang['UserEmailBody'] = '
Γεία σας,

	Σας μιλά το λογισμικό του φορουμ [board_name].
	Ο χρήστης [username] σας στέλνει το ακόλουθο μύνημα μέσω του πίνακα συζητήσεων:

	[board_name]
	[board_link]
	[admin_email]
-----

[body]';

$lang['NewEmailActivationEmailBody'] = '
Γεία σας,

	Σας μιλά το λογισμικό του φορουμ [board_name].
	Μόλις αλλάξατε την διεύθηνση του e-mail σας στον λογαριασμό σας με όνομα χρήστη [account_name], αλλα δεν έχει επαναενεργοποιηθεί ακόμη.
	Παρακαλούμε ακολουθήστε τον παρακάτω σύνδεσμο για να επαναενεργοποιήσετε τον λογαριασμό σας:

		[activate_link]

	ή αντιγράψτε τον και επικολήστε τον στην πεδίο διευθήνσης του φυλλομετρητή σας (browser).
	Εν ακολουθεία, θα μπορείτε να σύνδεθείτε στο φόρουμ με το παρακάτω όνομα χρήστη και συνθηματικό:

		Όνομα χρήστη: [account_name]
		Συνθηματικό: [password]

	Σε περίπτωση που ξεχάσετε το συνθηματικό σας, μπορείτε να ζητήσετε να σας αποσταλεί ένα νέο μέσω της επιλογής στην φόρμα συνδεσης.

	[board_name]
	[board_link]
	[admin_email]';

$lang['RegistrationEmailBody'] = '
Γεία σας,

	Σας μιλά το λογισμικό του φορουμ [board_name].
	Μόλις αποκτήσατε έναν λογαριασμό με όνομα χρήστη [account_name].
	Μπορείτε να συνδεθείτε με το παρακάτω Όνομα Χρήστη και Συνθηματικό:

		Όνομα χρήστη: [account_name]
		Συνθηματικό: [password]

	Σε περίπτωση που ξεχάσετε το συνθηματικό σας,
	μπορείτε να ζητήσετε να σας αποσταλεί ένα νέο μέσω της επιλογής στην φόρμα συνδεσης.

	[board_name]
	[board_link]
	[admin_email]';

$lang['NewReplyEmailBody'] = '
Γεία σας,

	Σας μιλά το λογισμικό του φορουμ [board_name].
	Κάποιος ([poster_name]) απάντησε σε ένα θέμα που παρακολουθείτε ("[topic_title]").
	Για να δείτε την δημοσίευση, παρακαλούμε ακολουθήστε τον παρακάτω σύνδεσμο:
		[topic_link].

	Εάν θελετε να σταματήσετε να παρακολουθείτε αυτό το Θέμα ακολουθήστε τον παρακατω σύνδεσμο (απαιτείται να γίνει σύνδεση):
		[unsubscribe_link].

	[board_name]
	[board_link]
	[admin_email]';

//
// Terms of Use
//
$lang['TermsOfUseContent'] = 'Με την εγγραφή σας δεσμεύεστε με τους ανωτέρω όρους.

Συμφωνείτε οτι όλα τα μυνήματα που βρίσκοντε σε αυτόν τον Πίνακα Συζητήσεων εκφράζουν τις απόψεις του εκάστοτε συγγραφέα και όχι του webmaster, των διαχειριστών ή των συντονιστών, εξαιρουμένων των δικό τους μυνημάτων

Συμφωνείτε να μην αναρτάτε μυνήματα με υβριστικό, άσεμνο, πρόστυψο, χυδαίο, συκοφαντικό, απεχθές, απειλητικό, πορωγραφικού προσανατολισμού ή οποιοδήποτε άλλο περιεχόμενο που υπόκειται στην νομοθετική αρχή.

Η διεύθηνση IP σας αποθηκεύεται μαζί με κάθε μύνημα που αναρτάται απο εσάς .

Επίσης, συμφωνείτε ότι, οι διαχειριστές και οι συντονιστές επιτρέπεται να επεξεργαστούν, διαγράψουν, μετακινήσουν ή να κλειδώσουν οποιαδήποτε ανάρτηση ή Θ. Ενότητα όπου αυτοί κρίνουν αναγκαίο.

Όλες οι πληροφορίες που αναρτούνται απο εσάς θα αποθηκεύονται σε σύστημα βάσης δεδομένων για μελλοντική αναφορά σε αυτές. Οι διαχειριστές του Πίνακα Συζήτησης δεν πρόκειται να γνωστοποιήσουν τις πληροφορίες αυτές, σε τρίτο πρόσωπο ή φορέα, χωρίς την αδειά σας ή σε περίπτωση νομικών θεμάτων.Όμως, ούτε ο webmaster, ούτε κανείς από τους διαχειριστές ή συντονιστές, αλλά και τα μέλη της UseBB Team, δεν φέρει την ευθύνη απώλειάς των πληροφοριών σας από κακόβουλους χρήστες σε περίπτωση εισβολής τους στον διακομιστή.

Αυτός ο Πίνακας Συζητήσεων κάνει χρήση των cookies για να αποθηκεύσει απαραίτητες για την λειτουργεία του προσωρινές πληροφορίες, αυτά αποθηκεύονται στον υπολογιστή σας.Επίσης, ένα cookie μπορεί να αποθηκεύσει την ταυτότητα χρήστη και το συνθηματικό σας σε κωδικοποιημένη μορφή για να ενεργοποιήσει την αυτόματη σύνδεση σας με τα προαναφερθέντα στοιχεία στον λογαριασμό σας εφόσων το επιλέξετε.

Εάν δεν θέλετε τα cookies να αποθηκεύονται στον υπολογιστή σας, συμβουλευτείτε στις οδηγίες χρήσης του φυλλομετρητή σας, για την απενεργοποίηση των cookies.

Επιλέγοντας την κάτωθεν επιλογή "Συμφωνώ", αποδέχεστε και συμφωνείτε σε όλους τους ανωτέρω όρους.';