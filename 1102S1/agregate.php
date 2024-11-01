<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 2, 3, 5, 6',
		'unions($10)' => '1, 3, 4, 6',
		'union + favorites' => '1, 2, 3, 4, 5, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 2, 3, 5, 6, 7, 9, 10, 12, 13',
		'places($10)' => '9, 10, 13',
		'placesWP($30)' => '10, 2',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 4, 6, 10',
		'unions($10)' => '4, 5, 6, 8, 10',
		'union + favorites' => '4, 5, 6, 8, 10',
		'win(union 1)' => '4, 5, 6, 10',
		'win(union 2585)' => '4, 6, 8, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 2, 3, 4, 6',
		'place(end-favorites )' => '6',
		'super sure bet' => 'super sure place 6',
		'places($10)' => '4, 6',
		'sures($10)' => '6',
		'super sures($10)' => '6',
		'place(end-wp 1333)' => '4',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 2, 5, 8, 9',
		'places($10)' => '9',
		'sures($10)' => '9',
		'placesWP($30)' => '5',
		'unions($10)' => '5, 8, 9, 10',
		'union + favorites' => '2, 5, 8, 9, 10',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 3, 8',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 3, 4, 5, 8, 11, 12',
		'places($10)' => '12',
		'sures($10)' => '12',
		'super sures($10)' => '12',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 4, 5',
	],
];
