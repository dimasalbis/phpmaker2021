/*
 * User Code for PHPMaker 2021
 *
 * Note: User Code must be written in JavaScript.
 *
 * Objects available:
 * PROJ - Project Object
 * DB - Database Object
 * CONTROL - Active Control Object
 * TABLE - Active Table Object
 * FIELD - Active Field Object
 *
 */

/* User Code Examples

// Example 1: Replace value (same as JavaScript string object replace method)
Events.on("<function>", function(args) {
	args.code = args.code.replace(<regular expression>, "<value>");
});

// Example 2: Concat values (same as JavaScript string object concat method)
Events.on("<function>", function(args) {
	args.code = args.code.concat("<value 1>", "<value 2>", ...);
});

// Example 3: Overwrite generated code
Events.on("<function>", function(args) {
	// console.log(JSON.stringify(args)); // View the args
	console.log(args.code); // View the old code
	var newcode = <your code here>; // Modfiy the old code or write your own code
	args.code = newcode; // Overwrite generated code
});

*/