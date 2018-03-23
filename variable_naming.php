<?
	/*PHP Variables
A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)
Remember that PHP variable names are case-sensitive!

*/
	$txt = "This is string";//string definition
	$first_int = 1;//integer value definition
	$second_float = 2.3; //float value definition
	
	//inserting a variable while using echo
	$txt = "Progressive";
	echo " This is going" . $txt . "What do you say?";//Double quotes prints the text as it is, 
	//dot(.) will concatenate the string and variable, and semi colon ends the php statement

	
	
	
	// using operators
	$one = 1;
	$two = 2;
	$three = 3;
	$four = 4;
	$one_point_five = 1.5;
	$six_point_two = 6.2;
	$this_is_text = "using operators";
	$this_is_text_one ="Now we are";
	
	$echo $one + $two; //this is summation in php
	
	
	
	//global scope
	
	//A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
	$global_variables = 100;
	function value_testing(){
		echo "<p> This is my variable define above function $global_variables.</p>";//Is it error free? yes it is
	}
	value_testing();
	
	echo "<p>This is accessing the variable $global_variables outside the function.</p>";
	
		
	}
	
	
	//local scope
	
	
	//A variable declared inside a function has a LOCAL SCOPE and can only be accessed inside a function:
	function value_testing(){
		$local_variable = 50;
		echo "<p> This is my variable define inside function $local_variable.</p>";//Is it correct? yes it is.
	}
	value_testing();
	
	echo "<p>This is accessing the variable $local_variable outside the function.</p>";// This is not the scope of the local variable
	
}
	
	
	
	
	
	
	
?>	