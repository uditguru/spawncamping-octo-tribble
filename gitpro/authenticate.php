

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
                <form class="headerfloat" action="authenticate-user.php?id=" method="post" onsubmit="return  checkForm();">
                    <table cellpadding="5" cellspacing="5">
                        
                        <tr id="pass_error" class="error">
                            <td>&nbsp;</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="name" class="txt_reg">Team Manager's Name</label></td>
                            <td><input Required type="text" autocomplete="off" name="manager" id="name" class="txt_field" placeholder="Team Manager's Name"/></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for="email" class="txt_reg">Team ID</label></td>
                            <td><input Required type="password" autocomplete="off" name="team_id" id="email" autocomplete="off" class="txt_field" placeholder="Team ID"/></td>
                            <td><img src="images/ajax-loader.gif" id="email_img" style="display: none;"/></td>
                        </tr>
                          <td>&nbsp;</td>
                            <td><input type="submit" name="register" id="register" value="GO" class="btn wobble-horizontal" /></td>
                        </tr>
                    </table>
                </form>
            </div>


    </div>

<?php include 'navigation.php'; ?>

</body>
