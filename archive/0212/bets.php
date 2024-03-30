<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '12, 4',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '12, 13, 2, 3',
		'win hist(fav 2)' => '2, 4, 5, 6, 7, 8, 9, 12, 13',
		'inter(fav 2, fav 3)' => '2, 4, 5, 6, 7, 8, 12, 13',
		'win hist(fav 3)' => '2, 4, 5, 6, 7, 8, 10, 11, 12, 13',
		'union' => '2, 4, 5, 6, 7, 8, 12, 13',
		'win' => '2, 3, 12, 13',
		'place' => '2, 3',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 3',
		'win hist(fav 3)' => '1, 3, 4, 7, 8, 9, 10, 12',
		'inter(fav 3, fav 6)' => '1, 3, 4, 12',
		'win hist(fav 6)' => '1, 3, 4, 5, 6, 12',
		'union' => '1, 3, 4, 12',
		'win' => '3, 6',
		'place' => '3, 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 10, 1',
		'win hist(fav 1)' => '1, 2, 3, 5, 6, 10, 11',
		'inter(fav 1, fav 2)' => '2, 3, 5, 10, 11',
		'win hist(fav 2)' => '2, 3, 5, 7, 9, 10, 11, 12, 13',
		'union' => '2, 3, 5, 10, 11',
		'win' => '1, 2, 10',
		'place' => '1, 2',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '12, 4, 10',
		'win hist(fav 4)' => '1, 2, 3, 4, 5, 6, 7',
		'place' => '4',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '7, 3',
		'win hist(fav 3)' => '1, 2, 3, 5, 7, 9, 11',
		'inter(fav 3, fav 7)' => '1, 3, 5, 7, 9, 11',
		'win hist(fav 7)' => '1, 3, 5, 6, 7, 9, 11',
		'union' => '1, 3, 5, 7, 9, 11',
		'win' => '3, 7',
		'place' => '3, 7',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4',
		'win hist(fav 4)' => '1, 2, 3, 4, 5, 7, 8, 10, 11',
		'place' => '4',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '6',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '8, 12, 1',
		'win hist(fav 1)' => '1, 5, 6, 7, 8, 10, 12',
		'place' => '1',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '13, 5',
	],
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '4, 5, 6, 13',
	],
];
