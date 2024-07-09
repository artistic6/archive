<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter' => '1, 3, 4, 6, 7, 8, 10',
		'count sets' => 4,
		'allValues' => '1, 2, 3, 5, 6, 7, 8, 9',
		'diff' => '2, 5, 9',
		'bets' => [
		],
		'total bets' => 0,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '7, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter' => '6, 7',
		'count sets' => 11,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'diff' => '1, 2, 3, 4, 5, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter' => '1, 3, 5',
		'count sets' => 4,
		'allValues' => '1, 2, 3, 5, 6, 7',
		'diff' => '2, 6, 7',
		'bets' => [
		],
		'total bets' => 0,
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter' => '1, 3, 6, 11, 12',
		'count sets' => 13,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 10, 11, 12',
		'diff' => '2, 4, 5, 7, 10',
		'bets' => [
		],
		'total bets' => 0,
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter' => '2, 5',
		'count sets' => 5,
		'allValues' => '1, 2, 3, 4, 5',
		'diff' => '1, 3, 4',
		'bets' => [
		],
		'total bets' => 0,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'win inter' => '1, 2, 4, 6, 7, 8, 9',
		'count sets' => 21,
		'allValues' => '1, 2, 3, 4, 6, 7, 8, 9, 10',
		'diff' => '3, 10',
		'bets' => [
		],
		'total bets' => 0,
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 4, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter' => '2, 3, 10',
		'count sets' => 10,
		'allValues' => '1, 2, 3, 4, 5, 6, 7',
		'diff' => '1, 4, 5, 6, 7',
		'bets' => [
			'win(allValues, $30)' => '1, 2, 3, 4, 5, 6',
			'place(end-favorites, $60)' => '10',
			'win(wp, 30)' => '1, 2, 3, 4',
		],
		'total bets' => 360,
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '7',
		'runners' => '1, 3, 4, 5, 7, 8, 9, 10, 11',
		'win inter' => '1, 3, 4, 5, 8, 11',
		'count sets' => 8,
		'allValues' => '1, 3, 4, 5, 7, 8',
		'diff' => '7',
		'bets' => [
		],
		'total bets' => 0,
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter' => '2, 3, 5, 8',
		'count sets' => 20,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'diff' => '1, 4, 6, 7, 9, 10, 11',
		'bets' => [
			'place(end-favorites, $60)' => '8',
			'win(wp, 30)' => '2, 3, 8',
			'place(end-wp, $60)' => '8',
		],
		'total bets' => 210,
	],
];
//total wp: 0
//total win: -390
//total place: -180
//total qin: 0
//total trio: 0
//total: 0
