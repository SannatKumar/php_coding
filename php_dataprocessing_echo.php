<?php
// This is a php file that php_dataprocessing.php action into
?>
<html>
<body>
  <!-- calling the name variable from form in php_dataprocessing.php which ahas action link to this file-->
Welcome Mr/Ms <?php echo $_POST["name"]; ?> <br> <!--Here we print the name from post method-->
Your email id is: <?php echo $_POST["email"]."<br>" ; ?>
<?php
$floatValue = 563.689;
var_dump($floatValue);//This prints the type and value of the variable

?>
<br>
Thank you
:)<br>
<?php

//playing with strings around
echo strlen("We eat some fruit."),"<br>";
echo str_word_count("La vie en rose"),"<br>";
echo strrev("Reverse this"),"<br>";
echo strpos("There is a technique to play volley ball","volley"),"<br>";
echo str_replace("He", "she", "He is a good boy"),"<br>";


//constant definition, It is globally and accessible and no $sign required to define it
define("RajKumar","A doer");//A doer string is assigned as value to Rajkumar
echo RajKumar;
//concatenation in php

$raj = "php";
$kumar = " learner<br>";
//Both provides the same result
echo $raj.$kumar;
echo $raj .= $kumar;


//php switch statement

$a = "BUS";
switch($a)
{
    case "AEROPLANE":
      echo "Have a safe flight<br>";
      break;
    case "BUS":
      echo "Happy Journey<br>";
      break;
    default:
      echo "Walking is not possible<br>";
}

//loops in php

// while loop

$whileLoopVariable = 50;

while ($whileLoopVariable<=54)
{
  echo "<br>WHILE(LOOP)".$whileLoopVariable;
  $whileLoopVariable++;
}

// do while loop

$doWhileVariable = 60;
do{
  echo "<br>Do WHILE(LOOP)".$doWhileVariable;
  $doWhileVariable++;
}while($doWhileVariable<=64);

//for loop
for($forLoopVariable=70; $forLoopVariable<=74; $forLoopVariable++)
{
  echo "<br>FOR(LOOP)".$forLoopVariable;
}

$stackOfForEachNumbers = array(1,2,3,4,5);

// for each loop
foreach($stackOfForEachNumbers as $value)
{
  echo "<br>FOREACH(LOOP)".$value;
}


?>

</body>
</html>
