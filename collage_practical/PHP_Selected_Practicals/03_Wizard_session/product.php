<?php
session_start();
$_SESSION['custName']=$_POST['custName'];
$_SESSION['custAdd']=$_POST['custAdd'];
$_SESSION['CustMob']=$_POST['CustMob'];

echo "Name: ".$_SESSION['custName']."<br>";
echo "Address: ".$_SESSION['custAdd']."<br>";
echo "Mobile: ".$_SESSION['CustMob'];
?>