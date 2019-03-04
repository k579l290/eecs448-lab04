<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$a1 = $_POST["q1"];
$a2 = $_POST["q2"];
$a3 = $_POST["q3"];
$a4 = $_POST["q4"];
$a5 = $_POST["q5"];

$correct = 0;

echo "Question 1: When is Christmas Day? <br>";
echo "You answered: " . $a1 . "<br>";
echo "Correct answer: a:December 25 <br><br>";

echo "Question 2: When is the Ides of March? <br>";
echo "You answered: " . $a2 . "<br>";
echo "Correct answer: b:March 15 <br><br>";

echo "Question 3: When is International Women's Day? <br>";
echo "You answered: " . $a3 . "<br>";
echo "Correct answer: b:March 8 <br><br>";

echo "Question 4: When is New Year's Day?<br>";
echo "You answered: " . $a4 . "<br>";
echo "Correct answer: a:January 1 <br><br>";

echo "Question 5: When is May Day?<br>";
echo "You answered: " . $a5 . "<br>";
echo "Correct answer: d:May 1 <br><br>";

if ($a1 == "a:December 25") {
  $correct++;
}

if ($a2 == "b:March 15") {
  $correct++;
}

if ($a3 == "b:March 8") {
  $correct++;
}

if ($a4 == "a:January 1") {
  $correct++;
}

if ($a5 == "d:May 1") {
  $correct++;
}

$percent = $correct * 20;
echo "You answered " . $correct . " out of 5 questions correctly<br><br>";
echo "Your score is " . $percent . "%";
?>
