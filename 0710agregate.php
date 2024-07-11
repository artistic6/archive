<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 10',
		'win(wp 10, 30)' => '1, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 7, 12',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 6, 11',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 4, 8, 12',
		'place(end-favorites , $60)' => '12',
		'win(wp 100, 30)' => '4, 8, 12',
		'win(wp 1024, 30)' => '4, 8',
		'win(wp 1049, 30)' => '4, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 2, 5, 9',
		'win(wp 100, 30)' => '2, 5',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 2, 3, 5, 6',
		'win(count , $30)' => '1, 2, 3, 5, 6, 8, 9',
		'place(end-favorites , $60)' => '6',
		'win(wp 1003, 30)' => '3, 6',
		'win(wp 1253, 30)' => '2, 3, 6',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 3, 4, 10',
		'place(end-favorites , $60)' => '10',
		'win(wp 1008, 30)' => '3, 4',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 1, 3, 7, 8, 10',
		'win(count , $30)' => '1, 3, 4, 5, 7, 8, 10',
		'win(wp 1008, 30)' => '1, 3, 7',
		'place(end-wp 1008, $60)' => '7',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 1, 2, 3, 5, 8, 10',
	],
];
