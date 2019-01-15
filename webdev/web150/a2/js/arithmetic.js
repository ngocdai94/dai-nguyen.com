// Get user's input
var name = window.prompt("Let's play a sum game. \nPlease enter your name");
var num1 = Number.parseInt(window.prompt("Enter the first number"), 10);
var num2 = Number.parseInt(window.prompt("Enter the second number"), 10);

// do the sumation of number 1 and number 2
var sum = num1 + num2;

// output the result to html document
document.write("Hello, ", name + "! ");
document.write("The sum of " + num1 + " + " + num2 + " is ", sum);