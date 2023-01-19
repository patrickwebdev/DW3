<?php 
    /* 
    IF statement 
    ONLY 1 SINGLE OR COMBINED OPTION
    */
    // Variable assignment
    $user_number=27;
    // The only option there is when $user_number>=0
    if ($user_number>=0){
        echo"You wrote a positive number<br/>";
    }

    /* 
    IF-ELSE statement 
    ONLY 2 SINGLE OR COMBINED OPTIONS
    ELSE IS APPLIED FOR ALL THE OTHER OPTIONS THAT IF DIDN'T TAKE INTO ACCOUNT
    */
    // Variable assignment
    $user_number=-27;
    // The 1st option there is when $user_number>=0
    // The 2nd option there is when $user_number is not >=0
    if ($user_number>=0){
        echo"You wrote a positive number<br/>";
    }else{
        echo"You wrote a negative number<br/>";
    }

    /* 
    IF-ELSE-ELSEIF statement 
    MORE THAN 2 SINGLE OR COMBINED OPTIONS
    ELSE IS APPLIED FOR ALL THE OTHER OPTIONS THAT IF AND ELSEIF DIDN'T TAKE INTO ACCOUNT
    */
    // Variable assignment
    $user_number=0;
    // The 1st option there is when $user_number>0
    // The 2nd option there is when $user_number=0
    // The 3nd option there is when $user_numberis not > or = 0
    if ($user_number>0){
        echo"You wrote a positive number<br/>";
    }elseif ($user_number==0){
        echo"You wrote a null number<br/>";
    }else{
        echo"You wrote a negative number<br/>";
    }
 
    /* 
    ? statement 
    ONLY 2 SINGLE OR COMBINED OPTIONS
    The 1st message is displayed only when the condition indicated is true (if)
    The 2nd message is displayed only when the condition indicated is false (else)
    */
    // Variable assignment
    $user_number=-50;
    // The 1st option there is when $user_number>=0
    // The 2nd option there is when $user_number is not >=0
    echo $user_number >= 0 ? "Positive number <br/>" : "Negative number<br/>";
    
    /* 
    LIKE IF-ELSE-ELSEIF statement 
    MORE THAN 2 SINGLE OR COMBINED OPTIONS ARE POSSIBLE
    DEFAULT IS APPLIED FOR ALL THE OTHER OPTIONS THAT THE OTHER CASES DIDN'T TAKE INTO ACCOUNT
    */
    // Variable assignment
    $user_number='negativ';

	switch ($user_number){
    	case 'positive' :
        	echo "Number greater than 0.";
        	break;
    	case 'zero':
        	echo "Number equal to 0.";
        	break;
    	case 'negative':
        	echo "Number lower than 0.";
        	break;
    	default:
        	echo "You didn't enter a correct value.";
	}










