<?php
session_start();

if(!isset ($_SESSION['isLoggedin']) && $_SESSION['isLoggedin'] !== TRUE){
    $_SESSION['message'] = 'Please login first.';
    header('location:index.php');
}else{
    include_once 'connect.php';
     }

     ?>


<head>

  

  <title>NYF</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="base.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css/hover.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css/reset.css"> 
    <link rel="stylesheet" href="css/stylo.css"> 
    <script src="js/modernizr.js"></script>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/main.js"></script>
</head>


  <body>
<a href="logout.php"> Logout </a>
    
   <div class="userdata">
                            
                
                   <?php
                        // Make a MySQL Connection
                        
                        // Get all the data from the "årgang" table
                        $id=mysql_real_escape_string($_GET['id']);
                        $result = mysql_query("SELECT * FROM part where `regid`='$id'");

    

    // keeps getting the next row until there are no more to get
                     while($row = mysql_fetch_array( $result )) {
        
                         // Print out the contents of each row into a table
        
                         echo "<FORM action='create-report.php' method='post' onsubmit='return'  checkForm();><TABLE>
                        <TR>
                         
                         <TD>Registered ID :</TD>
                         <TD>" .
                          $row['regid'] .  "</TD>
                          <TD><input name='data[]' Value='Registered ID  :  ".
                          $row['regid'] ."'' type='checkbox'></TD>
                        
                          </TR>
                          <TR>
                         
                         <TD>University Name :</TD>
                         <TD>" .
                          $row['uni_name'] .  "</TD>
                          <TD><input name='data[]' Value='University Name  :  ".
                          $row['uni_name'] ."'' type='checkbox'></TD>
                        
                          </TR>

                         <TR>
                         
                         <TD>Full Name :</TD>
                         <TD>" .
                         $row['full_name'], "</TD>
                         <TD><input name='data[]' Value='Full Name  :  ".
                          $row['full_name'] ."' type='checkbox'></TD>
                        
                         </TR>
                         <TR>
                         
                         <TD>D O B :</TD>
                         <TD>" .
                          $row['dob'] .  "</TD>
                          <TD><input name='data[]' Value='D O B  :  ".
                          $row['dob'] ."'' type='checkbox'></TD>
                        
                          </TR>
                       
                         <TR>
                        
                         <TD>Mobile Number :</TD>
                         <TD>" .$row['mobile_num']. "</TD>
                         <TD><input name='data[]' Value='Mobile  Number :  ".
                          $row['mobile_num'] ."' type='checkbox'>
                         </TD>
                         
                         </TR>
                         <TD>Email ID :</TD>
                         <TD>" .
                         $row['email_id'], "</TD>
                         <TD><input name='data[]' Value='Email ID  :  ".
                          $row['email_id'] ."'' type='checkbox'></TD>
                        
                         </TR>
                         
                          <TR>
                         
                          <TD>College :</TD>
                          <TD>".
                         $row['college'], "</TD>
                         <TD><input name='data[]' Value='College Name  :  ".
                          $row['college'] ."'' type='checkbox'></TD>
                          
                         </TR>
                         <TR>
                         
                          <TD>Team ID :</TD>
                          <TD>".
                         $row['team_id'], "</TD>
                         <TD><input name='data[]' Value='Team ID  :  ".
                          $row['team_id'] ."'' type='checkbox'></TD>
                          
                         </TR>
                         <TR>
                         
                          <TD>Course  :</TD>
                          <TD>".
                         $row['course'], "</TD>
                         <TD><input name='data[]' Value='Course  :  ".
                          $row['course'] ."'' type='checkbox'></TD>
                          
                         </TR>
                         <TR>
                         
                          <TD>Blood Group  :</TD>
                          <TD>".
                         $row['bloodgroup'], "</TD>
                         <TD><input name='data[]' Value='Blood Group  :  ".
                          $row['bloodgroup'] ."'' type='checkbox'></TD>
                          
                         </TR>
                          <TR>
                          
                          
                         
                        
                         <TD><input name='submit' type='submit' Value='print'></TD>
                          
                         </TR>  
                          </TABLE> </FORM>"
                          ; 




    } 

   
?>    
          
</div>
 

<?php include 'navigation.php'; ?>

</body>

