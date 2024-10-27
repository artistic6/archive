<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 3, 4, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 7, 8, 9, 10',
			'qin' => '1, 2, 3, 4, 6, 7, 8, 9, 10',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 3, 4, 7',
		],
		'win inter' => '3, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3, 4, 7',//count wp: 4
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 7, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'suggestions' => [
			'win' => '2, 6, 8, 9',
			'qin' => '2, 5, 6, 7, 8, 9',
			'trio' => '1, 2, 4, 5, 6, 7, 8, 9',//count trio: 8
			'inter' => '9',
		],
		'win inter' => '2, 4, 6, 8, 9',
		'win inter 2' => '8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
			'place(end-favorites 182)' => '9',
			'place(end-wp 182)' => '9',
		],
		'total bets' => 200,
		'wp' => '1, 7, 9',//count wp: 3
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '7, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '11',
			'qin' => '3, 11',
			'trio' => '3, 10, 11',//count trio: 3
			'inter' => '',
		],
		'win inter' => '4, 5, 11',
		'win inter 2' => '11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
			'place(wp 182)' => '7',
		],
		'total bets' => 300,
		'wp' => '7',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '4, 6, 10, 11',
			'qin' => '1, 3, 4, 5, 6, 7, 10, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 10, 11',//count trio: 9
			'inter' => '6',
		],
		'win inter' => '3, 4, 5, 6, 10, 11',
		'win inter 2' => '4, 6, 10, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 6',//count wp: 2
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '8, 9, 10, 11',
		'runners' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '3, 4, 8, 10',
			'qin' => '3, 4, 7, 8, 9, 10, 11',
			'trio' => '3, 4, 7, 8, 9, 10, 11',//count trio: 7
			'inter' => '8, 10',
		],
		'win inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '8, 10, 11',//count wp: 3
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '7, 9, 10, 11',
		'runners' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 3, 7, 8, 11, 12',
			'qin' => '1, 3, 7, 8, 9, 11, 12',
			'trio' => '1, 3, 5, 6, 7, 8, 9, 11, 12',//count trio: 9
			'inter' => '7, 11',
		],
		'win inter' => '7',
		'allValues' => '1, 2, 3, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '7, 9, 10',//count wp: 3
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '2, 4, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '2, 4, 7, 10',
			'qin' => '1, 2, 4, 5, 7, 8, 10, 11',
			'trio' => '1, 2, 4, 5, 7, 8, 10, 11, 12',//count trio: 9
			'inter' => '2, 4',
		],
		'win inter' => '2, 7, 10',
		'win inter 2' => '2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
			'place(end-favorites 182)' => '5',
			'place(end-wp 182)' => '5',
		],
		'total bets' => 200,
		'wp' => '2, 4, 5',//count wp: 3
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 3, 8, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 8, 9, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '2, 3, 8',
		],
		'win inter' => '8',
		'win inter 2' => '8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 11, 12',
		'bets' => [
			'place(end-favorites 182)' => '10',
			'place(end-wp 182)' => '8',
		],
		'total bets' => 200,
		'wp' => '2, 3, 8',//count wp: 3
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 4, 9, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 9, 10, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '3, 4, 9, 10',
		],
		'win inter' => '2, 4, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 4, 9, 10',//count wp: 4
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 3, 10',
			'qin' => '1, 2, 3, 10, 11',
			'trio' => '1, 2, 3, 8, 10, 11',//count trio: 6
			'inter' => '1',
		],
		'win inter' => '7, 10',
		'win inter 2' => '1, 3, 10',
		'allValues' => '',
		'bets' => [
			'win(union 182)' => '1, 6, 7, 10',
		],
		'total bets' => 400,
		'wp' => '',//count wp: 0
	],
];
//total place end favorites: -300
//total place end wp: -300
//total place wp: -300
//total sure place: 0
//total win: -400
//total: 0
