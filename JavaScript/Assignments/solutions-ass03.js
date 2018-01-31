/*
01 - Write a function to find the largest string in an array of strings making use of the reduce function. 
You can, of course, do it using a loop, but see how short your code can be if you make use of the filter function.
*/

function largestString(array){

	var largest = array.reduce(function(prev, curr){
		 if(curr.length > prev.length){
		 	return curr;
		 }else{
		 	return prev;
		 }
	}, "");

	return largest;
}

/*
02 - Write a function that takes an array of numbers and returns the sum of squares of those numbers. 
E.g. if the array passed is [1, 2, 3] then the function should return 14.
*/

function square(array){

	var squareElements = array.map(function(element){
		return element*element;
	});

	var sumSquareElements = squareElements.reduce(function(prev, curr){
		return prev+curr;
	}, 0);

	return sumSquareElements;
}

/*
03 - Write a function that takes an array of numbers as an argument and filters and returns the even numbers in them.
*/

function checkEvenNumbers(array){

	var evenNumbers = array.filter(function(number){
		return number % 2 === 0;
	})

	return evenNumbers;
}

/*
04 - Write a function that takes an array and a criteria function(for filtering) and returns the array of those elements which do not fulfill the criteria. 
The criteria function should take any element as argument and return a boolean value.

Used as criteria to test:
function isEven(number){
	return number % 2 === 0;
}
*/

function notInTheCriteria(array, criteria){

	var outOfCriteria = array.filter(function(element){
		return !criteria(element);
	});

	return outOfCriteria;

}