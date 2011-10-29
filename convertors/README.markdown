Convertors
==========

phpbb-2.0.php
-------------

This convertor program will convert members, categories, forums, topics, posts and topic subscriptions of your phpBB 2.0.x install to UseBB. It will, however, **not** keep:

* the permissions of the boards (all boards become default UseBB permissions = world-readable);
* the permissions of members, except for admins which will also be admins on UseBB;
* any other content such as bans, instant messages, ...

Please keep this in mind before converting your forum. Converting a phpBB board will not delete or alter the content in phpBB's database, so you have nothing to lose.

* Date: 2006-05-26

smf-1.0.php
-----------

This is a very beta convertor for SMF 1.0 forums I created for a project I participate in. It has been tested on a forum with 51109 posts in 7008 topics posted by 2013 members. The convertor converted members, categories, forums, topics and posts in less than 30 seconds.

However, there is a problem with the user accounts in the sense that SMF uses a different way of encrypting passwords. To be able to login at the converted forum you will first need to request a new password.

* Date: 2006-05-21
