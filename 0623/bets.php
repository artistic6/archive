<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 11, 14',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13',//count: 11 
		'win inter' => '',
		'count sets' => 21,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 3, 4',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '1',//count: 1 
		'win inter' => '2',
		'count sets' => 10,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 7, 11, 14',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '1, 2, 4, 5, 6, 8, 9, 10, 12, 13',//count: 10 
		'win inter' => '',
		'count sets' => 4,
		'allValues' => '1, 2, 3, 5, 6, 7',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '1, 2, 3, 4, 5',//count: 5 
		'win inter' => '',
		'count sets' => 11,
		'allValues' => '1, 2, 3, 4, 5, 6, 8, 10, 11, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 14',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13',//count: 12 
		'win inter' => '',
		'count sets' => 2,
		'allValues' => '1, 3, 4, 5, 10, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 2, 3, 5, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '4, 7',//count: 2 
		'win inter' => '1',
		'count sets' => 7,
		'allValues' => '1, 2, 3, 5, 6, 7, 8, 9, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 5, 7, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '1, 2, 4, 6',//count: 4 
		'win inter' => '3, 8',
		'count sets' => 16,
		'allValues' => '1, 2, 3, 4, 5, 6, 7',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 3, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '2, 4',//count: 2 
		'win inter' => '3',
		'count sets' => 7,
		'allValues' => '1, 2, 3, 4, 5, 6, 7',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 8, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '1, 3, 4, 5, 6, 7, 9, 10',//count: 8 
		'win inter' => '',
		'count sets' => 15,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '2, 3, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '1, 4',//count: 2 
		'win inter' => '',
		'count sets' => 0,
		'allValues' => '',
	],
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '2, 9, 10, 12, 14',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '1, 3, 4, 5, 6, 7, 8, 11, 13',//count: 9 
		'win inter' => '',
		'count sets' => 0,
		'allValues' => '',
	],
];
//total win: 0
//total place: 0
//total qin: 0
//total trio: 0
//total: 0
