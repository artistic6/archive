<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8',
		'suggestions' => [
			'win' => '1, 4, 5',
			'qin' => '1, 3, 4, 5',
			'trio' => '1, 2, 3, 4, 5',//count trio: 5
			'inter' => '1',
		],
		'win inter' => '1, 3, 4, 8',
		'win inter 2' => '1, 4, 5',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3',//count wp: 2
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 10, 13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 16, 17',
		'suggestions' => [
			'win' => '7, 10, 12, 13, 14',
			'qin' => '1, 2, 7, 9, 10, 12, 13, 14',
			'trio' => '1, 2, 5, 7, 8, 9, 10, 12, 13, 14',//count trio: 10
			'inter' => '10, 13',
		],
		'win inter' => '10',
		'win inter 2' => '10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'place(end-favorites 1430)' => '13',
		],
		'total bets' => 100,
		'wp' => '2, 10',//count wp: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '4, 6, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '2, 4, 5, 12',
			'qin' => '1, 2, 3, 4, 5, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 10, 12',//count trio: 8
			'inter' => '4',
		],
		'win inter' => '5',
		'allValues' => '1, 2, 3, 4, 5, 6, 8',
		'bets' => [
			'win(union 1430)' => '4, 5, 6, 10',
		],
		'total bets' => 400,
		'wp' => '4, 6',//count wp: 2
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 4, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'suggestions' => [
			'win' => '2, 4, 5, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 9, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11',//count trio: 10
			'inter' => '2, 4',
		],
		'win inter' => '3, 4, 5, 11',
		'win inter 2' => '4, 5',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'place(end-favorites 1430)' => '6',
			'place(end-wp 1430)' => '6',
		],
		'total bets' => 200,
		'wp' => '2, 4, 6',//count wp: 3
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 8, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15',
		'suggestions' => [
			'win' => '2, 3, 4, 5, 8, 9, 10',
			'qin' => '2, 3, 4, 5, 7, 8, 9, 10, 11, 12',
			'trio' => '2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 11
			'inter' => '5, 8, 9',
		],
		'win inter' => '',
		'win inter 2' => '10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5, 8',//count wp: 2
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 3, 5, 6, 8, 11, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '8',//count wp: 1
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 8, 9, 11, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '8',//count wp: 1
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '4, 5',
		'runners' => '1, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19',
		'suggestions' => [
			'win' => '1, 5, 7, 8',
			'qin' => '1, 4, 5, 6, 7, 8, 10',
			'trio' => '1, 4, 5, 6, 7, 8, 9, 10',//count trio: 8
			'inter' => '5',
		],
		'win inter' => '1, 5, 8, 9, 12',
		'win inter 2' => '1, 5, 7, 8',
		'allValues' => '1, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'all fav history' => [[5, 10, 4]],
		'all fav history values' => '4, 5, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 5',//count wp: 2
	],
];
//total place end favorites: -200
//total place end wp: -100
//total place wp: 0
//total sure place: 0
//total win: -400
//total: 0
