<?php

$con=new mysqli('localhost', 'root', '', 'f_mim');

if(!$con)
{
    die(mysqli_error($con));
}

?>