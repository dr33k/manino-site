<?php

//Check Connection
$sqli = new mysqli('localhost','root','','login');
if(mysqli_connect_errno()){
printf("Connect failed: %s\n",mysqli_connect_error());
exit();
}

//select database
if(!$sqli->select_db('login')){
echo'<br>'.mysqli_error($sqli);
}
?>