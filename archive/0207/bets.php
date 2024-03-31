<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '6, 1, 7',
		'inter(fav 1, fav 6)' => '1, 4, 7, 11',
		'inter(fav 1, fav 7)' => '5, 7',
		'inter(fav 6, fav 7)' => '7',
		'union' => '1, 4, 5, 7, 11',
		'win' => '1, 6, 7',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '4, 8',
		'inter(fav 4, fav 8)' => '3',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '7',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '3, 1, 11',
		'inter(fav 1, fav 3)' => '3, 5, 6, 11',
		'inter(fav 1, fav 11)' => '6, 10, 11',
		'inter(fav 3, fav 11)' => '6, 11',
		'union' => '3, 5, 6, 10, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '7, 1, 2',
		'inter(fav 1, fav 2)' => '1, 2, 7',
		'inter(fav 1, fav 7)' => '1, 4, 5, 7, 12',
		'inter(fav 2, fav 7)' => '1, 7, 8',
		'union' => '1, 2, 4, 5, 7, 8, 12',
		'win' => '1, 2, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '11, 8',
		'inter(fav 8, fav 11)' => '12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '2, 3',
		'inter(fav 2, fav 3)' => '1, 2, 3, 9',
		'union' => '1, 2, 3, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '11, 4',
		'inter(fav 4, fav 11)' => '4, 9',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '5, 1, 3',
		'inter(fav 1, fav 3)' => '5, 8, 10',
		'inter(fav 1, fav 5)' => '5, 8, 10, 12',
		'inter(fav 3, fav 5)' => '3, 5, 8, 10, 11',
		'union' => '3, 5, 8, 10, 11, 12',
	],
];
