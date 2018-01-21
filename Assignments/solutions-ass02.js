/* 
01 - Write a javascript function named reverse which takes a string argument and returns the reversed string.
*/
/*
split breaks the string in an array
reverse reverses the array's elements
join turns the array into a string
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

//for in verify the indices in which the element is set
	for(var i in a){ 
		number_of_elements++;
	}

	return number_of_elements;
}

/*
NOTES:

Methods in an array

concat: joinning two or more arrays in a single one (doesn't change the original arrays).
array01.concat(array2, ...);

join: turns the array into a string.
array01.concat(default comma or pass the separator)

push: adds a new element at the end of the array, returning it's new length.
array.push(7);

unshift: adds a new element at the beginning of the array, returning it's new length.
array.unshift(7);

pop: used to get the last item of an array, which is also removed from the array. Returns the removed item.
array.pop();

shift: used to get the first ite of an array, which is also removed from the array. Returns the removed item.
array.shift();

slice: returns the selected elements of an array as a new array object. Doesn'rt affect the original array.
array.slice(start_index, end_index); 
end_index is not included and is opitional, if not used the new array will contain all the elements from the start_index until the last array index.

ex.: array= [1, 2, 4, 7];
array.slice(1,3);
[2,4] 

splice: changes the original array, replacing or removing items. 

Returns the remove elements.
array.splice(start_array, how_many_elements);
how_many_elements is opitional and refers to the number of elements that should be removed after the star_index.

ex.: array= [1, 2, 4, 7];
array.slice(1); removes all the elements starting from the index.
[1] 

Returns the replaced elements.
array.splice(start_array, how_many_elements, replaciment_elements);
how_many_elements is opitional and refers to the number of elements that should be removed after the star_index.

ex.: array= [1, 2, 4, 7];
array.slice(1, 2, 10, 11); replaces the elements starting from the index.
[1, 10, 11, 7]