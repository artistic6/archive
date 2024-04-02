<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 12',
		'inter(fav 3, fav 12)' => '10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '10',
		'win hist(fav 10)' => '10',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '10',
		'win hist(fav 10)' => '4, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 10, 1',
		'additional favorites' => '12',
		'inter(fav 1, fav 2)' => '2, 3, 5, 10, 11',
		'inter(fav 1, fav 10)' => '10',
		'inter(fav 1, fav 12)' => '3',
		'inter(fav 2, fav 10)' => '10, 12',
		'inter(fav 2, fav 12)' => '3, 12',
		'inter(fav 10, fav 12)' => '12',
		'union' => '2, 3, 5, 10, 11, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 4',
		'inter(fav 4, fav 5)' => '1, 3, 4, 5',
		'union' => '1, 3, 4, 5',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 2',
		'inter(fav 2, fav 3)' => '2, 3, 5',
		'union' => '2, 3, 5',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '13, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '5, 6, 7',
		'inter(fav 5, fav 6)' => '4, 8, 11',
		'inter(fav 5, fav 7)' => '3, 4, 5',
		'inter(fav 6, fav 7)' => '4',
		'union' => '3, 4, 5, 8, 11',
		'win' => '5, 6, 7',
	],
];
