<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Success</title>
</head>

<body> 
Thank you for your inquiry. It is currently being processed. You will receive a confirmation email shortly.

<form action='index.html'>
<button>Back to the assignment list!</button>
</form> 
<?php

$name=$_POST["name"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["zip"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$major=$_POST["major"];
$year=$_POST["year"];
$sem=$_POST["sem"];

$to="kdubrey@mail.niagara.edu";
$subject="Niagara University- Inquiry Form";
$from=$email;
$message = "Hello $name! 

Thank you for considering joining NU Class of $year! Your information packet will be sent to

$address 
$city,$state 
$zip

It will contain the available classes for $major majors for the $sem semster.

Go Purple Eagles!"; 
mail($to,$subject,$message,$from);

?>
</body>
</html>