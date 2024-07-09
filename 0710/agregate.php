<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'win(allValues, $30)' => '1, 4, 5, 6, 7, 8',
	],
	'2' => [
		/**
		Race 2
		*/
		'win(allValues, $30)' => '1, 2, 3, 4, 5, 6',
	],
	'7' => [
		/**
		Race 7
		*/
		'place(end-favorites, $60)' => '10',
		'win(allValues, $30)' => '1, 2, 3, 4, 5, 6',
		'win(wp, 30)' => '1, 2, 3, 4',
	],
	'9' => [
		/**
		Race 9
		*/
		'win(wp, 30)' => '1, 2, 3, 4, 5, 6, 7, 8',
		'win(allValues, $30)' => '2, 3, 4, 8, 9, 10',
	],
];
