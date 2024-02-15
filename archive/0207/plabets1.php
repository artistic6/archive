<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Favorite'  =>  '6',
		'favorites' => '6, 1, 7',
		'Trio values(Fav: 6)' =>  '6, 7, 4, 9, 2, 3',
		'Trio values(Fav: 1)' =>  '6, 7, 1, 4, 9, 2',
		'Trio values(Fav: 7)' =>  '7, 1, 4, 9, 2, 8',
		'unionF(count: 9)' =>  '6, 7, 1, 4, 9, 2, 8, 3, 10',
		'Place' =>  '4, 9',
		'places' => '7, 4, 9',
	],
	'2' => [
		/**
		Race 2
		*/
		'Favorite'  =>  '8',
		'favorites' => '4, 8',
		'Trio values(Fav: 4)' =>  '8, 4, 2, 7, 6, 3',
		'Trio values(Fav: 8)' =>  '8, 4, 10, 3, 1',
		'unionF(count: 8)' =>  '8, 4, 2, 10, 7, 6, 3, 1',
		'Place' =>  '10, 7',
		'places' => '8, 10, 7',
	],
	'3' => [
		/**
		Race 3
		*/
		'Favorite'  =>  '7',
		'favorites' => '7',
		'Trio values(Fav: 7)' =>  '7, 2, 3, 6, 9, 11',
		'unionF(count: 11)' =>  '7, 2, 3, 6, 9, 11, 8, 4, 12, 1, 5',
		'Place' =>  '6, 9',
		'places' => '11, 6, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'Favorite'  =>  '1',
		'favorites' => '3, 1, 11',
		'Trio values(Fav: 3)' =>  '1, 9, 3, 11, 12, 6',
		'Trio values(Fav: 1)' =>  '1, 9, 3, 12, 6, 2',
		'Trio values(Fav: 11)' =>  '1, 12, 6',
		'unionF(count: 12)' =>  '1, 9, 3, 11, 12, 6, 2, 10, 8, 5, 7, 4',
		'Place' =>  '11, 12',
		'places' => '1, 11, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'Favorite'  =>  '2',
		'favorites' => '7, 1, 2',
		'Trio values(Fav: 7)' =>  '7, 2, 4, 10, 1, 6',
		'Trio values(Fav: 1)' =>  '2, 7, 4, 10, 1, 12',
		'Trio values(Fav: 2)' =>  '2, 7, 4, 10, 1, 12',
		'unionF(count: 10)' =>  '2, 7, 4, 10, 1, 12, 6, 8, 5, 9',
		'Place' =>  '10, 1',
		'places' => '2, 10, 1',
	],
	'6' => [
		/**
		Race 6
		*/
		'Favorite'  =>  '8',
		'favorites' => '11, 8',
		'Trio values(Fav: 11)' =>  '11, 12, 1, 4, 2, 7',
		'Trio values(Fav: 8)' =>  '8, 11, 12, 2',
		'unionF(count: 7)' =>  '8, 11, 12, 1, 4, 2, 7',
		'Place' =>  '1, 4',
		'places' => '11, 1, 4',
	],
	'7' => [
		/**
		Race 7
		*/
		'Favorite'  =>  '3',
		'favorites' => '2, 3',
		'Trio values(Fav: 2)' =>  '3, 2, 9, 5, 7, 8',
		'Trio values(Fav: 3)' =>  '3, 9, 2, 5, 11, 10',
		'unionF(count: 10)' =>  '3, 9, 2, 5, 7, 8, 11, 10, 1, 4',
		'Place' =>  '5, 7',
		'places' => '9, 5, 7',
	],
	'8' => [
		/**
		Race 8
		*/
		'Favorite'  =>  '4',
		'favorites' => '11, 4',
		'Trio values(Fav: 11)' =>  '4, 5, 2, 9',
		'Trio values(Fav: 4)' =>  '4, 11, 8, 1, 5, 6',
		'unionF(count: 12)' =>  '4, 11, 8, 1, 5, 6, 2, 7, 9, 3, 12, 10',
		'Place' =>  '1, 5',
		'places' => '4, 1, 5',
	],
	'9' => [
		/**
		Race 9
		*/
		'Favorite'  =>  '3',
		'favorites' => '5, 1, 3',
		'Trio values(Fav: 5)' =>  '3, 1, 8, 9, 5, 10',
		'Trio values(Fav: 1)' =>  '3, 1, 7, 8, 9, 5',
		'Trio values(Fav: 3)' =>  '3, 1, 7, 8, 9, 5',
		'unionF(count: 10)' =>  '3, 1, 7, 8, 9, 5, 2, 4, 10, 11',
		'Place' =>  '8, 9',
		'places' => '8, 9',
	],
];
