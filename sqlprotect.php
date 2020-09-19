<?php
function makeSafe($variable){
$variable = mysqli_real_escape_string($conn,trim($variable));
return $variable;
}
?>