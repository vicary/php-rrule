<?php

/**
 * Translation file for Traditional Chinese language.
 *
 * Most strings can be an array, with a value as the key. The system will
 * pick the translation corresponding to the key. The key "else" will be picked
 * if no matching value is found. This is useful for plurals.
 *
 * Licensed under the MIT license.
 *
 * For the full copyright and license information, please view the LICENSE file.
 *
 * @author Vicary Archangel <vicary.archangel@member.mensa.org>
 * @link https://github.com/rlanvin/php-rrule
 */
return array(
	'yearly' => array(
		1 => '每年',
		'else' => '每 %{interval} 年',
	),
	'monthly' => array(
		1 => '每月',
		'else' => '每 %{interval} 月',
	),
	'weekly' => array(
		1 => '每周',
		2 => '每 2 周',
		'else' => '每 %{interval} 周',
	),
	'daily' => array(
		1 => '每日',
		2 => '每 2 日',
		'else' => '每 %{interval} 日',
	),
	'hourly' => array(
		1 => '每小時',
		'else' => '每 %{interval} 小時',
	),
	'minutely' => array(
		1 => '每分鐘',
		'else' => '每 %{interval} 分鐘',
	),
	'secondly' => array(
		1 => '每秒',
		'else' => '每 %{interval} 秒',
	),
	'dtstart' => '，於 %{date} 開始',
	'infinite' => '，直到永遠',
	'until' => '，直到 %{date}',
	'count' => array(
		1 => '，一次',
		'else' => '，%{count} 次',
	),
	'and' => '和',
	'x_of_the_y' => array(
		'yearly' => '一年的%{x}', // e.g. the first Monday of the year, or the first day of the year
		'monthly' => '一個月的%{x}',
	),
	'bymonth' => '%{months}',
	'months' => array(
		1 => '一月',
		2 => '二月',
		3 => '三月',
		4 => '四月',
		5 => '五月',
		6 => '六月',
		7 => '七月',
		8 => '八月',
		9 => '九月',
		10 => '十月',
		11 => '十一月',
		12 => '十二月',
	),
	'byweekday' => '%{weekdays}',
	'weekdays' => array(
		1 => '周一',
		2 => '周一',
		3 => '周三',
		4 => '周四',
		5 => '周五',
		6 => '周六',
		7 => '周日',
	),
	'nth_weekday' => array(
		1 => '第 1 個%{weekday}', // e.g. the first Monday
		2 => '第 2 個%{weekday}',
		3 => '第 3 個%{weekday}',
		'else' => '第 %{n} 個%{weekday}',
	),
	'-nth_weekday' => array(
		-1 => '最後的%{weekday}', // e.g. the last Monday
		-2 => '倒數第 2 個%{weekday}',
		-3 => '倒數第 3 個%{weekday}',
		'else' => '倒數第 %{n} 個%{weekday}',
	),
	'byweekno' => array(
		1 => '第 %{weeks} 周',
		'else' => '第 %{weeks} 周',
	),
	'nth_weekno' => '%{n}',
	'bymonthday' => '於%{monthdays}',
	'nth_monthday' => array(
		1 => '1 日',
		2 => '2 日',
		3 => '3 日',
		21 => '21 日',
		22 => '22 日',
		23 => '23 日',
		31 => '31 日',
		'else' => '%{n} 日',
	),
	'-nth_monthday' => array(
		-1 => '最後 1 日',
		-2 => '倒數第 2 日',
		-3 => '倒數第 3 日',
		-21 => '倒數第 21 日',
		-22 => '倒數第 22 日',
		-23 => '倒數第 23 日',
		-31 => '倒數第 31 日',
		'else' => '倒數第 ${n} 日',
	),
	'byyearday' => array(
		1 => '年中 %{yeardays} 日',
		'else' => '年中 %{yeardays} 日',
	),
	'nth_yearday' => array(
		1 => '第 1',
		2 => '第 2',
		3 => '第 3',
		'else' => '第 %{n}',
	),
	'-nth_yearday' => array(
		-1 => '最後 1',
		-2 => '倒數第 2',
		-3 => '倒數第 3',
		'else' => '倒數第 %{n}',
	),
	'byhour' => array(
		1 => '%{hours}',
		'else' => '%{hours}',
	),
	'nth_hour' => '%{n}時',
	'byminute' => array(
		1 => '%{minutes}',
		'else' => '%{minutes}',
	),
	'nth_minute' => '%{n}分',
	'bysecond' => array(
		1 => '%{seconds}',
		'else' => '%{seconds}',
	),
	'nth_second' => '%{n}秒',
	'bysetpos' => '，在以上情況的第 %{setpos} 次發生',
	'nth_setpos' => array(
		1 => '1',
		2 => '2',
		3 => '3',
		'else' => '%{n}',
	),
	'-nth_setpos' => array(
		-1 => '倒數第 1',
		-2 => '倒數第 2',
		-3 => '倒數第 3',
		'else' => '倒數第 %{n}',
	)
);
