<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'win(allValues , $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'win(allValues 1009, $30)' => '1, 2, 3, 5, 6, 7, 8, 9',
		'win(allValues 1010, $30)' => '1, 2, 4, 5, 6, 7, 8, 9',
		'win(allValues 1115, $30)' => '1, 2, 3, 5, 6, 7, 8, 9, 10',
		'win(allValues 1123, $30)' => '1, 3, 4, 5, 6, 7, 8, 9, 10',
		'win(allValues 1128, $30)' => '1, 2, 3, 4, 5, 6, 7, 9, 10',
		'win(allValues 1129, $30)' => '2, 5, 6, 7, 8, 9',
		'win(allValues 1155, $30)' => '1, 2, 4, 5, 6, 7, 8, 9, 10',
		'win(allValues 1250, $30)' => '1, 2, 5, 6, 7, 8, 9',
		'win(allValues 128, $30)' => '1, 2, 3, 5, 6, 7, 8',
		'win(allValues 129, $30)' => '1, 2, 4, 5, 6, 7',
		'win(allValues 1569, $30)' => '1, 3, 5, 7, 8, 9',
		'win(allValues 1570, $30)' => '1, 4, 5, 6, 7, 8, 9',
		'win(allValues 174, $30)' => '1, 2, 3, 5, 7, 8, 9',
		'win(allValues, union)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'win(allValues, intersection)' => '5, 7',
	],
	'2' => [
		/**
		Race 2
		*/
		'win(allValues , $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'win(allValues 1, $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'win(allValues 1012, $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'win(allValues 1026, $30)' => '2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'win(allValues 1031, $30)' => '1, 2, 3, 4, 5, 6, 7, 10, 11',
		'win(allValues 1097, $30)' => '1, 2, 3, 4, 5, 6, 7',
		'win(allValues 1106, $30)' => '2, 3, 4, 5, 6, 7, 10, 11',
		'win(allValues 1454, $30)' => '1, 2, 3, 4, 6, 7, 8, 9, 10, 11',
		'win(allValues 1457, $30)' => '1, 2, 3, 4, 6, 7, 8, 9',
		'win(allValues 1466, $30)' => '2, 4, 5, 6, 7, 8, 9, 10, 11',
		'win(allValues 1572, $30)' => '1, 2, 3, 4, 5, 6, 7, 8',
		'win(allValues 1586, $30)' => '2, 3, 4, 5, 6, 8, 9',
		'win(allValues 1587, $30)' => '2, 3, 4, 5, 6, 7, 8, 9',
		'win(allValues 306, $30)' => '2, 3, 4, 5, 6, 7, 8, 10, 11',
		'win(allValues, union)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'win(allValues, intersection)' => '2, 4, 6',
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
		'win(allValues , $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'win(allValues 1, $30)' => '1, 2, 3, 4, 5, 6, 8, 10, 11, 12',
		'win(wp 100, 30)' => '4, 8, 12',
		'place(end-wp 100, $60)' => '12',
		'win(allValues 1009, $30)' => '1, 2, 3, 4, 5, 6, 7, 10, 11, 12',
		'win(allValues 1016, $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 11, 12',
		'win(allValues 1020, $30)' => '1, 2, 3, 4, 5, 6, 7, 11, 12',
		'win(allValues 1024, $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'win(wp 1024, 30)' => '1, 2, 3, 4, 5, 6, 7, 8',
		'win(allValues 1029, $30)' => '1, 2, 3, 4, 6, 7, 8, 10, 11, 12',
		'win(allValues 1108, $30)' => '1, 2, 4, 5, 6, 7, 11, 12',
		'win(allValues 1329, $30)' => '1, 2, 3, 4, 5, 6, 10, 11, 12',
		'win(allValues 1340, $30)' => '1, 2, 3, 4, 5, 6, 11, 12',
		'win(allValues 1344, $30)' => '1, 2, 3, 4, 5, 6, 8, 10, 11',
		'win(allValues 1348, $30)' => '1, 2, 4, 5, 6, 11, 12',
		'win(allValues 183, $30)' => '1, 2, 3, 4, 5, 6, 7, 10, 11',
		'win(allValues 428, $30)' => '1, 2, 4, 5, 6, 7, 8, 10, 11, 12',
		'win(allValues 59, $30)' => '1, 2, 3, 4, 5, 6, 7',
		'win(allValues 628, $30)' => '1, 3, 5, 6, 7, 11, 12',
		'win(allValues, union)' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'win(allValues, intersection)' => '1, 6',
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
		'win(allValues , $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'place(end-favorites , $60)' => '6',
		'win(allValues 1, $30)' => '1, 2, 3, 5, 6, 7, 8, 9, 10',
		'win(allValues 1000, $30)' => '1, 2, 3, 4, 6, 7, 8, 9, 10',
		'win(allValues 1003, $30)' => '1, 3, 6, 7, 8, 9, 10',
		'win(wp 1003, 30)' => '1, 2, 3',
		'place(end-wp 1003, $60)' => '3',
		'win(allValues 1006, $30)' => '1, 2, 3, 4, 5, 6, 8, 9, 10',
		'win(allValues 1016, $30)' => '1, 2, 4, 6, 8, 9, 10',
		'win(allValues 1023, $30)' => '2, 3, 5, 6',
		'win(allValues 1026, $30)' => '1, 2, 3, 5, 6, 8, 9',
		'win(allValues 1093, $30)' => '1, 2, 3, 5, 6, 7, 8',
		'win(allValues 1176, $30)' => '1, 3, 4, 6, 7, 8, 9, 10',
		'win(wp 1253, 30)' => '2, 3, 6',
		'win(allValues 345, $30)' => '1, 2, 3, 5, 6, 7, 8, 9',
		'win(allValues, union)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'win(allValues, intersection)' => '6',
	],
	'7' => [
		/**
		Race 7
		*/
		'win(allValues , $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'place(end-favorites , $60)' => '10',
		'win(allValues 1, $30)' => '1, 2, 3, 4, 5, 6, 7',
		'win(wp 1008, 30)' => '1, 2, 3, 4',
		'win(allValues 1012, $30)' => '1, 3, 4, 5, 6, 7, 8, 9',
		'win(allValues 102, $30)' => '1, 2, 3, 4, 5, 6, 7, 8',
		'win(allValues 1034, $30)' => '1, 2, 3, 5, 6, 7, 8, 9',
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
		'win(allValues , $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'win(allValues 1019, $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'win(allValues 1028, $30)' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11',
		'win(allValues 1039, $30)' => '1, 2, 3, 4, 5, 8, 9, 10, 11',
		'win(allValues 1059, $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'win(allValues 1071, $30)' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11',
		'win(allValues 1099, $30)' => '1, 3, 4, 5, 6, 7, 8',
		'win(allValues 1102, $30)' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'win(allValues 1119, $30)' => '1, 2, 3, 5, 8, 9, 10, 11',
		'win(allValues 118, $30)' => '1, 2, 3, 4, 6, 7, 8, 9, 10',
		'win(allValues 1388, $30)' => '1, 2, 3, 4, 5, 6, 8, 9, 10',
		'win(allValues 1399, $30)' => '2, 3, 4, 8, 9, 10',
		'win(allValues 1406, $30)' => '2, 3, 4, 5, 8, 9, 10, 11',
		'win(allValues 1414, $30)' => '1, 2, 3, 4, 8, 9, 10, 11',
		'win(allValues 1455, $30)' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11',
		'win(allValues 367, $30)' => '1, 2, 3, 4, 6, 7, 8, 9, 10, 11',
		'win(allValues, union)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'win(allValues, intersection)' => '3, 8',
	],
];
