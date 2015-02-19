<?php

if (isset($_POST['register'])) {

	# code...

include_once 'connect.php';

require('WriteHTML.php');

$uniname = isset($_POST['uniname'])?mysql_real_escape_string($_POST['uniname']):'';
$name = isset($_POST['name'])?mysql_real_escape_string($_POST['name']):'';
$dobirth = isset($_POST['dob'])?mysql_real_escape_string($_POST['dob']):'';
$gen = isset($_POST['gender'])?mysql_real_escape_string($_POST['gender']):'';
$email = isset($_POST['email'])?mysql_real_escape_string($_POST['email']):'';
$mobile = isset($_POST['mobile'])?mysql_real_escape_string($_POST['mobile']):'';
$college_name = isset($_POST['collegename'])?mysql_real_escape_string($_POST['collegename']):'';
$course_name = isset($_POST['coursename'])?mysql_real_escape_string($_POST['coursename']):'';
$teamid = isset($_POST['teamid'])?mysql_real_escape_string($_POST['teamid']):'';
$bloodgrp = isset($_POST['blood'])?mysql_real_escape_string($_POST['blood']):'';

$pdfpath = 'C:/wamp/www/pro/pdf/'.$_POST['email'].'.pdf';

$Query = mysql_query("INSERT INTO `part`(`uni_name`,`dob`,`gender`,`full_name`,`email_id`,`mobile_num`,`college`,`course`,`team_id`,`bloodgroup` ,`image`) VALUES('$uniname','$dobirth','$gen','$name', '$email', '$mobile', '$college_name', '$course_name','$teamid','$bloodgrp' , '$pdfpath'); ");
if($Query){
$pdf=new PDF_HTML();

$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 2);

$pdf->AddPage('L');

$pdf->Image('img/logo.png',18,13,33);
$pdf->SetFont('Arial','B',22);
$pdf->SetTitle('National Youth Festival 2015');
$pdf->Rect(225, 25, 30, 40, 'D');
$pdf->WriteHTML('<para><h1>School of Computer Science and IT</h1><br><br>DAVV
</para>');
$pdf->WriteHTML2("<br><br><br>");


$pdf->SetFont('Arial','',16); 

$htmlTable='<PARA>

<TR>
<TD>Team Id :</TD>
<TD><SPAN>'.$_POST['teamid'].'</SPAN></TD>
</TR>
<br>
<br>
<TR>
<TD>University Name:</TD>
<TD><SPAN>'.$_POST['uniname'].'</SPAN></TD>
</TR>
<br>
<br>
<TR>
<TD>Name:</TD>
<TD><SPAN>'.$_POST['name'].'</SPAN></TD>
</TR>
<br>
<br>
<TR>
<TD>D.O.B:</TD>
<TD><SPAN>'.$_POST['dob'].'</SPAN></TD>
</TR>
<br>
<br>
<TR>
<TD>Email:</TD>
<TD>'.$_POST['email'].'</TD>
</TR>
<br>
<br>
<TR>
<TD>Mobile:</TD>
<TD>'.$_POST['mobile'].'</TD>
</TR>
<br>
<br>
<TR>
<TD>College:</TD>
<TD>'.$_POST['collegename'].'</TD>
</TR>
<br>
<br>
<TR>
<TD>Course:</TD>
<TD>'.$_POST['coursename'].'</TD>
</TR>
<br>
<br>
<TR>
<TD>Blood Group:</TD>
<TD><SPAN>'.$_POST['blood'].'</SPAN></TD>
</TR>
<br>
<br>
</PARA>';
$pdf->WriteHTML2("<br><br><br>$htmlTable");


$pdf->SetFont('Arial','B',6);
$dir='C:/wamp/www/pro/pdf/';
$filename = $_POST['name'] . '.pdf';
$pdf ->Output($dir.$filename);

$pdf->Output(); 

	
	


header('refresh: 30; index.php ')    ;
exit;
}else{
    echo "There was some error getting your request done. !!";
    header('refresh:10; index.php');
}

}else{
	echo "please submit the form first";
}
