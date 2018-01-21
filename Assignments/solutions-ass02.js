/* 
01 - Write a javascript function named reverse which takes a string argument and returns the reversed string.
*/

function reverseString(argument){
	
	var reversedString = argument.split('').reverse().join('');

	return reversedString;
}

/*
02 - Given a javascript array of objects having a radius property as shown [{radius: 5}, {radius: 9}, {radius: 2}], write a comparator function to sort it.
*/

function comparator(a, b){

	return (a.radius - b.radius);
}

/*
03 - Write a javascript function named length_of_array, which takes an array as argument and returns the number of elements in that array 
(as opposed to what is given by the length property of the array). Remember undefined can also be an element if it is explicitly set at some index, 
e.g. x[5] = undefined;. This undefined should be counted, but elements which are not present in the array (as arrays can be sparse), should not be counted.
*/

function length_of_array(a){

	var number_of_elements = 0;

	for(var i in a){
		number_of_elements++;
	}

	return number_of_elements;
}