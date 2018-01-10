/*
01 - Write a javascript function named is_integer which checks if the passed argument is an integer. 
You can use any mathematical operator or functions defined in the Math object.
*/
// Math.floor returns the bigest integer.
function is_integer(number){

	if(typeof(number) == "number"){

		if( Math.floor(number) == number){ 
			console.log("It's an integer!");
		}else{
			console.log("It's not an integer.");
		}

	}else{
		console.log("That's not a number!");
	}
}

/*
02 - Using the forEach function defined for an array, find the sum of the array of numbers.
*/
// array.forEach(function(currentValue, index, arr), thisValue)
function all_sum(array){
	var sum = 0;
	array.forEach(function(n) {sum += n;});
	return sum;
}