<?php 

mysql_connect(localhost,$username,$password);

@mysql_select_db($contactinfo) or die( "Unable to select database");




$name = $_GET['name'];
$number = $_GET['number'];
$email = $_GET['email'];
$enquiry = $_GET['enquiry'];

$to = "email@email.com";
$subject = "Contact Request"


?>