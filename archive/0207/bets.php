<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '6, 1, 7',
		'win hist(fav 1)' => '1, 4, 5, 7, 8, 10, 11',
		'inter(fav 1, fav 6)' => '1, 4, 7, 11',
		'win hist(fav 6)' => '1, 2, 4, 6, 7, 9, 11, 12',
		'union' => '1, 4, 7, 11',
		'win' => '1, 6, 7',
		'place' => '1, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '4, 8',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '7',
		'win hist(fav 7)' => '1, 3, 5, 6, 7, 11, 12',
		'place' => '7',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '3, 1, 11',
		'win hist(fav 1)' => '1, 2, 3, 5, 6, 10, 11',
		'inter(fav 1, fav 3)' => '3, 5, 6, 11',
		'win hist(fav 3)' => '3, 4, 5, 6, 8, 11',
		'union' => '3, 5, 6, 11',
		'win' => '1, 3, 11',
		'place' => '1, 3',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '7, 1, 2',
		'win hist(fav 1)' => '1, 2, 3, 4, 5, 7, 10, 12',
		'inter(fav 1, fav 7)' => '1, 4, 5, 7, 12',
		'win hist(fav 7)' => '1, 4, 5, 7, 8, 12',
		'union' => '1, 4, 5, 7, 12',
		'win' => '1, 2, 7',
		'place' => '1, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '11, 8',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '2, 3',
		'win hist(fav 2)' => '1, 2, 3, 4, 5, 6, 7, 9',
		'place' => '2',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '11, 4',
		'win hist(fav 4)' => '1, 2, 4, 6, 7, 8, 9, 12',
		'place' => '4',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '5, 1, 3',
		'win hist(fav 1)' => '1, 5, 6, 7, 8, 10, 12',
		'inter(fav 1, fav 3)' => '5, 8, 10',
		'inter(fav 1, fav 5)' => '5, 8, 10, 12',
		'win hist(fav 3)' => '2, 3, 5, 8, 9, 10, 11',
		'inter(fav 3, fav 5)' => '3, 5, 8, 10, 11',
		'win hist(fav 5)' => '3, 4, 5, 8, 10, 11, 12',
		'union' => '5, 8, 10, 12, 3, 11',
		'win' => '1, 3, 5',
		'place' => '1, 3, 5',
	],
];
