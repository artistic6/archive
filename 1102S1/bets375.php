<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 2, 3, 5, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8',
		'suggestions' => [
			'win' => '1, 2, 4, 5, 6, 7, 8',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8',//count trio: 8
			'inter' => '1, 2, 5, 6',
		],
		'win inter' => '1',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 3, 5, 6',//count wp: 5
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 6, 9, 10, 13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 16, 17',
		'suggestions' => [
			'win' => '1, 2, 4, 5, 6, 7, 8, 10, 12, 13, 14',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',//count trio: 14
			'inter' => '2, 6, 10, 13',
		],
		'win inter' => '10',
		'win inter 2' => '10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'place(end-favorites 375)' => '13',
		],
		'total bets' => 100,
		'wp' => '2, 6, 9, 10',//count wp: 4
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
			'win(union 375)' => '4, 5, 6, 10',
		],
		'total bets' => 400,
		'wp' => '4, 6',//count wp: 2
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 3, 4, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',//count trio: 11
			'inter' => '2, 3, 4, 6',
		],
		'win inter' => '3, 4',
		'win inter 2' => '4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'place(end-favorites 375)' => '6',
			'super sure bet' => 'super sure place 6',
		],
		'total bets' => 200,
		'wp' => '2, 3, 4, 6',//count wp: 4
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
		'favorites' => '3, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 3, 6, 8, 9',
			'qin' => '1, 2, 3, 4, 6, 7, 8, 9, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',//count trio: 11
			'inter' => '3, 8',
		],
		'win inter' => '1, 3, 5, 6, 8, 11, 12',
		'win inter 2' => '1, 3, 6, 8, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 8',//count wp: 2
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 8, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'suggestions' => [
			'win' => '2, 4, 6, 8, 11, 12',
			'qin' => '2, 3, 4, 6, 8, 11, 12',
			'trio' => '1, 2, 3, 4, 6, 7, 8, 9, 10, 11, 12',//count trio: 11
			'inter' => '4, 8, 12',
		],
		'win inter' => '2, 4, 8, 12',
		'win inter 2' => '2',
		'allValues' => '1, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'bets' => [
			'place(end-favorites 375)' => '12',
			'place(end-wp 375)' => '12',
			'super sure bet' => 'super sure place 12',
		],
		'total bets' => 300,
		'wp' => '4, 8, 12',//count wp: 3
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
		'win inter' => '1, 4, 5, 8, 9, 12',
		'win inter 2' => '1, 5, 7, 8',
		'allValues' => '1, 3, 4, 5, 6, 8, 9, 10, 11',
		'all fav history' => [[5, 10, 4]],
		'all fav history values' => '4, 5, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 5',//count wp: 2
	],
];
//total place end favorites: -300
//total place end wp: -100
//total place wp: 0
//total sure place: -200
//total win: -400
//total: 0
