
<?php 
session_start();



$token = $_SESSION['token'] = md5( session_id() . time(). rand() );

if(!isset ($_SESSION['isLoggedin']) && $_SESSION['isLoggedin'] !== TRUE){
    $_SESSION['message'] = 'Please login first.';
    header('location:authenticate.php');
}else{

    include_once 'connect.php';

   
}

 
?>
<!DOCTYPE html>
<html>


<head>

  

  <title>Register</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="base.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css/hover.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css/reset.css"> 
    <link rel="stylesheet" href="css/stylo.css"> 
    <script src="js/modernizr.js"></script>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/datepick.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(function() {
        $( "#dob" ).datepicker();
        });
            </script>
    
</head>


  <body>

<?php 

                        
$id=mysql_real_escape_string($_GET['id']);
$result = mysql_query("SELECT * FROM team where `teamid`='$id'");

while($row = mysql_fetch_array( $result )) {
        
                            
echo "<div class='container '>

     <div class='register-form'>
                <form class='headerfloat' action='register-submit.php?id=' method='post' >
                    <table cellpadding='5' cellspacing='5'>
                        
                        <tr id='pass_error' class='error'>
                            <td><input type='hidden' name='token' value='<?php echo $token; ?>'</td>
                            <td></td>
                        </tr>
                         <tr>
                            <td><label for='name' class='txt_reg'>Name of University</label></td>
                            <td><input Required type='text' readonly autocomplete='off' name='uniname' value='" . $row['uni_name'] . "' id='uniname' class='txt_field' placeholder='Name'/></td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td><label for='name' class='txt_reg'>Name</label></td>
                            <td><input Required type='text' autocomplete='off' name='name' id=name' class='txt_field' placeholder='Name'/></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for='name' class='txt_reg'>Gender </label></td>
                            <td><input class='radiobutton' Required type='Radio'  name='gender' value='male' />Male
                              <input class='radiobutton' Required type='Radio'  name='gender' value='female' />Female</td>
                            <td>&nbsp;</td>
                        </tr>
                            <tr>
                            <td><label for='name' class='txt_reg'>D.O.B </label></td>
                            <td><input Required type='text' autocomplete='off' name='dob' id=dob' class='txt_field' placeholder='DD/MM/YYYY'/></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for='email' class='txt_reg'>E-Mail</label></td>
                            <td><input Required type='email' autocomplete='off' name='email' id='email' autocomplete='off' class='txt_field' placeholder='email'/></td>
                            <td><img src='images/ajax-loader.gif' id='email_img' style='display: none;'/></td>
                        </tr>
                        <tr>
                            <td><label for='college_name' class='txt_reg'>Contact Home</label></td>
                            <td><input Required readonly type='text' autocomplete='off' name='teamid'  id='collegename' class='txt_field' placeholder='Contact Home' /></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for='mobile' class='txt_reg'>Mobile No</label></td>
                            <td><input Required type='text' autocomplete='off' pattern='[789][0-9]{9}' name='mobile' id='mobile' class='txt_field' placeholder='Mobile Number' autocomplete='off'/></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for='college_name' class='txt_reg'>Contact Person's Name</label></td>
                            <td><input Required readonly type='text' autocomplete='off' name='teamid'  id='collegename' class='txt_field' placeholder='Contact Person Name' /></td>
                            <td>&nbsp;</td>
                        </tr>
                         <tr>
                            <td><label for='college_name' class='txt_reg'>Contact Person's No.</label></td>
                            <td><input Required readonly type='text' autocomplete='off' name='teamid'  id='collegename' class='txt_field' placeholder='Contact Persons No.' /></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for='college_name' class='txt_reg'>Team  Manager</label></td>
                            <td><input Required readonly type='text' autocomplete='off' name='teamid' value='".$row['manager_team']."' id='collegename' class='txt_field' placeholder='Team Id' /></td>
                            <td>&nbsp;</td>
                        </tr>
                       <tr>
                            <td><label for='college_name' class='txt_reg'>Team  ID</label></td>
                            <td><input Required readonly type='text' autocomplete='off' name='teamid' value='".$row['teamid']."' id='collegename' class='txt_field' placeholder='Team Id' /></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for='college_name' class='txt_reg'>College  Name</label></td>
                            <td><input Required type='text' autocomplete='off' name='collegename' id='collegename'  value='".$row['name_college']."' class='txt_field' placeholder='College NAME' /></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for='course_name' class='txt_reg'>Course and Semester</label></td>
                            <td><input Required type='text' autocomplete='off' name='coursename' id='coursename' class='txt_field' placeholder='course'/></td>
                            <td>&nbsp;</td>
                        </tr>
                       <tr>
                            <td><label for='course_name' class='txt_reg'> Blood Group </label></td>
                            <td><input Required type='text' autocomplete='off' name='blood' id='blood' class='txt_field' placeholder='Blood Group'/></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type='submit' name='register' id='register' value='Register' class='btn wobble-horizontal' /></td>
                        </tr>
                    </table>
                </form>
            </div>


    </div>";



    } 

?>

    
<!--
<?php include 'navigation.php'; ?> -->

</body>
</html>
