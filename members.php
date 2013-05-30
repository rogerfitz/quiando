<?php

//STEP 1 Connect To Database
$connect = mysql_connect("quiando.com","quia","Q|_|!ando");
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
$NumRows = mysql_query("SELECT COUNT(*) FROM users WHERE email='$Name' AND password='$Pass'");
$_SESSION['email'] = $Name;
$_SESSION['password'] = $Pass;

//STEP 3 Check to See If User Entered All Of The Information

if(empty($_SESSION['email']) || empty($_SESSION['password']))
{
load(something with error);
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

