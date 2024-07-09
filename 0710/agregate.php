<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'win(allValues, $30)' => '1, 2, 3, 5, 7, 8',
	],
	'2' => [
		/**
		Race 2
		*/
		'win(allValues, $30)' => '2, 3, 4, 5, 6, 8',
	],
	'7' => [
		/**
		Race 7
		*/
		'place(end-favorites, $60)' => '10',
		'win(allValues, $30)' => '1, 2, 3, 4, 5, 6',
		'win(wp, 30)' => '1, 2, 3, 4',
	],
	'8' => [
		/**
		Race 8
		*/
		'win(wp, 30)' => '1, 2, 3, 4, 5, 6, 7, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'place(end-favorites, $60)' => '8',
		'win(allValues, $30)' => '2, 3, 4, 8, 9, 10',
		'win(wp, 30)' => '2, 3, 8',
		'place(end-wp, $60)' => '8',
	],
];
