<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 3, 5, 8, 11, 12',
		'inter(fav 1, fav 3)' => '1, 4, 5, 7, 10',
		'inter(fav 1, fav 5)' => '1, 5, 7, 8',
		'inter(fav 1, fav 8)' => '1, 5, 8, 10',
		'inter(fav 1, fav 11)' => '4, 7, 8, 11',
		'inter(fav 1, fav 12)' => '8, 10',
		'inter(fav 3, fav 5)' => '1, 5, 7, 12',
		'inter(fav 3, fav 8)' => '1, 2, 3, 5, 10, 12',
		'inter(fav 3, fav 11)' => '4, 7, 12',
		'inter(fav 3, fav 12)' => '10, 12',
		'inter(fav 5, fav 8)' => '1, 5, 8, 12',
		'inter(fav 5, fav 11)' => '7, 8, 12',
		'inter(fav 5, fav 12)' => '8, 12',
		'inter(fav 8, fav 11)' => '8, 12',
		'inter(fav 8, fav 12)' => '8, 10, 12',
		'inter(fav 11, fav 12)' => '8, 12',
		'union' => '1, 2, 3, 4, 5, 7, 8, 10, 11, 12',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 5, 6, 7, 10, 11',
		'inter(fav 1, fav 6)' => '2, 6',
		'inter(fav 1, fav 7)' => '2, 7',
		'inter(fav 5, fav 6)' => '4, 5, 10',
		'inter(fav 5, fav 7)' => '4',
		'inter(fav 5, fav 10)' => '10',
		'inter(fav 6, fav 7)' => '2, 4',
		'inter(fav 6, fav 10)' => '10',
		'inter(fav 6, fav 11)' => '8',
		'union' => '2, 4, 5, 6, 7, 8, 10',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3, 5, 7, 10, 11, 12',
		'inter(fav 2, fav 3)' => '1, 8, 12',
		'inter(fav 2, fav 5)' => '5, 8',
		'inter(fav 2, fav 7)' => '1, 5, 12',
		'inter(fav 2, fav 11)' => '5',
		'inter(fav 2, fav 12)' => '2, 5, 12',
		'inter(fav 3, fav 5)' => '4, 7, 8',
		'inter(fav 3, fav 7)' => '1, 3, 7, 12',
		'inter(fav 3, fav 10)' => '3, 4, 9',
		'inter(fav 3, fav 11)' => '3',
		'inter(fav 3, fav 12)' => '12',
		'inter(fav 5, fav 7)' => '5, 7',
		'inter(fav 5, fav 10)' => '4',
		'inter(fav 5, fav 11)' => '5',
		'inter(fav 5, fav 12)' => '5',
		'inter(fav 7, fav 10)' => '3',
		'inter(fav 7, fav 11)' => '3, 5, 11',
		'inter(fav 7, fav 12)' => '5, 12',
		'inter(fav 10, fav 11)' => '3',
		'inter(fav 11, fav 12)' => '5',
		'union' => '1, 2, 3, 4, 5, 7, 8, 9, 11, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 4, 10, 12',
		'inter(fav 1, fav 2)' => '1, 2, 3, 5, 10, 11',
		'inter(fav 1, fav 4)' => '3, 11',
		'inter(fav 1, fav 10)' => '1, 10',
		'inter(fav 1, fav 12)' => '1, 3',
		'inter(fav 2, fav 4)' => '3, 9, 11, 12',
		'inter(fav 2, fav 10)' => '1, 10, 12',
		'inter(fav 2, fav 12)' => '1, 3, 12',
		'inter(fav 4, fav 10)' => '4, 12',
		'inter(fav 4, fav 12)' => '3, 12',
		'inter(fav 10, fav 12)' => '1, 12',
		'union' => '1, 2, 3, 4, 5, 9, 10, 11, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 4, 5, 7, 8',
		'inter(fav 3, fav 4)' => '1, 3, 4, 5, 7',
		'inter(fav 3, fav 5)' => '1, 3, 4, 5',
		'inter(fav 3, fav 7)' => '1, 4, 5, 7',
		'inter(fav 3, fav 8)' => '1, 4, 5, 7',
		'inter(fav 4, fav 5)' => '1, 3, 4, 5',
		'inter(fav 4, fav 7)' => '1, 4, 5, 7',
		'inter(fav 4, fav 8)' => '1, 4, 5, 7',
		'inter(fav 5, fav 7)' => '1, 4, 5',
		'inter(fav 5, fav 8)' => '1, 4, 5',
		'inter(fav 7, fav 8)' => '1, 4, 5, 7, 8',
		'union' => '1, 3, 4, 5, 7, 8',
		'win' => '3, 4, 5, 7, 8',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 2, 3, 5, 10',
		'inter(fav 1, fav 2)' => '3',
		'inter(fav 1, fav 3)' => '1, 3, 7, 9',
		'inter(fav 1, fav 5)' => '1',
		'inter(fav 1, fav 10)' => '7',
		'inter(fav 2, fav 3)' => '2, 3, 5',
		'inter(fav 2, fav 10)' => '10',
		'inter(fav 3, fav 5)' => '1',
		'inter(fav 3, fav 10)' => '7',
		'union' => '1, 2, 3, 5, 7, 9, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 5, 6, 8, 10, 12, 13',
		'inter(fav 1, fav 5)' => '2, 5, 7',
		'inter(fav 1, fav 8)' => '2, 8, 9',
		'inter(fav 1, fav 10)' => '8',
		'inter(fav 1, fav 12)' => '5',
		'inter(fav 5, fav 6)' => '10, 12',
		'inter(fav 5, fav 8)' => '2, 12',
		'inter(fav 5, fav 10)' => '10, 12',
		'inter(fav 5, fav 12)' => '5, 10, 12',
		'inter(fav 5, fav 13)' => '12',
		'inter(fav 6, fav 8)' => '12',
		'inter(fav 6, fav 10)' => '10, 12',
		'inter(fav 6, fav 12)' => '10, 12',
		'inter(fav 6, fav 13)' => '12',
		'inter(fav 8, fav 10)' => '8, 12',
		'inter(fav 8, fav 12)' => '12',
		'inter(fav 8, fav 13)' => '12',
		'inter(fav 10, fav 12)' => '10, 12',
		'inter(fav 10, fav 13)' => '12',
		'inter(fav 12, fav 13)' => '12',
		'union' => '2, 5, 7, 8, 9, 10, 12',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '3, 4, 5, 6, 7, 8, 13',
		'inter(fav 3, fav 4)' => '1, 6, 7, 8, 12',
		'inter(fav 3, fav 5)' => '5, 7, 8, 12',
		'inter(fav 3, fav 6)' => '6, 8, 12',
		'inter(fav 3, fav 7)' => '1, 5, 12',
		'inter(fav 3, fav 8)' => '1, 6, 8, 12',
		'inter(fav 4, fav 5)' => '3, 4, 7, 8, 12',
		'inter(fav 4, fav 6)' => '4, 6, 8, 9, 12',
		'inter(fav 4, fav 7)' => '1, 2, 3, 4, 12',
		'inter(fav 4, fav 8)' => '1, 2, 3, 6, 8, 12',
		'inter(fav 4, fav 13)' => '3',
		'inter(fav 5, fav 6)' => '4, 8, 11, 12',
		'inter(fav 5, fav 7)' => '3, 4, 5, 12',
		'inter(fav 5, fav 8)' => '3, 8, 12',
		'inter(fav 5, fav 13)' => '3',
		'inter(fav 6, fav 7)' => '4, 12',
		'inter(fav 6, fav 8)' => '6, 8, 12',
		'inter(fav 7, fav 8)' => '1, 2, 3, 12',
		'inter(fav 7, fav 13)' => '3',
		'inter(fav 8, fav 13)' => '3',
		'union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12',
		'win' => '3, 4, 5, 6, 7, 8, 13',
	],
];
