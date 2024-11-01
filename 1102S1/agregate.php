<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 3',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 2, 10, 13',
		'place(end-favorites )' => '13',
		'places($10)' => '13',
		'placesWP($30)' => '10, 2',
		'place(wp 41)' => '2',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 4, 6, 10',
		'win(union 1)' => '4, 5, 6, 10',
		'unions($10)' => '4, 5, 6, 8, 10',
		'union + favorites' => '4, 5, 6, 8, 10',
		'win(union 2585)' => '4, 6, 8, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 2, 4, 6',
		'place(end-favorites )' => '6',
		'places($10)' => '6',
		'sures($10)' => '6',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 5, 8, 9',
		'place(end-favorites )' => '9',
		'places($10)' => '9',
		'sures($10)' => '9',
		'place(wp 22)' => '5',
		'placesWP($30)' => '5',
		'win(union 2574)' => '5, 8, 9, 10',
		'unions($10)' => '5, 8, 9, 10',
		'union + favorites' => '5, 8, 9, 10',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 8',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 4, 5',
	],
];
