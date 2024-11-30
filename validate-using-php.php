<?php
include 'connectserver.html';


if($_SERVER["REQUEST_METHOD"]== "POST")
{
$D = $_POST['Diplalname'];
$I = $_POST['Diplaladdress'];
$P = $_POST['Diplalemail'];



    $namepattern ="/^[a-zA-Z]+[ ]+[a-zA-Z]$/";
    if(preg_match($D,$namepattern))
    {
     echo("Valid Name");
    }

    $addresspattern = "/^[a-zA-Z]$/";
    if(preg_match($I, $addresspattern))
    {
        echo("Valid Address ");
    }
    
    $emailpattern = "/^[a-zA-Z0-9]+@[a-zA-Z]+\.[a-zA-Z]{2}$/";
    if(preg_match($P, $emailpattern))
    {
        echo("Valid Email");
    }
}
?>