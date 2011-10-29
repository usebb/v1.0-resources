ACP modules
===========

active_members.php
------------------

This module allows you to see a list of active members in the past `x` hours, along with the time of their last pageview.

dnsbl_test.php
--------------

This module allows an administrator to test a number of DNSBL servers given an IP address. A small report is made with notice of positive hits and query time for each server.

ipbans_export.php
-----------------

This ACP feature can export banned IP addresses in a given plain text format. E.g. export your IP bans for an Apache configuration or `.htaccess` file (`deny from %s`).

Next to this, all currently banned IP addresses can be removed in one step.

members.php
-----------

Allows editing of a members profile via the ACP. Also post count, rank, etc.

* Author: [gaia_101](http://sourceforge.net/users/gaia_101/)

merge_topics.php
----------------

This ACP module allows an administrator to merge two topics into one single topic. The posts of topic A are transferred to topic B, while keeping the statistics and without breaking the forum. This also works for topics in different forums.

moderators.php
--------------

An ACP module that allows you to change a members status to moderator, remove moderator status from a member, and also attach a moderator to a selected forum.

* Author: [gaia_101](http://sourceforge.net/users/gaia_101/)

set_template.php
----------------

This module allows the administrator to set the used template set for all his members to a specified one.

Note, this does not "lock" the template set, users may still change the template set in their panel afterwards.

translation-helper.php
----------------------

The original translation helper ACP module that was distributed with UseBB until 1.0 final.
