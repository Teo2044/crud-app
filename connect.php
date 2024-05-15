<?php

$con=new mysqli('localhost','root','',
'crudoperation');

if(!$con){
    echo "Connection succesfull";
}
else{
    die(mysqli_error($con));
}

?>