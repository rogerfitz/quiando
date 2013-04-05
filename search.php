<?php
$Query=$_POST['search'];
$full=$Query.' Chicago';
//$command = escapeshellarg($full);

 if ($Query == "") 
 { 
 echo "You forgot to enter a search term"; 
 exit; 
 }
else{
//exec('java -Xmx128m -Xms128m -jar query.jar bbq champaign');
//exec("java -Xmx128m -Xms128m -jar query.jar $full", $output);
header("Location: http://www.yelp.com/search?find_desc=$full");
} 

?>
