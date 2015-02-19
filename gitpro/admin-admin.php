<?php
session_start();
include_once 'connect.php';
$admin = isset ($_POST['admin']) ? mysql_real_escape_string($_POST['admin']):"";
$pass = isset ($_POST['pass']) ? mysql_real_escape_string($_POST['pass']):"";



$Query = mysql_query("SELECT * FROM `jack_admin` WHERE `username`='$admin' && `password`= '$pass' ;");
if(mysql_num_rows($Query)>0){
    $user_detail = mysql_fetch_assoc($Query);
   $_SESSION['isLoggedin']= TRUE;
   header('location:admindata.php');
}else{
    $_SESSION['message'] = 'Email id or password not matched.';
    header('location:index.php?msg=not-match');
}