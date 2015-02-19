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
                            
     
<?php include 'navigation.php'; ?>

</body>

<?php
    // Make a MySQL Connection
    
    // Get all the data from the "årgang" table
    $result = mysql_query("SELECT * FROM part") 
    or die(mysql_error());  

    echo '<table id="hor-zebra" summary="Datapass">
<thead>
    <tr>
        <a ><th scope="col">Mobile</th></a>
        <th scope="col">Name</th>
        <th scope="col">Email</th> 
        <th scope="col">Registered ID</th>
        <th scope="col">College</th> 
       
    </tr>
</thead>
<tbody>';


    // keeps getting the next row until there are no more to get
    while($row = mysql_fetch_array( $result )) {
        
        // Print out the contents of each row into a table
        
        echo "<TR ><TD class='datagrid'>" .
        $row['mobile_num'], "</TD><TD class='datagrid'>" .
        $row['full_name'], "</TD><TD class='datagrid'>" .
        $row['email_id'], "</TD><TD class='datagrid'>" .
        '<a href="show.php?id=' . $row['regid'] .' ">' . $row['regid'] . '</a> ', "</TD><TD class='datagrid'>".
        $row['college'], "</TD></TR>" ; 




    } 

    echo "</tbody></table>";
?>           
   
          
</div>
 
</body>
