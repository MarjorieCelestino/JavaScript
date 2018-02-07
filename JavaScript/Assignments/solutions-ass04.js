/*
01 - Write a constructor function to represent a Rectangle, which can calculate its area and perimeter.
*/

function Rectangle(width, heigth){
	this.width = width;
	this.heigth = heigth;
	this.area = function(){
		return width*heigth;
	}
	this.perimeter = function(){
		return 2*(heigth + width);
	}
}

/*
02 - Write a Point function which takes x and y coordinates as arguments to define it. It should also be able to evaluate the distance from another point. 
We may make use of this exercise in a later assignment problem when dealing with the Document Object Model.

- Math.sqrt: returns the square of a number.
- Math.pow: returns the base raised to power exponent.

Tested example:
p1 = new Point(1, 1);
-> Point {x: 1, y: 1, distance: ƒ}
p2 = new Point(1, 4);
-> Point {x: 1, y: 4, distance: ƒ}
p1.distance(p2);
-> 3
*/

function Point(x, y){
	this.x = x;
	this.y = y;
	this.distance = function(point){
		return Math.sqrt(Math.pow((this.x - point.x), 2) + Math.pow((this.y - point.y), 2));
	}
}

/*
03 - Write javascript code so that we can check if a string object is a palindrome. E.g. "xyx".isPalindrome() should return true.

- A palindrome is a word, phrase, number or sequence of words that reads the same backwards as forwards

Tested example:

isPalindrome("anna");
-> true
*/

function isPalindrome(string){
	return string == string.split('').reverse().join('');
}

/*Another solution:

Tested example:
"anna".isPalindrome();
-> true
*/

String.prototype.isPalindrome = function(){
	return this == this.split('').reverse().join('');
}