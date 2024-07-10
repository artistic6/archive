<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'win(allValues 1129, $30)' => '2, 5, 6, 7, 8, 9',
		'win(allValues 1250, $30)' => '1, 2, 5, 6, 7, 8, 9',
		'win(allValues 128, $30)' => '1, 2, 3, 5, 6, 7, 8',
		'win(allValues 129, $30)' => '1, 2, 4, 5, 6, 7',
		'win(allValues 1569, $30)' => '1, 3, 5, 7, 8, 9',
		'win(allValues 1570, $30)' => '1, 4, 5, 6, 7, 8, 9',
		'win(allValues 174, $30)' => '1, 2, 3, 5, 7, 8, 9',
		'win(allValues, union)' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'win(allValues, intersection)' => '5, 7',
	],
	'2' => [
		/**
		Race 2
		*/
		'win(allValues 1097, $30)' => '1, 2, 3, 4, 5, 6, 7',
		'win(allValues 1586, $30)' => '2, 3, 4, 5, 6, 8, 9',
		'win(allValues, union)' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'win(allValues, intersection)' => '2, 3, 4, 5, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'win(allValues , $30)' => '1, 2, 3, 5, 6, 7',
		'win(allValues 101, $30)' => '1, 3, 6, 7',
		'win(allValues 1027, $30)' => '2, 3, 5, 6',
		'win(allValues 1032, $30)' => '1, 3, 5, 6, 7',
		'win(allValues, union)' => '1, 2, 3, 5, 6, 7',
		'win(allValues, intersection)' => '3, 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'win(wp 100, 30)' => '4, 8, 12',
		'place(end-wp 100, $60)' => '12',
		'win(wp 1024, 30)' => '1, 2, 3, 4, 5, 6, 7, 8',
		'win(allValues 1348, $30)' => '1, 2, 4, 5, 6, 11, 12',
		'win(allValues 59, $30)' => '1, 2, 3, 4, 5, 6, 7',
		'win(allValues 628, $30)' => '1, 3, 5, 6, 7, 11, 12',
		'win(allValues, union)' => '1, 2, 3, 4, 5, 6, 7, 11, 12',
		'win(allValues, intersection)' => '1, 5, 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'win(allValues , $30)' => '1, 2, 3, 4, 5, 10, 11',
		'win(allValues 1, $30)' => '1, 3, 4, 5, 10, 11',
		'win(allValues 100, $30)' => '1, 2, 3, 4, 5',
		'win(allValues 1621, $30)' => '1, 2, 4, 5',
		'win(allValues 1662, $30)' => '1, 2, 3, 4, 10, 11',
		'win(allValues, union)' => '1, 2, 3, 4, 5, 10, 11',
		'win(allValues, intersection)' => '1, 4',
	],
	'6' => [
		/**
		Race 6
		*/
		'place(end-favorites , $60)' => '6',
		'win(allValues 1003, $30)' => '1, 3, 6, 7, 8, 9, 10',
		'win(wp 1003, 30)' => '1, 2, 3',
		'place(end-wp 1003, $60)' => '3',
		'win(allValues 1016, $30)' => '1, 2, 4, 6, 8, 9, 10',
		'win(allValues 1023, $30)' => '2, 3, 5, 6',
		'win(allValues 1026, $30)' => '1, 2, 3, 5, 6, 8, 9',
		'win(allValues 1093, $30)' => '1, 2, 3, 5, 6, 7, 8',
		'win(wp 1253, 30)' => '2, 3, 6',
		'win(allValues, union)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'win(allValues, intersection)' => '6',
	],
	'7' => [
		/**
		Race 7
		*/
		'place(end-favorites , $60)' => '10',
		'win(allValues 1, $30)' => '1, 2, 3, 4, 5, 6, 7',
		'win(wp 1008, 30)' => '1, 2, 3, 4',
		'win(allValues 1208, $30)' => '1, 3, 5, 6, 7, 8, 9',
		'win(allValues 1223, $30)' => '1, 2, 3, 5, 6, 7, 8',
		'win(allValues 1229, $30)' => '1, 2, 5, 6',
		'win(allValues 1236, $30)' => '3, 5, 6, 7, 8, 9',
		'win(allValues 1241, $30)' => '1, 2, 3, 5, 6',
		'win(allValues 1248, $30)' => '1, 2, 3, 4, 6, 7',
		'win(allValues 1253, $30)' => '1, 2, 5, 6, 7',
		'win(allValues 1264, $30)' => '1, 2, 3, 4, 5',
		'win(allValues 1266, $30)' => '1, 2, 3, 4, 5, 6',
		'win(allValues 1492, $30)' => '1, 3, 4, 5, 6, 7',
		'win(allValues 302, $30)' => '1, 3, 4, 5, 6, 7, 8',
		'win(allValues 308, $30)' => '1, 3, 4, 5',
		'win(allValues, union)' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'win(allValues, intersection)' => '',
	],
	'8' => [
		/**
		Race 8
		*/
		'win(allValues , $30)' => '1, 3, 4, 5, 7, 8',
		'win(allValues 1008, $30)' => '1, 3, 4, 5, 7',
		'win(wp 1008, 30)' => '1, 3, 7',
		'place(end-wp 1008, $60)' => '7',
		'win(allValues 1488, $30)' => '1, 4, 5, 7',
		'win(allValues 1491, $30)' => '3, 4, 7, 8',
		'win(allValues, union)' => '1, 3, 4, 5, 7, 8',
		'win(allValues, intersection)' => '4, 7',
	],
	'9' => [
		/**
		Race 9
		*/
		'win(allValues 1099, $30)' => '1, 3, 4, 5, 6, 7, 8',
		'win(allValues 1399, $30)' => '2, 3, 4, 8, 9, 10',
		'win(allValues, union)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'win(allValues, intersection)' => '3, 4, 8',
	],
];
