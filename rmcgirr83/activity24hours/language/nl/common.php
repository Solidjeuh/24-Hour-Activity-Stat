<?php

/**
*
*
* @package - Activity 24 hours
* @copyright (c) 2015 RMcGirr83
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'BOTS_24HOUR_TOTAL'	=> array(
		1 => '%d bot',
		2 => '%d bots',
	),
	'USERS_24HOUR_TOTAL'	=>  '%d geregistreerd,',
	'HIDDEN_24HOUR_TOTAL'	=> ' %d verborgen, ',
	'GUEST_ONLINE_24'		=> array(
		1 => ' and %d gast',
		2 => ' and %d gasten',
	),
	'LAST_24_HOURS'	=> ' activiteiten van de laatste 24 uur',
	'24HOUR_TOPICS'			=> 'Nieuwe onderwerpen %d',
	'24HOUR_POSTS'			=> 'Nieuwe berichten %d',
	'24HOUR_USERS'			=> 'Nieuwe gebruikers %d',
	'NO_ONLINE_BOTS'		=> 'Geen bots actief',

	'TWENTYFOURHOUR_STATS'	=> 'activiteiten van de laatste 24 uur',
	'TOTAL_24HOUR_USERS'	=> array(
		1 => 'In totaal was er %d gebruiker :: ',
		2 => 'In totaal waren er %d gebruikers :: ',
	),
));
