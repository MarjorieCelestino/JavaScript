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

/*
03 - Write a JavaScript program to convert temperatures to and from celsius, fahrenheit. 
[ Use the formula : c/5 = (f-32)/9, where c = temperature in celsius and f = temperature in fahrenheit]
*/
function convert_temperature(scale, temperature){
	var f;
	var c;

	if (scale == "celsius"){

		f = ((temperature / 5) * 9) - 32;
		return temperature + "°C equals to " + f + "°F."

	}else if (scale == "fahrenheit"){

		c = (temperature - 32) * (5 / 9);
		return temperature + "°F equals to " + c + "°C."

	}else{
		return "That's not a valid scale."
	}
}

/*
 04 - Write a factorial function that returns the factorial of a given number, n. 
 Make sure you return the calculated value and not just print it. [function factorial(n){...}]
 */
 function factorial(number){
 	
 	var fac = 1;

 	while (number > 0){

 		fac = fac *number;

 		number--;
 	}
 	return number + "! equals to " + fac;
 }

 /*
 05 - Write a javascript function that converts a given amount of money into coins of denominations (1, 2, 5, 10 and 25). 
 [function convert_to_coins(amount) {...}]. You may choose to print the coin denominations used on the console. 
 E.g. convert_to_coins(87) should print 25 25 25 10 2.
 */
 function convert_to_coins(money){

 	var denominations = [25, 10, 5, 2, 1];
 	var den = 0;
 	var result = 0;

 	while(money > 0){
 		if(money < denominations[den]){
 			den++;
 		}
 		money = money - denominations[den];
 		console.log(denominations[den]);
 	}
 }