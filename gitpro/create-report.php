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
    <script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'userdata', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
</head>


  <body>
<a href="logout.php"> Logout </a>
    
   <div class="userdata">
        <h1 class="detailheader" ><img  src="img/logo.png">SCS & IT,DAVV</h1> 
                   
				<?php 

				// check to be sure at least one option was selected
				$foo = $_POST['data'];
				if (count($foo) > 0) {
				// loop through the array
				for ($i=0;$i<count($foo);$i++) {
				 
				// do something - this can be a SQL query,
				// echoing data to the browser, or whatever
				echo "$foo[$i] <br><br>";

				} // end "for" loop
				 
				}
			?>


          
</div>
 <input class="printrecord" type="button" value="Print " onclick="PrintElem('.userdata')" />


<?php include 'navigation.php'; ?>

</body>

