<?php
/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}  
/**
* DO NOT CHANGE 
*/
if (empty($lang) || !is_array($lang)) {
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

//
// Common Language Resources for Raid Attendance
//
$lang = array_merge($lang, array(
		'RAID_NIGHTS'				=> 'Raid Nights',
		'RAID_NIGHT_MON'			=> 'Monday',
		'RAID_NIGHT_TUE'			=> 'Tuesday',
		'RAID_NIGHT_WED'			=> 'Wednesday',
		'RAID_NIGHT_THU'			=> 'Thursday',
		'RAID_NIGHT_FRI'			=> 'Friday',
		'RAID_NIGHT_SAT'			=> 'Saturday',
		'RAID_NIGHT_SUN'			=> 'Sunday',

		'RAIDERS'					=> 'Raiders',
		'LEVEL'						=> 'Level',
		'RANK'						=> 'Rank',
		'CLASS'						=> 'Class',

		'CLASS_1'					=> 'Warrior',
		'CLASS_2'					=> 'Paladin',
		'CLASS_3'					=> 'Hunter',
		'CLASS_4'					=> 'Rogue',
		'CLASS_5'					=> 'Priest',
		'CLASS_6'					=> 'Death Knight',
		'CLASS_7'					=> 'Shaman',
		'CLASS_8'					=> 'Mage',
		'CLASS_9'					=> 'Warlock',
		'CLASS_11'					=> 'Druid',

		'RANK_0'					=> 'Guild Leader',
		'RANK_1'					=> 'Rank 1',
		'RANK_2'					=> 'Rank 2',
		'RANK_3'					=> 'Rank 3',
		'RANK_4'					=> 'Rank 4',
		'RANK_5'					=> 'Rank 5',
		'RANK_6'					=> 'Rank 6',
		'RANK_7'					=> 'Rank 7',
		'RANK_8'					=> 'Rank 8',
		'RANK_9'					=> 'Rank 9',

		'SAVE'						=> 'Save',

		'SIGNON'					=> 'Sign on',
		'SIGNOFF'					=> 'Sign off',
		'NOSHOW'					=> "Raider didn't show",
		'EMPTY'						=> 'Clear selection',
		'IS_RAIDER'					=> 'Expected to raid?',

		'DAY_MONTH'					=> '%1$s of %2$s', // 1st of November
		'DAY_NUMBER1'				=> '%dst', // 1st, 21st, 31st ...
		'DAY_NUMBER2'				=> '%dnd', // 2nd, 22nd, 32nd ...
		'DAY_NUMBER3'				=> '%drd', // 3rd, 23rd, 33rd ... 
		'DAY_NUMBER_OTHER'			=> '%dth', // 4th .. 19th, 24th-30th, etc.

		'STATUS_CHANGE_ON'			=> '%1$s marked %2$s as being online for raid %3$s',
		'STATUS_CHANGE_OFF'			=> '%1$s signed off for %2$s from raid %3$s',
		'STATUS_CHANGE_CLEAR'		=> '%1$s cleared status for %2$s on raid %3$s',
		'STATUS_CHANGE_NOSHOW'		=> '%1$s marked %2$s as being AWOL from raid %3$s',
	)
);
?>
