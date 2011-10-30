Hellenic language pack for UseBB version 0.4

Installation 
-----------------
Step 1:
	After you unzip the archive copy the folder 'languages' in your UseBB installation folder.

Step 2:
	Open 'config.php' found in the UseBB installation folder.

Step 3:
	Find the line : ( around line 57 )
		$conf['available_languages'] = array('English', 'Deutsch', 'Nederlands');
	and change it to :
		$conf['available_languages'] = array('English', 'Deutsch', 'Nederlands', 'Hellenic');

Step 4: (optional)
	If you need the default language for the board to be Hellenic,
	find the line : ( around line 57 )
		$conf['language'] = 'English';
	and change it to :
		$conf['language'] = 'Hellenic';

You are done!

Notes
-----------------
If you notice any mistakes I'll be happy to fix them.
The language pack has been tested with UTF-8 encoding.
If all you see is garbaged characters try saving the file with ISO-8859-7 encoding
and change the encoding in the 'languages/lang_Hellenic.php'
	$lang['character_encoding'] = 'utf-8';
should be changed to 
	$lang['character_encoding'] = 'iso-8859-7';


Best Regards

George Petsagourakis ( petsagouris@hotmail.com )