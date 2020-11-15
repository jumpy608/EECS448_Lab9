<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	$q1 = $_POST["q1"];
    	$q2 = $_POST["q2"];
    	$q3 = $_POST["q3"];
    	$q4 = $_POST["q4"];
    	$q5 = $_POST["q5"];
    
    	echo "Question 1: Who is the President of the U.S.?";
	echo "<br>";
    	echo "      You answered: $q1";
	echo "<br>";
    	echo "      Correct answer: Donald J. Trump";
	echo "<br>";
	echo "<br>";

    	echo "Question 2: Who is the Vice-President of the U.S.?";
	echo "<br>";
    	echo "      You answered: $q2";
	echo "<br>";
    	echo "      Correct answer: Mike Pence";
	echo "<br>";
	echo "<br>";

    	echo "Question 3: Who is the Speaker of the House?";
	echo "<br>";
    	echo "      You answered: $q3";
	echo "<br>";
    	echo "      Correct answer: Nancy Pelosi";
	echo "<br>";
	echo "<br>";

    	echo "Question 4: Who is the Majority leader in the U.S. Senate?";
	echo "<br>";
    	echo "      You answered: $q4";
	echo "<br>";
    	echo "      Correct answer: Mitch McConnell";
	echo "<br>";
	echo "<br>";

    	echo "Question 5: How many total electoral college votes are there?";
	echo "<br>";
    	echo "      You answered: $q5";
	echo "<br>";
    	echo "      Correct answer: 538";
	echo "<br>";
	echo "<br>";

	$num = 0;
	if ($q1 == "Donald J. Trump")
	{
		$num++;		
	}
	if ($q2 == "Mike Pence")
	{
		$num++;		
	}
	if ($q3 == "Nancy Pelosi")
	{
		$num++;		
	}
	if ($q4 == "Mitch McConnell")
	{
		$num++;		
	}
	if ($q5 == "538")
	{
		$num++;		
	}

	$percent = ($num/5)*100;

	echo "You got $num correct!";
	echo "<br>";
	echo "Which is a $percent%!"; 
?>
