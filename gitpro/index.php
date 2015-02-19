
<head>
    
    <title>HOME</title>
   
    <link rel="stylesheet" href="css/hover.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="css/stylo.css"> 
    <link rel="stylesheet" href="css/style.css"> 
    <script src="js/modernizr.js"></script>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/main.js"></script>
    <script src="curtain.js"></script>
    <script src="js/countdown.js"></script>
<!--script>
    $(function(){
       $('.curtains').curtain({
           scrollSpeed: 300,
           controls: '.menu',
           curtainLinks: '.curtain-links',
           nextSlide: function(){
            console.log("ok");
           }
       });
    });
    </script> -->
      <script>
  
    $(document).ready(function(){
      $("#countdown").countdown({
        date: "20 December 2014 12:00:00",
        format: "on"
      },
      
      function() {
        // callback function
      });
    });
  
        
       
  </script>
</head>
<body>
<div class="artview" ><?php include 'header.php'  ?>
<h1 class="title" >National Youth Festival 2015, Indore</h1>
<div class="timer-area">
    
    
    
               
    <ul id="countdown">
      <li>
        <span class="days">00</span>
        <p class="timeRefDays">days</p>
      </li>
      <li>
        <span class="hours">00</span>
        <p class="timeRefHours">hours</p>
      </li>
      <li>
        <span class="minutes">00</span>
        <p class="timeRefMinutes">minutes</p>
      </li>
      <li>
        <span class="seconds">00</span>
        <p class="timeRefSeconds">seconds</p>
      </li>
    </ul>
  

  <h1 class="heading3">Registration link for participation will start on 20th december</h1>   
  </div> <!-- end timer-area -->



</div>
<div class="committe">
<br><span></span><br><a  href="pdf/committee.pdf">Committee members</a>
<h3 >Dr. Rajiv Dixit (DSW) : <br> 9827346398 <br><br> Dr. Sanjay Tanwani (HEAD SCSIT) :<br> 9826623640<br><br> Dr. Rajesh Sharma(School Of Pharmacy) :<br>9425478418<br> </h3>
</div>
<div class="guideline">
<a href="pdf/guidelines.pdf">Guidelines for Participation</a> 
<h3 >For technical issues: <br><br> Mr. Mohit Verma  :<br>9039634116 <br><br> Mr. Chetan Awasthi : <br>9424500302 <br></h3>
</div>

</body>



