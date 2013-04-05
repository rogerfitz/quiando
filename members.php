<?php

//STEP 1 Connect To Database
$connect = mysql_connect("mysql.quiando.com","asktheoracle","5|_|nburns");
if (!$connect)
{
die("MySQL could not connect!");
}

$DB = mysql_select_db('quiando');

if(!$DB)
{
die("MySQL could not select Database!");
}

//STEP 2 Declare Variables

$Name = $_POST['email'];
$Pass = $_POST['password'];
$Query = mysql_query("SELECT * FROM users WHERE email='$Name' AND password='$Pass'");
$NumRows = mysql_num_rows($Query);
$_SESSION['email'] = $Name;
$_SESSION['password'] = $Pass;

//STEP 3 Check to See If User Entered All Of The Information

if(empty($_SESSION['email']) || empty($_SESSION['password']))
{
header ("Location: login1.html");
}

if($Name && $Pass == "")
{
header ("Location: login1.html");
}

if($Name == "")
{
header ("Location: login1.html");
}

if($Pass == "")
{
header ("Location: login1.html");
}

//STEP 4 Check Username And Password With The MySQL Database

if($NumRows != 0)
{
while($Row = mysql_fetch_assoc($Query))
{
$Database_Name = $Row['email'];
$Database_Pass = $Row['password'];
}
}
else
{
header ("Location: login1.html");
exit();
}

if($Name == $Database_Name && $Pass == $Database_Pass)
{
// If The User Makes It Here Then That Means He Logged In Successfully
header ("Location: http://quiando.com/main.html");
exit();
}

?>
