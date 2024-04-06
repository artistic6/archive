<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 7, 12',
		'inter(fav 3, fav 7)' => '3, 5, 7',
		'inter(fav 3, fav 12)' => '10, 12',
		'union' => '3, 5, 7, 10, 12',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4, 5, 10, 11',
		'inter(fav 3, fav 4)' => '4, 5, 7, 12',
		'inter(fav 3, fav 5)' => '4, 5, 10',
		'inter(fav 3, fav 10)' => '10',
		'inter(fav 3, fav 11)' => '11',
		'inter(fav 4, fav 5)' => '4, 5',
		'inter(fav 5, fav 10)' => '10',
		'union' => '4, 5, 7, 10, 11, 12',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 4, 9',
		'inter(fav 2, fav 4)' => '2, 5, 8',
		'inter(fav 4, fav 9)' => '3',
		'union' => '2, 3, 5, 8',
		'win' => '2, 4, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 3, 7, 8',
		'inter(fav 2, fav 3)' => '3, 5, 11',
		'inter(fav 2, fav 7)' => '7, 10',
		'inter(fav 2, fav 8)' => '1, 3, 11',
		'inter(fav 3, fav 8)' => '3, 8, 11',
		'union' => '1, 3, 5, 7, 8, 10, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 3, 6, 8',
		'inter(fav 1, fav 3)' => '1, 3, 4, 5, 7',
		'inter(fav 1, fav 6)' => '3, 4, 7',
		'inter(fav 1, fav 8)' => '1, 2, 4, 5, 7',
		'inter(fav 3, fav 6)' => '3, 4, 7',
		'inter(fav 3, fav 8)' => '1, 4, 5, 7',
		'inter(fav 6, fav 8)' => '4, 7, 9',
		'union' => '1, 2, 3, 4, 5, 7, 9',
		'win' => '1, 3, 6, 8',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 2, 4',
		'inter(fav 1, fav 2)' => '3',
		'inter(fav 1, fav 4)' => '3, 7, 12, 13',
		'inter(fav 2, fav 4)' => '3, 8',
		'union' => '3, 7, 8, 12, 13',
		'win' => '1, 2, 4',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 2, 3',
		'inter(fav 1, fav 2)' => '1, 2, 4, 5, 7, 9',
		'inter(fav 1, fav 3)' => '1, 2, 9',
		'inter(fav 2, fav 3)' => '1, 2, 3, 9',
		'union' => '1, 2, 3, 4, 5, 7, 9',
		'win' => '1, 2, 3',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 3, 7',
		'inter(fav 2, fav 3)' => '5, 6',
		'inter(fav 2, fav 7)' => '2, 4, 5',
		'inter(fav 3, fav 7)' => '1, 5, 12',
		'union' => '1, 2, 4, 5, 6, 12',
		'win' => '2, 3, 7',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 4, 7, 11',
		'inter(fav 2, fav 4)' => '4, 5, 6',
		'inter(fav 2, fav 7)' => '5, 6',
		'inter(fav 2, fav 11)' => '1, 3, 5',
		'inter(fav 4, fav 7)' => '5, 6, 9',
		'inter(fav 4, fav 11)' => '5, 9',
		'inter(fav 7, fav 11)' => '5, 9, 12',
		'union' => '1, 3, 4, 5, 6, 9, 12',
		'win' => '2, 4, 7, 11',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 3, 9',
		'inter(fav 1, fav 3)' => '4',
		'inter(fav 3, fav 9)' => '11',
	],
];
