

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

    <div class="container ">

     <div class="register-form">
                <form class="headerfloat" action="checkform.php" method="post" onsubmit="return  checkForm();">
                    <table cellpadding="5" cellspacing="5">
                        
                        <tr id="pass_error" class="error">
                            <td>&nbsp;</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="name" class="txt_reg">Name</label></td>
                            <td><input Required type="text" autocomplete="off" name="partname" id="name" class="txt_field" placeholder=" Name"/></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for="email" class="txt_reg">Email</label></td>
                            <td><input Required type="text" autocomplete="off" name="partemail" id="email" autocomplete="off" class="txt_field" placeholder="Email"/></td>
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
