<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 3, 11, 12',
		'inter(fav 1, fav 3)' => '1, 4, 5, 7, 10',
		'inter(fav 1, fav 11)' => '4, 7, 8, 11',
		'inter(fav 1, fav 12)' => '10',
		'inter(fav 3, fav 11)' => '4, 7',
		'inter(fav 3, fav 12)' => '10',
		'union' => '1, 4, 5, 7, 8, 10, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '6, 7, 10',
		'inter(fav 6, fav 7)' => '2, 4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 7, 10',
		'inter(fav 2, fav 7)' => '1, 5, 12',
		'union' => '1, 5, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 4, 10, 12',
		'inter(fav 2, fav 4)' => '3, 9, 11, 12',
		'inter(fav 2, fav 10)' => '10, 12',
		'inter(fav 2, fav 12)' => '3, 12',
		'inter(fav 4, fav 10)' => '4, 12',
		'inter(fav 4, fav 12)' => '3, 12',
		'inter(fav 10, fav 12)' => '12',
		'union' => '3, 4, 9, 10, 11, 12',
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
		'favorites' => '2, 3, 5',
		'inter(fav 2, fav 3)' => '2, 3, 5',
		'inter(fav 3, fav 5)' => '1',
		'union' => '1, 2, 3, 5',
		'win' => '2, 3, 5',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '5, 8, 13',
		'inter(fav 5, fav 8)' => '2',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '5, 6, 7, 8',
		'inter(fav 5, fav 6)' => '4, 8, 11',
		'inter(fav 5, fav 7)' => '3, 4, 5',
		'inter(fav 5, fav 8)' => '3, 8',
		'inter(fav 6, fav 7)' => '4',
		'inter(fav 6, fav 8)' => '6, 8, 12',
		'inter(fav 7, fav 8)' => '1, 2, 3',
		'union' => '1, 2, 3, 4, 5, 6, 8, 11, 12',
		'win' => '5, 6, 7, 8',
	],
];
