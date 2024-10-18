<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18',
		'suggestions' => [
			'win' => '1, 2, 5, 8, 11',
			'qin' => '1, 2, 4, 5, 8, 9, 11',
			'trio' => '1, 2, 3, 4, 5, 7, 8, 9, 11',//count trio: 9
			'inter' => '5',
		],
		'win inter' => '1, 2, 5, 6, 8',
		'win inter 2' => '1, 2, 5, 8, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5, 7',//count wp: 2
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
		'win inter' => '1, 2, 3, 4, 9, 10, 11',
		'allValues' => '1, 2, 3, 5, 6, 7',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '7, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '5',
			'qin' => '5, 11',
			'trio' => '5, 7, 11',//count trio: 3
			'inter' => '',
		],
		'win inter' => '5',
		'win inter 2' => '5',
		'allValues' => '1, 2, 4, 5, 6, 7, 11, 12',
		'bets' => [
			'win(union 2564)' => '5, 7, 10',
			'win(experimental 2564)' => '5, 7, 10',
			'place(wp 2564)' => '7',
		],
		'total bets' => 600,
		'wp' => '7',//count wp: 1
	],
];
//total place end favorites: 0
//total place end wp: 0
//total place wp: -300
//total sure place: 0
//total win: -300
//total: 0
