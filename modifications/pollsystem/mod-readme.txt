Patch the poll-mod into your UseBB-Installation:

	cd UseBB
	patch -Np1 <../usebb_1.0.12_poll.diff

Patch-command should be available on any Linux-machine and there are some versions
around for Windows. I think you can find them with Google.

For more information about UseBB and patch see:
	http://www.usebb.net/community/topic-1236.html

If you do not want to use the patch-utility you can change the files manually, but this
is a lot of work, because you have to apply the diff-file manually:

Lines starting with "---" tell you which file you have to change (.htaccess for example):
	--- UseBB/.htaccess	2007-04-11 21:01:58.000000000 +0200

Lines starting with "@@" tell you which lines you have to change (starting on line 24 for example):
	@@ -25,7 +24,9 @@

The following lines tell you what you have to change:
	 	RewriteRule ^topic-post([0-9]+)\.html?[\.,;\-]?$ topic.php?post=$1
	-	RewriteRule ^post-(forum|topic)([0-9]+)\.html?[\.,;\-]?$ post.php?$1=$2
	+	#************pizzamampf************
	+	RewriteRule ^post-(forum|topic|poll)([0-9]+)\.html?[\.,;\-]?$ post.php?$1=$2
	+	#************pizzamampf************
	 	RewriteRule ^post-topic([0-9]+)-quotepost([0-9]+)\.html?[\.,;\-]?$ post.php?topic=$1&quotepost=$2

Don't change the lines starting with a blank. Delete the lines starting with a "-". Add the lines starting 
with a "+".

Another possibility is to contact me and I will send you the changed files by mail. Feel free to do so, it's 
not a big problem, but I don't want to include them in the archive, because they almost certainly will break 
your whole forum, if you use any other modifications.

Create a new table in your database:
(CAUTION: Perhaps you must change the default "usebb"-prefix to match your database layout)

	CREATE TABLE usebb_pizza_polls (
	  id int(11) NOT NULL auto_increment,
	  postid int(11) NOT NULL default '0',
	  memberid int(11) NOT NULL default '0',
	  answer int(11) NOT NULL default '0',
	  `open` int(11) NOT NULL default '0',
	  PRIMARY KEY  (id),
	  KEY postid (postid),
	  KEY memberid (memberid),
	  KEY `open` (`open`)
	)

Some entries must be added to lang_XXX.php. See the included English version for the needed phrases.
My German translation also includes these entries. But make sure you have compatible versions of both packages.

All tables, variables and so on are prefixed with "pizza_" to avoid interference with the rest of UseBB. 
All parts in source I have changed have leading and trailing "//************pizzamampf************".

After installing this files you have a [poll] entry in the BBCode-links when posting.

It will enter this into your contentbox:
[poll](open)(multi)(nochange)query:
answer1:
answer2:
answer3:
[/poll]

You can enter a one-line query and one-line answers. If you need more or less than three answers, add or 
remove entries accordingly.

You can add text before and after the poll, but you can only have one poll per post at the moment. If you 
have more question in one topic, split them to multiple posts.

As long as "open" is included in brackets only the number of votes per answer is shown. If you remove the 
brackets also the membernames are listet for each answer.

If you remove the brackets around "multi" the user can select multiple answers with checkboxes instead of 
choosing only one answer from a select-list. Do not change the poll-type later, because answers are stored 
in different ways. So user-votes will appear on a wrong answer even if they have selected only one answer.

If you remove the brackets around "nochange", the user can only vote once and is not able to change his opinion later.

Parsing of the poll-code is a bit sensitive at the moment. So if you get the code displayed instead of 
showing the vote-form you should check the poll you have entered. Especially unwanted newlines or spaces 
between "[poll]", "open", "multi" and "nochange" can cause problems.

If you have any suggestions or questions you can contact me in the UseBB forum or send me a mail to 
pizzamampf@pizzamampf.de.

Bye

Pizzamampf


History:

1.0.12:
   - updated for UseBB 1.0.12

1.0.11:
   - updated for UseBB 1.0.11

1.0.8b:
   - added "nochange"-option
   - added some checks for manipulated post-vars

1.0.8a:
   - fixed error when using mysqli instead of mysql (thanx Dietrich and Stevenking)
   
1.0.8:
   - updated for UseBB 1.0.8

1.0.6b:
   - added multi-answer polls
1.0.6:
   - updated for UseBB 1.0.6

1.0.5:
   - updated for UseBB 1.0.5
   
1.0.3:
   - updated for UseBB 1.0.3
   
1.0.2:
   - updated for UseBB 1.0.2
   - fixed bug with friendly URLs (thanx Ingo :-)
   - installation as patchfile and sql-command
      
1.0.1:
   - updated for UseBB 1.0.1
   - fixed xml-error-bug

1.0:
   - adding polls to UseBB 1.0
