<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 3, 7',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 1, 9',
		'unions($10)' => '1, 2, 8, 9',
		'experimental($10)' => '1, 2, 8, 9',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 7, 10',
		'placesWP($30)' => '7',
		'unions($10)' => '4, 5, 7, 10, 11',
		'experimental($10)' => '4, 5, 7, 10, 11',
		'win(union 1012)' => '4, 7, 10, 11',
		'win(union 1027)' => '4, 5, 7, 10',
		'win(union 1035)' => '5, 7, 10, 11',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 1',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 10, 11',
		'unions($10)' => '1, 3, 10, 11',
		'experimental($10)' => '1, 3, 10, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 7, 9, 10, 11',
		'unions($10)' => '7, 10, 11, 12',
		'experimental($10)' => '7, 10, 11, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 2, 4, 5',
		'place(end-favorites )' => '5',
		'super sure bet' => 'super sure place 5',
		'places($10)' => '5',
		'sures($10)' => '5',
		'super sures($10)' => '5',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 2, 3, 10',
		'place(end-favorites )' => '10',
		'places($10)' => '10',
		'sures($10)' => '10',
		'placesWP($30)' => '3',
		'unions($10)' => '2, 3, 8, 10',
		'experimental($10)' => '2, 3, 8, 10',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 4, 9, 10',
		'unions($10)' => '2, 4, 9, 10, 12',
		'experimental($10)' => '2, 4, 9, 10, 12',
		'win(union 1227)' => '2, 4, 9, 10',
		'win(union 1376)' => '4, 9, 10, 12',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '(F) 1, 6',
		'unions($10)' => '1, 3, 6, 7, 10',
		'experimental($10)' => '1, 3, 6, 7, 10',
		'win(union 1)' => '1, 6, 7, 10',
		'win(union 2594)' => '1, 3, 6, 7',
		'win(union 2624)' => '1, 3, 6, 10',
	],
];