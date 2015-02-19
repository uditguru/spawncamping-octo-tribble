<?php

if (isset($_POST['register'])) {
	# code...

include_once 'connect.php';



$uniname = isset($_POST['uniname'])?mysql_real_escape_string($_POST['uniname']):'';
$teamm = isset($_POST['teamm'])?mysql_real_escape_string($_POST['teamm']):'';
$contact = isset($_POST['contact'])?mysql_real_escape_string($_POST['contact']):'';
$uni_address = isset($_POST['address'])?mysql_real_escape_string($_POST['address']):'';
$tel = isset($_POST['telephone'])?mysql_real_escape_string($_POST['telephone']):'';
$arrival = isset($_POST['dateofarrival'])?mysql_real_escape_string($_POST['dateofarrival']):'';
$arrivalmode = isset($_POST['moarrival'])?mysql_real_escape_string($_POST['moarrival']):'';
$tinfo = isset($_POST['traininfo'])?mysql_real_escape_string($_POST['traininfo']):'';


$Query = mysql_query("INSERT INTO team (`uni_name`,`manager_team`, `manager_contact`,`uniaddress`,`unicontact`,`doarrival`,`moarrival` ,`traininfo`) VALUES('{$uniname}', '{$teamm}' , '{$contact}','{$uni_address}' , '{$tel}' ,'{$arrival}','{$arrivalmode}' ,'{$tinfo}') ");

if($Query){
	
	echo "Team Registered!! your ID to register participants id ",mysql_insert_id();

header('refresh: 30; index.php ')    ;
exit;
}else{
    echo "There was some error";
    header('refresh:10; index.php');
}

}else{
	echo "Do not try to be over-smart";
	header('refresh:10; index.php');
}
