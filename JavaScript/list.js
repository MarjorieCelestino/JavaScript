
//filter - filters the elements of an array based on the callback function (elem, index, array) -  (must return a boolena value).

function isEven(number){
	return number % 2 === 0;
}

[1, 2, 3, 4, 5, 6, 7].filter(isEven);
->[2, 4, 6]

//map - takes each element and maps it to a new element as an output value and returns the new array.
// the callback function must return the tranformed value of the input element.

[3, 4, 6, 7].map(function(element){
	return element*element;
});
->[9, 16, 36, 49]

/*reduce - works on each element of an array and returns a single value of computation.
calback function (prev, curr, index, array) + inictial value (opitinal - initializes prev on the first time the function is called)
prev: last invocation of the callback function (returned value)
curr: curretn element being processed
*/

[1, 2, 4, 6, 7].reduce(function(prev, curr, index, array){
	return prev + curr;
}, 0);
->  20 //sum of the array's values

//argument - obeject accessible to all functions, holds all the arguments that are passed to a function and makes them accessible in an array like view

function sum(){

	var args = Array.prototype.slice.call(arguments); //transforms arguments to an array called args
	return args.reduce(function(prev, curr){
		return prev + curr;
	}, 0);
}

sum(3, 5, 6);
-> 14