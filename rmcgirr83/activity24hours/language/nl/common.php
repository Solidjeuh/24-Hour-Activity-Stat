<?php

/**
*
*
* @package - Activity 24 hours
* @copyright (c) 2015 RMcGirr83
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

$lang = array_merge($lang, [
	'BOTS_24HOUR_TOTAL'	=> [
		1 => ' %d bot,',
		2 => ' %d bots,',
	],
	'USERS_24HOUR_TOTAL'	=>  '%d geregistreerd,',
	'HIDDEN_24HOUR_TOTAL'	=> ' %d verborgen',
	'GUEST_ONLINE_24'		=> [
		1 => ' en %d gast',
		2 => ' en %d gasten',
	],
	'LAST_24_HOURS'	=> ' actief in de afgelopen 24 uur',
	'24HOUR_TOPICS'			=> 'Nieuwe onderwerpen %d',
	'24HOUR_POSTS'			=> 'Nieuwe berichten %d',
	'24HOUR_USERS'			=> 'Nieuwe gebruikers %d',
	'NO_ONLINE_BOTS'		=> 'Geen bots actief',

	'TWENTYFOURHOUR_STATS'	=> 'Activiteit in de afgelopen 24 uur',
	'TOTAL_24HOUR_USERS'	=> [
		1 => 'In totaal was er %d gebruiker :: ',
		2 => 'In totaal waren er %d gebruikers :: ',
	],
	'SHOW_LIST'	=> 'Toon lijst',
	'HIDE_LIST'	=> 'Verberg lijst',
	'EXTENSION_REQUIREMENTS'	=> 'Deze extensie vereist PHPBB versie %1$s.<br>Controleer welke versies u heeft en update indien nodig om deze extensie te gebruiken.',
	//Donation
	'PAYPAL_IMAGE_URL'          => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                => 'Doneer met PayPal',
	'BUY_ME_A_BEER_URL'         => 'https://paypal.me/RMcGirr83',
	'BUY_ME_A_BEER'				=> 'Koop me een biertje voor het maken van deze extensie',
	'BUY_ME_A_BEER_SHORT'		=> 'Doe een donatie voor deze extensie',
	'BUY_ME_A_BEER_EXPLAIN'		=> 'Deze extensie is volledig gratis. Het is een project waar ik mijn tijd aan doorbreng voor het plezier en het gebruik van de PHPBB-gemeenschap. Als u het leuk vindt om deze extensie te gebruiken, of als het uw forum ervan heeft geprofiteerd, overweeg dan <a href="https://paypal.me/RMcGirr83" target="_blank" rel="noreferrer noopener">een biertje kopen</a>. Het zou zeer op prijs worden gesteld. <i class="fa fa-smile-o" style="color:green;font-size:1.5em;" aria-hidden="true"></i>',
]);
