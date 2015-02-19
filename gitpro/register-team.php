<?php

if (isset($_POST['register'])) {
    # code...

include_once 'connect.php';
include_once "class.phpmailer.php";
include_once "class.smtp.php";
include_once "class.pop3.php";


$uniname = isset($_POST['uniname'])?mysql_real_escape_string($_POST['uniname']):'';
$college = isset($_POST['collegename'])?mysql_real_escape_string($_POST['collegename']):'';
$uni_address = isset($_POST['address'])?mysql_real_escape_string($_POST['address']):'';
$city = isset($_POST['city'])?mysql_real_escape_string($_POST['city']):'';
$state = isset($_POST['state'])?mysql_real_escape_string($_POST['state']):'';
$tel = isset($_POST['telephone'])?mysql_real_escape_string($_POST['telephone']):'';
$teamm = isset($_POST['teamm'])?mysql_real_escape_string($_POST['teamm']):'';
$contact = isset($_POST['contact'])?mysql_real_escape_string($_POST['contact']):'';
$mailmanage = isset($_POST['managermail'])?mysql_real_escape_string($_POST['managermail']):'';
$arrival = isset($_POST['dateofarrival'])?mysql_real_escape_string($_POST['dateofarrival']):'';
$arrivalmode = isset($_POST['moarrival'])?mysql_real_escape_string($_POST['moarrival']):'';
$tinfo = isset($_POST['traininfo'])?mysql_real_escape_string($_POST['traininfo']):'';


$Query = mysql_query("INSERT INTO team (`uni_name`,`name_college`,`uniaddress`,`tcity`,`tstate`,`college_contact`,`manager_team`, `manager_contact`,`manager_email`,`doarrival`,`moarrival` ,`traininfo`) 
                                        VALUES('$uniname', '$college','$uni_address', '$city','$state','$tel','$teamm','$contact','$mailmanage','$arrival','$arrivalmode','$tinfo') ");

if($Query){

//
 //   $mail = new PHPMailer();
//            
 //   $mail->Host = "smtp.gmail.com"; 
   // $mail->SMTPDebug = 2; 
 //   $mail->SMTPSecure = 'ssl'; //<----------------- You missed this 
 //   $mail->SMTPAuth = true; 
 //   $mail->Host = "smtp.gmail.com"; 
 //   $mail->Port = 26; // 
 //   $mail->Username = "guru.udit@gmail.com";
 //   $mail->Password = "2108199two";
 //   $mail->AddAddress("$mailmanage");
 //   $mail->SetFrom('guru.udit@gmail.com', 'First Last');
 //   $mail->Subject = 'This is a TEST message';
 //   $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
 //   $body = "To view the message, please use an HTML compatible email viewer!"; // automatically
 //   $mail->MsgHTML($body);
 //                       
 //   if(!$mail->Send()){
 //       echo "Message could not be sent. <p>";
 //       echo "Mailer Error: " . $mail->ErrorInfo;
 //       exit;
 //   }
 //   else{
    echo "Team Registered!! your ID to register participants id ",mysql_insert_id();
//}
header('refresh: 30; index.php ')    ;
exit;
}else{
    echo "There was some error";
    header('refresh:10; index.php');
}

}
?>
<head>

  

  <title>Register Your Team</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="base.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css/hover.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css/reset.css"> 
    <link rel="stylesheet" href="css/stylo.css"> 
    <script src="js/modernizr.js"></script>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/main.js"></script>
    <script src="js/datepick.js"></script>
   
</head>


  <body>
<?php include 'header.php' ?>
    <div class="container ">

     <div class="register-form">
      
                <form class="headerfloat" action="" method="post" onsubmit="return  checkForm();">
                    <table cellpadding="5" cellspacing="5">
                        
                        <tr id="pass_error" class="error">
                            <td>&nbsp;</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="name" class="txt_reg">Name of University  :</label></td>
                            <td><input Required type="text" autocomplete="off" name="uniname" id="name" class="txt_field" placeholder="Name of University"/></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for="email" class="txt_reg"> Name  of College / Department  :</label></td>
                            <td><input Required type="text" autocomplete="off" name="collegename" id="email" autocomplete="off" class="txt_field" placeholder="Name of College / Department "/></td>
                            <td><img src="images/ajax-loader.gif" id="email_img" style="display: none;"/></td>
                        </tr>
                          <tr>
                            <td><label for="email" class="txt_reg"> Address of College / Department  :</label></td>
                            <td><input Required type="text" autocomplete="off" name="address" id="email" autocomplete="off" class="txt_field" placeholder="Address of College / Department  "/><br>
                            <input Required type="text" autocomplete="off" name="city" id="email" autocomplete="off" class="txt_field" placeholder="City"/><br>
                            <input Required type="text" autocomplete="off" name="state" id="email" autocomplete="off" class="txt_field" placeholder="State"/></td>
                            <td><img src="images/ajax-loader.gif" id="email_img" style="display: none;"/></td>
                        </tr>
                        <tr>
                            <td><label for="email" class="txt_reg"> Telephone No. of College / Department:</label></td>
                            <td><input Required type="text" autocomplete="off" name="telephone " id="email" autocomplete="off" class="txt_field" placeholder="Telephone No. of College / Department  "/></td>
                            <td><img src="images/ajax-loader.gif" id="email_img" style="display: none;"/></td>
                        </tr>
                        <tr>
                            <td><br><br></td>
                            <td><br><h2> Team Manager's Detail </h2><br></td>
                            <td><br><br></td>
                        </tr>
                        <tr>
                            <td><label for="email" class="txt_reg">Name  :</label></td>
                            <td><input Required type="text" autocomplete="off" name="teamm" id="email" autocomplete="off" class="txt_field" placeholder="Name of Team Manager"/></td>
                            <td><img src="images/ajax-loader.gif" id="email_img" style="display: none;"/></td>
                        </tr>
                        <tr>
                            <td><label for="mobile" class="txt_reg">Mobile No.  :</label></td>
                            <td><input Required type="text" autocomplete="off"  pattern='[789][0-9]{9}' name="contact" id="mobile" class="txt_field" placeholder="Team Manager's Contact" autocomplete="off"/></td>
                            <td>&nbsp;</td>
                        </tr>
                         <tr>
                            <td><label for="mobile" class="txt_reg">Email Id  :</label></td>
                            <td><input Required type="text" autocomplete="off"  name="managermail" id="mobile" class="txt_field" placeholder="Team Manager's Email" autocomplete="off"/></td>
                            <td>&nbsp;</td>
                        </tr>
                      
                        <tr>
                            <td><br><br></td>
                            <td><br><h2>Travel Plans</h2><br></td>
                            <td><br><br></td>
                        </tr>
                         <tr>
                            <td><label for="email" class="txt_reg"> Date of Arrival  :</label></td>
                            <td><input  Required type="date" value="20-11-2014" autocomplete="off" name="dateofarrival" id="doarrival" autocomplete="off" class="txt_field" placeholder=" Date of Arrival  "/></td>
                            <td><img src="images/ajax-loader.gif" id="email_img" style="display: none;"/></td>
                        </tr>
                        <tr>
                            <td><label  for='name' class='txt_reg'>Arriving By  :</label></td>
                            <td><input type="radio" class="radiobutton" name="moarrival" id="traincheck" value="train" />Train
                              <input class='radiobutton'  type='radio'  name="moarrival" value='bus' />Bus</td>
                            <td>&nbsp;</td>
                        </tr>
                        
                        <tr>
                            <td><label   for="email" class="txt_reg"> Train Info(if by train)   :</label></td>
                            <td><input     type="text" autocomplete="off" name="traininfo" id="email" autocomplete="off" class="txt_field" placeholder=" Train Name & Number  "/></td>
                            <td><img src="images/ajax-loader.gif" id="email_img" style="display: none;"/></td>
                        </tr>
                       
                            <td>&nbsp;</td>
                            <td><input type="submit" name="register" id="register" value="Register Team" class="btn wobble-horizontal" /></td>
                        </tr>
                    </table>
                </form>
            </div>


    </div>

<?php include 'navigation.php'; ?>

</body>