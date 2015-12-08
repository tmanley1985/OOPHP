<?php

$array = [
	'name' => [
		'Your name is required',
		'Your name cannot contain numbers',
		'aka' => [
			'Thomas',
			'Albert'
		]
	],

	'password' => [
		'Your password must be at least 8 characters',
		'Your password must contain at least one number and one special character'
	]
];

/**
 * [ Takes a multidimensional array and flattens it ]
 * @param  array  $items     [Array]
 * @param  array  $flattened [Array]
 * @return [Array]            [A flattened version of the array passed in]
 */
function flatten_array ( array $items, array $flattened = [] )
{

	foreach ( $items as $item ) {
		/**
		 *  If item within array is an array, we call flatten_array recursively
		 *  and pass in the item and the flattened array.  
		 */
		if ( is_array( $item ) ) {

			/**
			 *  Think of this as what it is, it's using the exact same foreach loop
			 *  to go through the array and append non array items to the flattened array
			 */
			$flattened = flatten_array( $item, $flattened );
			// Continue will skip the current iteration and go back to the foreach loop
			continue;
		}
		// If the item inside the array is not an array, it is appended onto the flattened array
		$flattened[] = $item;

	}

	return $flattened;
};
echo "<pre>";
var_dump(flatten_array( $array )) ;
echo "</pre>";