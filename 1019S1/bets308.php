<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 5, 7, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 7, 8, 11, 14',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 14',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 14',//count trio: 12
			'inter' => '3, 5, 7',
		],
		'win inter' => '8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 5, 7, 9',//count wp: 4
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 8, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '4, 5, 6, 8, 9, 10',
			'qin' => '1, 2, 4, 5, 6, 8, 9, 10',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',//count trio: 10
			'inter' => '8, 9',
		],
		'win inter' => '4, 9',
		'win inter 2' => '9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
			'place(end-favorites 308)' => '9',
		],
		'total bets' => 100,
		'wp' => '1, 8',//count wp: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14, 15',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 7, 9, 10, 11',
		'allValues' => '1, 2, 3, 4, 5',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '7, 9, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',
		'suggestions' => [
			'win' => '2, 5',
			'qin' => '2, 4, 5, 10',
			'trio' => '2, 3, 4, 5, 7, 10',//count trio: 6
			'inter' => '',
		],
		'win inter' => '2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
			'win(union 308)' => '2, 7, 9, 10',
			'win(experimental 308)' => '2, 7, 9, 10',
		],
		'total bets' => 400,
		'wp' => '7, 9',//count wp: 2
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 4, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13, 14, 17, 18, 19',
		'suggestions' => [
			'win' => '1, 4, 5, 8, 10, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 8, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12',//count trio: 11
			'inter' => '1, 4',
		],
		'win inter' => '1, 4',
		'win inter 2' => '1, 4',
		'allValues' => '1, 2, 3, 4, 5, 6, 8, 10, 11',
		'bets' => [
			'place(end-favorites 308)' => '6',
			'place(end-wp 308)' => '6',
			'super sure bet' => 'super sure place 6',
		],
		'total bets' => 300,
		'wp' => '1, 4, 6',//count wp: 3
	],
];
//total place end favorites: -200
//total place end wp: -100
//total place wp: 0
//total sure place: -100
//total win: -400
//total: 0
