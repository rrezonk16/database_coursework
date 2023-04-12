<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test</title>
</head>
<body> -->
	<?php
// $txt = "PHP ";
// echo "I love $txt! <br>";
// $color ="red";
// echo "My house is ".$color."<br>";

// $txt="Ky eshte string";
// $y=18;
// $x=13.2;

// echo "$txt <br> $y <br> $x";


// $name = 'John Doe';
// echo "<br> Hi there, $name. <br>" ;

// $name = "Johnathan";
// $surname = "Wick";
// $age = 32;
// echo "I" . " am" . " using" . " concatenation.<br>";
// $sentence = "My name is " . $name . " " . $surname . ", and I am " . $age . " years
// old.<br>";
// echo $sentence;
// echo gettype($age) . "<br>";
// echo gettype($sentence);

// $n = 2; // define variable with global scope with value = 2
// // function Local to test local scope
// function local()
// {
// $n = 5 ; // Define variable with same name,
// // but with local function scope and different value
// echo "The var \$n from the local() function = $n <br>";
// // $a will be interpreted and rendered as 5
// }
// local(); // call the function
// echo "The var \$n from outside the function = $n<br>";
//  // $a will be rendered as 2 from the beginning 

//  $name = 'John';
//  $surname = 'Doe';
//  function printName()
//  {
//  global $name, $surname, $fullName;
//  $fullName = $name . ' ' . $surname;
//  return $fullName;
//  }
//  echo printName()."<br>";
//  echo $fullName;

//  $name = 'John';
// function printName()
// {
// $surName = 'Doe';
// global $fullName;
// $fullName = $GLOBALS['name'] . ' ' . $surName;
// return $fullName;
// }
// echo printName();
// echo $fullName;
// $name = 'John';
// $surName = 'Doe';
// $fullName;
// //variables
// function printName()
// {
// $GLOBALS['fullName'] = $GLOBALS['name' ].' '.$GLOBALS['surName'];
// return $GLOBALS[ 'fullName'];
// }
// echo printName();
// echo $fullName;
// echo '<br>';//it insert a line break
// var_dump( $GLOBALS );
// function lapCounter() {
// 	static $lap = 1;
// 	echo $lap.'<br>';
// 	$lap++;
// 	}
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();
// 	lapCounter();

/* Creating array */
// $numbers = array(10, 20, 30 , 40, 50);
// echo "First element in array is " . $numbers[0 ] . "<br/>";
// echo "Second element in array is " . $numbers[1 ] . "<br/>" ;
// echo "Third element in array is " . $numbers[2 ] . "<br/>";
// echo "Fourth element in array is " . $numbers[3 ] . "<br/>";
// echo "Fifth element in array is " . $numbers[4 ] . "<br/>";
// //Output:
// //First element in array is 10
// //Second element in array is 20
// //Third element in array is 30
// //Fourth element in array is 40
// //Fifth element in array is 50
// /* Replacing values using indexes */
// $numbers[0] = "Ten";
// $numbers[1] = "Twenty";
// $numbers[2] = "Thirty";
// $numbers[3] = "Fourty";
// $numbers[4] = "Fifty";
// echo "First element is now " . $numbers[0] . "<br/>";
// echo "Second element is now " . $numbers[1 ] . "<br/>";
// echo "Third element is now " . $numbers[2] . "<br/>";
// echo "Fourth element is now " . $numbers[3 ] . "<br/>";
// echo "Fifth element is now " . $numbers[4] . "<br/>";
// //Output:
// //First element is now Ten
// //Second element is now Twenty
// //Third element is now Thirty
// //Fourth element is now Fourty
// //Fifth element is now Fifty


// $salaries = array(
// 	"Mark" => 2000,
// 	"Anthony" => 1000,
// 	"Eric" => 500
// 	);
// 	echo "Salary of Mark is ". $salaries['Mark'] . "<br/>" ;
// 	echo "Salary of Anthony is " . $salaries[ 'Anthony']. "<br/>" ;
// 	echo "Salary of Eric is ". $salaries['Eric'] . "<br/>";
// 	/* Replacing values using its keys */
// 	$salaries['Mark'] = 3000;
// 	$salaries['Anthony'] = 1500 ;
// 	$salaries['Eric'] = 800;
// 	echo "Salary of Mark is ". $salaries['Mark' ] . "<br/>";
// 	echo "Salary of Anthony is ". $salaries['Anthony'] . "<br/>" ;
// 	echo "Salary of Eric is " . $salaries[ 'Eric']. "<br/>" ;
// 	//Output:
// 	//Salary of Mark is 2000
// 	//Salary of Anthony is 1000
// 	//Salary of Eric is 500
// 	//Salary of Mark is 3000
// 	//Salary of Anthony is 1500
// 	//Salary of Eric is 800
// ?>


	
<!-- </body>
</html> -->
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
</head>
<body>
<p>POST METHOD</p>
<form action="prework.php" method ="POST">
Name: <input type="text" name="name" />
Age: <input type ="text" name="age" />
<input type="submit" name="submit" />
</form>
<?php
// if( isset($_POST['submit']))
// {
// if( $_POST["name"] || $_POST["age"] )
// {
// echo "Welcome ". $_POST[ 'name']. "<br />";
// echo "You are " . $_POST['age']. " years old.";
// }
// }
?>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
</head>
<body>
<p>GET METHOD</p>
<form action="index.php" method= "GET">
Name: <input type="text" name="name" />
Age: <input type= "text" name="age" />
<input type="submit" name="submit" />
</form>
//<?php
// if(isset($_GET[ 'submit']))
// {
// if( $_GET["name"] || $_GET["age" ] )
// {
// echo "Welcome ". $_GET['name']. "<br />";
// echo "You are ". $_GET['age' ]. " years old.";
// }
// }
// $date = date("l");
// //"l" will return the full name of the day of the week
// if ($date == "Friday")
// echo "It's Friday, weekend is around the corner... :-)";
// else
// echo "Don't watch the clock; do what it does, keep on going!" ;
//?>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Conditional statements</title>
</head>
<body> -->
<?php
// $today = date("N");
//  //"N" returns day of the week as numbers mon=1, sun=7
// if ($today == 1)
// echo "It's Monday, let's get the week started.";
// elseif ($today == 2)
// echo "It's Tuesday, a perfect day to learn conditional statements";
// else
// echo "Don't watch the clock; do what it does, keep on going!";
// $today = date("D");
// switch ($today) {
// case "Mon":
// echo "Today is Monday";
// break;
// case "Tue":
// echo "Today is Tuesday";
// break;
// case "Wed":
// echo "Today is Wednesday";
// break;
// case "Thu":
// echo "Today is Thursday";
// break;
// case "Fri":
// echo "Today is Friday";
// break;
// case "Sat":
// echo "Today is Saturday";
// break;
// case "Sun":
// echo "Today is Sunday";
// break;
// default:
// echo "If you seeing this message, something went wrong :)";
//}
// $session = "John";
// $user = ($session == "John")? $session : "not logged in";
// echo $user.'<br>';
// function confirm(){
// echo "affirmative";
// }
// function deny(){
// echo "negative";
// }
// //is 10 bigger than 5?
// (10 > 5) ? confirm() : deny();

// $varOne = 4>3;
// $varTwo = 4<3;
// $varThree = null;
// $varFour = null;

// echo ($varOne ?: "The condition was false or null") ."<br>";
// //returns 1 (true)
// echo ($varTwo ?: "The condition was false or null") ."<br>";
// // returns "The condition was false or null"
// echo ($varThree ?: "The condition was false or null") ."<br>";
// // returns "The condition was false or null"
// // Throws an error because the condition doesn't exist and shows the second result.
// echo ($varFour ?: "The condition was false or null") ."<br>";
// //To check if the condition exists use @ or isset().
// echo (@$varFour ?: "The condition doesn't exist") ."<br>";
// //same as:
// echo (isset($varFour) ?: "The condition doesn't exist");

$var1 = 42;
$var2 = null;
echo ($var1 ?? "The condition doesn't exist or is null") ."<br>";
//returns 42 (value of $var1)
echo ($var2 ?? "The condition doesn't exist or is null") ."<br>";
// returns "The condition doesn't exist or is null"
echo ($var3 ?? "The condition doesn't exist or is null") ."<br>";
// returns "The condition doesn't exist or is null"
?>
</body>
</html>