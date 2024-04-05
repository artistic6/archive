<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '12, 4',
		'win hist(fav 12)' => '10, 12',//count: 2
		'all' => '4, 10, 12',//count: 3
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '12, 13, 2, 3',
		'win hist(fav 13)' => '13',//count: 1
		'qin/trio' => '2, 3, 12, 13',
		'all' => '2, 3, 12, 13',//count: 4
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 3',
		'win hist(fav 6)' => '1, 3, 4, 5, 6, 12',//count: 6
		'all' => '1, 3, 4, 5, 6, 12',//count: 6
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 10, 1',
		'win hist(fav 10)' => '1, 4, 10, 12',//count: 4
		'qin/trio' => '1, 2, 10',
		'all' => '1, 2, 4, 10, 12',//count: 5
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '12, 4, 10',
		'win hist(fav 12)' => '2, 5, 6, 12',//count: 4
		'qin/trio' => '4, 10, 12',
		'all' => '2, 4, 5, 6, 10, 12',//count: 6
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '7, 3',
		'win hist(fav 7)' => '1, 3, 5, 6, 7, 9, 11',//count: 7
		'all' => '1, 3, 5, 6, 7, 9, 11',//count: 7
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4',
		'win hist(fav 4)' => '1, 2, 3, 4, 5, 7, 8, 10, 11',//count: 9
		'all' => '1, 2, 3, 4, 5, 7, 8, 10, 11',//count: 9
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '6',
		'win hist(fav 6)' => '4, 6',//count: 2
		'all' => '4, 6',//count: 2
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '8, 12, 1',
		'win hist(fav 12)' => '5, 12',//count: 2
		'qin/trio' => '1, 8, 12',
		'all' => '1, 5, 8, 12',//count: 4
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '13, 5',
		'win hist(fav 13)' => '3',//count: 1
		'all' => '3, 5, 13',//count: 3
	],
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '4, 5, 6, 13',
		'win hist(fav 13)' => '12',//count: 1
		'qin/trio' => '4, 5, 6, 13',
		'all' => '4, 5, 6, 12, 13',//count: 5
	],
];
