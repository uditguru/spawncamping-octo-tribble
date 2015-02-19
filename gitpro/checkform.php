<?php
session_start();
include_once 'connect.php';
$partname = isset ($_POST['partname']) ? mysql_real_escape_string($_POST['partname']):"";
$partemail = isset ($_POST['partemail']) ? mysql_real_escape_string($_POST['partemail']):"";

$Query = mysql_query("SELECT * FROM `part` WHERE `full_name`='$partname' && `emai_id`='$partemail';");
if(mysql_num_rows($Query)>0){
    
   $file = fopen("C://wamp/www//pro//pdf//".$partname.".pdf");
}else{
    $_SESSION['message'] = 'Email id or password not matched.';
    header('location:index.php?msg=not-match');
}