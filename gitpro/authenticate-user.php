<?php
session_start();
include_once 'connect.php';
$manager = isset ($_POST['manager']) ? mysql_real_escape_string($_POST['manager']):"";
$teamid = isset ($_POST['team_id']) ? mysql_real_escape_string($_POST['team_id']):"";

$Query = mysql_query("SELECT * FROM `team` WHERE `manager_team`='$manager' && `teamid`='$teamid';");
if(mysql_num_rows($Query)>0){
    $user_detail = mysql_fetch_assoc($Query);
   $_SESSION['isLoggedin']= TRUE;
   header('location:register.php?id='.$_POST['team_id'].'.');
   
}else{
    $_SESSION['message'] = 'Email id or password not matched.';
    header('location:index.php?msg=not-match');
}