<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '8, 14',
		'win hist(fav 8)' => '1, 2, 3, 5, 10, 12',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 6',
		'win hist(fav 2)' => '2, 4, 5, 6, 7, 8, 9, 12, 13',
		'inter(fav 2, fav 6)' => '2, 4, 5, 6, 8',
		'win hist(fav 6)' => '1, 2, 4, 5, 6, 8, 14',
		'union' => '2, 4, 5, 6, 8',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '4',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '14',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 2',
		'win hist(fav 3)' => '1, 3, 4, 5, 7, 10, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3',
		'win hist(fav 3)' => '1, 2, 3, 5, 7, 9, 11',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4',
		'win hist(fav 4)' => '1, 2, 3, 4, 5, 7, 8, 10, 11',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 14, 4',
		'additional favorites' => '10, 13',
		'win hist(fav 4)' => '1, 2, 4, 6, 7, 8, 9, 12',
		'inter(fav 4, fav 10)' => '2, 4, 7, 9',
		'win hist(fav 10)' => '2, 3, 4, 7, 9, 10',
		'union' => '2, 4, 7, 9',
		'win' => '1, 4, 10, 13, 14',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '13, 8, 10',
		'win hist(fav 10)' => '1, 3, 5, 6, 10, 11',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '8, 7, 1',
	],
];
