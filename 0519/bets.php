<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '9',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '10, 11',
		'union' => '5, 7',//count: 2
		'inter' => '',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '5, 6',
		'union' => '2, 3, 4, 5, 6',//count: 5
		'inter' => '5, 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2',
		'union' => '1, 2, 3, 4, 5, 10, 11, 12',//count: 8
		'inter' => '1, 2',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 6',
		'union' => '1, 2, 3, 4, 6, 7, 9, 10, 11',//count: 9
		'inter' => '4, 6',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 10',
		'union' => '1, 3, 5, 6, 7, 8, 10',//count: 7
		'inter' => '3, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 5, 8, 10',
		'possible win' => '3, 5, 10',
		'possible win' => '5, 8, 10',
		'union' => '1, 2, 3, 5, 7, 8, 9, 10, 12',//count: 9
		'inter' => '3, 5, 8, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 6',
		'union' => '2, 3, 4, 5, 8, 12',//count: 6
		'inter' => '3',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '8, 10',
		'union' => '7, 8, 12',//count: 3
		'inter' => '8',
	],
];
