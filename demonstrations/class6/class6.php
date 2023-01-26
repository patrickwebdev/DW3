<?php 
    //WHILE Loop
    //Assign the initial value of the counter
    $count = 1;

    //Specify the condition (Here: final accepted value of the counter)  
    while ($count <= 10){
        //Code to repeat while the condition is true
        echo "$count x 10 = " . $count * 10 . "<br>";
        //Increase the value of the counter to stop it after a number of iterations
        ++$count;
    }

    echo"<br>";

    //DO WHILE Loop
    //Assign the initial value of the counter
    $count = 1;

    //Specify the condition (Here: final accepted value of the counter)  
    do {
        //Code to repeat while the condition is true
        echo "$count x 10 = " . $count * 10 . "<br>";
        //Increase the value of the counter to stop it after a number of iterations
        ++$count;
    }while ($count <= 10);

    echo"<br>";

    //FOR Loop
    //Assign the initial value, final value of the counter, and increase its value
    for ($counter = 1; $counter <= 10; ++$counter){
        //Code to repeat while the condition is true
        echo "$counter x 10 = " . $counter * 10 . "<br>";
    }

    echo"<br>";

    //CONTINUE Operator
    //Declare variables and assign value
    $count = 0;  
    $grades=array(88, 94, 30, 78);

    for ($counter = 0; $counter <= 3; ++$counter)
    {
        //Go to the next iteration when grade<60
        if ($grades[$counter]<60)
            continue; 
        //Only grades>=60 will be count
        $count=$count + 1;
    }
    //Display the number of grades >=60
    echo"$count students succeed<br>";

    echo"<br>";

    //BREAK Operator
    //Declare variables and assign values
    $vowels=array('a', 'e', 'i', 'o', 'u');
    $user_answer='u';

    for ($counter = 0; $counter <= 4; ++$counter)
    {
        //Go after the loop when you found the character searched 
        if ($vowels[$counter]==$user_answer)
            break;
    }

    //Display the location of the character searched and found
    echo"The location of $user_answer is ". ($counter + 1) . " in my list";
