<?php

  if($_POST['name']){

  	$name = $_POST['name']; 

  	$company = $_POST['company'] ; 
  	$email = $_POST['email']; 
  	$Contact = $_POST['Contact']; 
  	$message = $_POST['message']; 
  	$dateinfo = $_POST['dateinfo']; 
  	$timeinfo = $_POST['timeinfo']; 

  	$msg 	 = '<html><head></head><body>';
  	$msg  .= "$name <br/> $company <br/>  $email <br/> $Contact <br/> $message <br/> $dateinfo <br/> $timeinfo";
  	$msg 	.=  '</body></html>';
  	$youremail = "lowella@suntechnologies.com,bala@suntechnologies.com,tahiri@suntechnologies.com";
  	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: ' . $youremail . "\r\n";
    $headers .= 'Cc: ' . $youremail . "" . "\r\n";
    mail( $youremail, "GDC Meeting Request", $msg, $headers);

  }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thanks | Aavega Interactive</title>



    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav id="topnav" class="navbar navbar-fixed-top navbar-default " style="background-color:#E0E4CC" role="navigation">
		<div class="container">
	  		<div class="navbar-header">
				<a class="navbar-brand" href="http://suntechnologies.com/gaming/"><img src="images/logo.png" alt="Aavega Interactive" id="logo"></a>
	  		</div>
	  	</div>
	</nav>
	<div class ="jumbotron  vertical-center" >
 		<div class="fullscreen background" style="background-image:url('images/bg.png');"  data-img-height="1164">
			<div class="container"style="width:650px; height:710px;margin-top:40px;">
  				<div class="row col-xs-12 text-center" >
					<div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12 page-header ">
						<h2>Thanks for Booking a Meeting with us </h2>
					</div>
					
				       <?php	echo " $name <br/> $company <br/>  $email <br/> $Contact <br/> $message <br/> $dateinfo - $timeinfo"; ?><br>
              <a href="http://suntechnologies.com/gaming/"><button type="button" class="btn btn-primary btn-lg">Visit our Website</button></a>

						</div>
					</div>
         <!--  <footer class="navbar navbar-fixed-bottom navbar-default" style="background-color:#E0E4CC" >
      <p><br> &copy; 2015, Aavega Interactive,a @<a class="" target="_blank" href="http://suntechnologies.com/"> Sun Technologies</a> Company, <sup> &reg;</sup> All Rights Reserved</p>
    </footer> -->
				</div>

			</div>
		</div>
    
    <script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-51718302-1', 'suntechnologies.com');
    ga('send', 'pageview');

  </script>
	</body>

</html>