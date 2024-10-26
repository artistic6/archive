<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 3, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 3, 4, 7, 8',
			'qin' => '1, 2, 3, 4, 7, 8, 9, 10',
			'trio' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 12',//count trio: 10
			'inter' => '1, 3, 7',
		],
		'win inter' => '1, 3, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3, 7',//count wp: 3
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'suggestions' => [
			'win' => '6, 8, 9',
			'qin' => '2, 6, 8, 9',
			'trio' => '1, 2, 4, 6, 8, 9',//count trio: 6
			'inter' => '9',
		],
		'win inter' => '2, 4, 8, 9',
		'win inter 2' => '6, 8, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 9',//count wp: 2
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
		'allValues' => '1, 2, 3, 5, 6, 7, 8',
		'bets' => [
			'place(wp 2544)' => '7',
		],
		'total bets' => 300,
		'wp' => '7',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 8, 10, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1',//count wp: 1
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '9, 10, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '3, 10',
			'qin' => '3, 4, 7, 10',
			'trio' => '3, 4, 6, 7, 9, 10',//count trio: 6
			'inter' => '10',
		],
		'win inter' => '3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
			'win(union 2544)' => '3, 9, 10, 11',
			'win(experimental 2544)' => '3, 9, 10, 11',
		],
		'total bets' => 400,
		'wp' => '10, 11',//count wp: 2
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '7, 9, 10, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 3, 7, 8, 11, 12',
			'qin' => '1, 3, 7, 8, 9, 11, 12',
			'trio' => '1, 3, 4, 5, 6, 7, 8, 9, 11, 12',//count trio: 10
			'inter' => '7, 11',
		],
		'win inter' => '7',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
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
		'win inter' => '1, 2, 7, 10',
		'win inter 2' => '2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
			'place(end-favorites 2544)' => '5',
			'place(end-wp 2544)' => '5',
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
		'win inter' => '3, 8',
		'win inter 2' => '8',
		'allValues' => '1, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'bets' => [
			'place(end-favorites 2544)' => '10',
			'place(end-wp 2544)' => '10',
			'super sure bet' => 'super sure place 10',
		],
		'total bets' => 300,
		'wp' => '3, 8, 10',//count wp: 3
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '4, 9, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 4, 10, 12',
			'qin' => '1, 2, 4, 5, 7, 8, 9, 10, 12',
			'trio' => '1, 2, 4, 5, 7, 8, 9, 10, 11, 12',//count trio: 10
			'inter' => '4, 10',
		],
		'win inter' => '2, 4, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 9, 10',//count wp: 3
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
			'win(union 2544)' => '1, 6, 7, 10',
			'win(experimental 2544)' => '1, 6, 7, 10',
		],
		'total bets' => 400,
		'wp' => '',//count wp: 0
	],
];
//total place end favorites: -200
//total place end wp: -200
//total place wp: -300
//total sure place: -100
//total win: -800
//total: 0
