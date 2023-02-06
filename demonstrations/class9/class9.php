<?php		
//1-SET THE DEFAULT TIMEZONE USED BY ALL DATE/TIME FUNCTIONS IN A SCRIPT
/*
Without the following line of code the timestanps returned 
will be Coordinated Universal Time or UTC that is a standard, not a time zone, 
but the base point for all other time zones in the world.
List of Supported Timezones https://www.php.net/manual/en/timezones.php 
*/
date_default_timezone_set('America/Montreal');

//2-CHECK THE TIMEZONE USED BY ALL DATE/TIME FUNCTIONS IN A SCRIPT
echo date_default_timezone_get() . "<br/>";

//3-TIMESTAMP FOR THE CURRENT DATE 
echo time();

echo"<br/>";

//4-TIMESTAMP FOR A GIVEN DATE
$a=0;       //Hour
$b=0;       //Minute
$c=0;       //Second 
$d=2;       //Month
$e=4;       //Day 
$f=2023;    //Year

echo mktime($a, $b, $c, $d, $e, $f);

echo"<br/>";

//5-DISPLAY THE TIMESTAMP AS A DATE 
/*
Structure
echo date($format, $timestamp);
*/

/* Available values for $format
Day specifiers
d Day of month, two digits, with leading zeros 01 to 31
D Day of the week, three letters Mon to Sun
j Day of month, no leading zeros 1 to 31
l Day of week, full names Sunday to Saturday
N Day of week, numeric, Monday to Sunday 1 to 7
S Suffix for day of month (useful with specifier j) st, nd, rd, or th
w Day of week, numeric, Sunday to Saturday 0 to 6
z Day of year 0 to 365
Week specifier
W Week number of year 01 to 52
Month specifiers
F Month name January to December
m Month number with leading zeros 01 to 12
M Month name, three letters Jan to Dec
n Month number, no leading zeros 1 to 12
t Number of days in given month 28 to 31
Year specifiers
L Leap year 1 = Yes, 0 = No
y Year, 2 digits 00 to 99
Y Year, 4 digits 0000 to 9999
Time specifiers
a Before or after midday, lowercase am or pm
A Before or after midday, uppercase AM or PM
g Hour of day, 12-hour format, no leading zeros 1 to 12
G Hour of day, 24-hour format, no leading zeros 0 to 23
h Hour of day, 12-hour format, with leading zeros 01 to 12
H Hour of day, 24-hour format, with leading zeros 00 to 23
i Minutes, with leading zeros 00 to 59
s Seconds, with leading zeros 00 to 59 */

//Display the timestamp as a date
$format="F d, Y - G:i:s";
$current_timestamp=time();
echo date($format,$current_timestamp);

echo"<br/>";

//6-GET CURRENT DATE AND TIME IN AN ASSOCIATIVE ARRAY
// get current date and time as array
$now = getdate();
echo $now['mon']."<br>";
echo $now['mday']."<br>";
echo $now['year']."<br>";
echo $now['hours']."<br>";
echo $now['minutes']."<br>";
echo $now['seconds']."<br>";

echo"<br/>";

//7-CHECKING FOR THE VALIDITY OF A DATE
//Built-in function checkdate()
$month=13;
$day=32;
$year=2023;

if (checkdate($month, $day, $year)) 
    echo "The date is valid";
else 
    echo "The date is invalid";

echo"<br/>";

//8-FIND CURRENT DATE TIME ACCORDING TO THE LOCATION (ZONE):

//8.1.Current date and time in Montreal
//Create an object of the built-in class DateTime()
$currentDate = new DateTime(); 
//Invoke the method setTimezone to specify the zone
$currentDate->setTimezone(new DateTimeZone('Africa/Ouagadougou'));
//Invoke the method format to save the current date/time according to the zone indicated
$currentDateFormatted = $currentDate->format("d-m-Y h:i:s a");
//Display the current date/time according
echo "<br/>Africa/Ouagadougou: $currentDateFormatted";

echo"<br/>";

//8.2.Current date and time in 4 locations
//Create an array that includes 4 zones
$zonecity=array('America/Montreal', 'America/Toronto', 'Europe/Amsterdam', 'America/Los_Angeles');

//Create an objet of the built-in class DateTime()  
$currentDateTime = new DateTime(); 

//Calculate the date/time for each of the 4 zones
//Invoke the method setTimezone to specify the zone
//Invoke the method format to save 4 current date/time for 4 zones in an associative array  
foreach ($zonecity as $item)
{
    $currentDateTime->setTimezone(new DateTimeZone($item));
    $dateAndTime = $currentDateTime->format("d-m-Y h:i:s a");
    $dateTimeByZone[$item] = "$dateAndTime";
} 

//Display the current date/time according
foreach ($dateTimeByZone as $item => $description)
{
    echo "<p>$item: $description<br></p>"; 
} 

echo"<br/>";

//9-ADDITIONAL BUILT-IN FUNCTIONS FOR DATE AND TIME:
/*
checkdate()     // Checks a date for validity
strtotime()     // Creates timestamps from English-language descriptions
gmdate()        //Expresses a timestamp in GMT
There are many additional built-in functions for date and time
*/

?>
