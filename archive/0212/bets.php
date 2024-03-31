<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '12, 4',
		'inter(fav 4, fav 12)' => '10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '12, 13, 2, 3',
		'inter(fav 2, fav 3)' => '2, 4, 5, 6, 7, 8, 12, 13',
		'inter(fav 2, fav 12)' => '6, 13',
		'inter(fav 2, fav 13)' => '13',
		'inter(fav 3, fav 12)' => '6, 10, 13',
		'inter(fav 3, fav 13)' => '13',
		'inter(fav 12, fav 13)' => '13',
		'union' => '2, 4, 5, 6, 7, 8, 10, 12, 13',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 3',
		'inter(fav 3, fav 6)' => '1, 3, 4, 12',
		'union' => '1, 3, 4, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 10, 1',
		'inter(fav 1, fav 2)' => '2, 3, 5, 10, 11',
		'inter(fav 1, fav 10)' => '10',
		'inter(fav 2, fav 10)' => '10, 12',
		'union' => '2, 3, 5, 10, 11, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '12, 4, 10',
		'inter(fav 4, fav 10)' => '1, 2, 3, 4',
		'inter(fav 4, fav 12)' => '2, 5, 6',
		'inter(fav 10, fav 12)' => '2',
		'union' => '1, 2, 3, 4, 5, 6',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '7, 3',
		'inter(fav 3, fav 7)' => '1, 3, 5, 7, 9, 11',
		'union' => '1, 3, 5, 7, 9, 11',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4',
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
		'inter(fav 1, fav 8)' => '1, 5, 8',
		'inter(fav 1, fav 12)' => '5, 12',
		'inter(fav 8, fav 12)' => '5',
		'union' => '1, 5, 8, 12',
		'win' => '1, 8, 12',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '13, 5',
		'inter(fav 5, fav 13)' => '3',
	],
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '4, 5, 6, 13',
		'inter(fav 4, fav 5)' => '12',
		'inter(fav 4, fav 6)' => '12',
		'inter(fav 4, fav 13)' => '12',
		'inter(fav 5, fav 6)' => '12',
		'inter(fav 5, fav 13)' => '12',
		'inter(fav 6, fav 13)' => '12',
	],
];
