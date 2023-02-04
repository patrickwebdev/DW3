<?php 
    //1-FUNCTIONS THAT RETURNS A VALUE
    //Return one variable values
    $now = getdate();
    $current_year = $now ['year'];
    $birthday_year = 2020;
    //Create function
    function find_age($a, $b) {
        $diff = $a - $b;
        return $diff;
    }
    //Call function to receive a value
    $age=find_age($current_year, $birthday_year);
    //Display outputs
    echo"You were born on $birthday_year. <br/>";
    echo"Today is $current_year. <br/>";
    echo"Consequently, you're $age years old."; 
    
    //Return a set of variable values
    //Create function
    function fix_names($n1, $n2, $n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
        return $n1 . " " . $n2 . " " . $n3;
    }
    //Call function to receive a value
    echo fix_names("WILLIAM", "henry", "gatES");

    //2-FUNCTIONS THAT RETURNS A ARRAY
    function format_names($n1, $n2, $n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
        $all = array($n1, $n2,  $n3);
        return $all;
    }
    //Call function to receive value
    $names=format_names("WILLIAM", "henry", "gatES");
    //Display outputs
    foreach ($names as $single){
        echo"<p>$single</p>";
    }

    //3-FUNCTIONS THAT DO NOT RETURN A VALUE BUT PASS ARGUMENTS BY REFERENCE
    //Assign values to the array
    $user_input = array('y','b','m','o','f');
    //Display the inital array elements
    foreach($user_input as $item){
        echo "$item  ";
    }
    //Function to sort array elements in ascending order
    //It doesn't use return but use & before the argument to pass arguments by reference
    function sort_ascending(&$a) {
        sort($a, SORT_STRING);
    }
    //Call the function to sort the inital array elements
    sort_ascending($user_input); 
    //Display the array elements ordered in ascending order
    foreach($user_input as $item){
        echo "$item  ";
    }

    //4-FUNCTIONS THAT DO NOT RETURN A VALUE BUT DISPLAYS A TEXT
    //Display a text
    function format_words($n1, $n2, $n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
        $names = array($n1, $n2,  $n3);
        foreach ($names as $single){
            echo"<p>$single</p>";
        }
    }
    //Call function to display a text
    format_words("WILLIAM", "henry", "gatES");

    //5-SAME WAY TO SEND AN ARRAY OR UNITARY VARIABLE TO A FUNCTION AS ARGUMENT 
    //SAME WAY TO RETURN AN ARRAY OR UNITARY VARIABLE FROM A FUNCTION 
    
    //Send Unitary variable
    //Assign values to the array
    $user_input = 'y';
    //Function that receives a unitary variable  
    function display_variable($a) {
        echo "$a";
    }
    //Call the function to display the variable value
    display_variable($user_input);

    //Send Array variable
    //Assign values to the array
    $user_input = array('y','b','m','o','f');
    //Function that receives an array as argument 
    function display_array($a) {
        foreach($a as $item){
            echo "$item  ";
        }
    }
    //Call the function to display the array elements
    display_array($user_input);

    //6-SCOPE OF THE VARIABLES MANIPULATED BY A FUNCTION 
    
    //6.1.LOCAL VARIABLES
    //$user_input is a local variable and accessible only in the main program
    $user_input = 'y';
    //Function that receives a unitary variable 
    //$a is a local variable and accessible only in the function display_variable 
    function show_variable($a) {
            echo "$a";
    }
    //Call the function to display the variable value
    show_variable($user_input);
    
    //6.2.USE GLOBAL VARIABLES 
    //Declare variables
    $user_sec = 30;
    $user_min = 2;
    $user_hou = 1;
    $seconds_count = 60;
    //Create functions
    //Declare global variable within the functions using the keyword global
    //Global variables are accessible from all parts of the program
    function minutes_to_seconds($a) {
        global $seconds_count;
        return ($a * $seconds_count);
    }
    function hours_to_seconds($a) {
        global $seconds_count;
        return ($a * $seconds_count * $seconds_count);
    }
    //Call the functions to display value
    echo "$seconds_count Hours $user_min Minutes $user_sec Seconds is equal to : ";
    echo $user_sec + minutes_to_seconds($user_min) + hours_to_seconds($user_hou)." seconds";
    
    //6.3.MODIFY GLOBAL VARIABLES 
    //Declare variables
    $user_sec = 30;
    $user_min = 2;
    $user_hou = 1;
    $seconds_count = 60;
    //Variable used as Global variable to save the total value of seconds
    $total_seconds=0;
    //Create functions to convert minutes and hours to seconds
    function mins_to_secs($a) {
        global $seconds_count;
        $total_mts = $a * $seconds_count;
        return $total_mts;
    }
    function hrs_to_secs($a) {
        global $seconds_count;
        $total_hts = $a * $seconds_count * $seconds_count;
        return $total_hts;
    }
    //Create the Function that change the value of the Global variable $total_seconds
    function total_sec() {
        global $user_sec;
        global $user_min;
        global $user_hou;
        global $total_seconds;
        $total_seconds = $user_sec + mins_to_secs($user_min) + hrs_to_secs($user_hou);
    }
    //Call the function 
    total_sec();
    //Display outputs
    echo "$seconds_count Hours $user_min Minutes $user_sec Seconds is equal to : ";
    echo $total_seconds;

    //6.4.STATIC VARIABLES
    //Create function including Static variables
    //static variables exist only in a local function scope 
    //but do not lose their value when program execution leaves this scope
    function howManyVisitors()
    {
        static $count = 1;
        echo "<p>Number of user who visited this page: $count</p>";
        $count++;
    }
    //Call the funtions to display outputs
    //Each call will display an incremented value: 1, 2, 3... 
    howManyVisitors();
    howManyVisitors();
    howManyVisitors();
 
    //7-RECURSIVE FUNCTIONS
    //A recursive function is a function that calls itself
    //It includes a conditional statement to make it able to stop after the appropriate number of iterations    function factorial1($a)
    //Create the Function with the question mark statement conditional
    function factorialCalc($a){
        return ($a == 1 || $a == 0) ? 1 : $a * factorialCalc($a - 1);
    }
    //Create the Function with the if-else statement conditional
    function CalcFactorial($a){
        if ($a == 1 || $a == 0)
            return 1;
        else 
            return ($a * CalcFactorial($a - 1));
    }
    //Call the functions to display outputs
    //Call the Function with the question mark statement
    echo factorialCalc(1) . "<br/>";
    echo factorialCalc(0) . "<br/>";
    echo factorialCalc(3) . "<br/>";
    //Call the Function with the if-else statement
    echo CalcFactorial(1) . "<br/>";
    echo CalcFactorial(0) . "<br/>";
    echo CalcFactorial(3) . "<br/>";
