<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suggest your availability | Aavega Interactive</title>

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
						<h2>Suggest your availability</h2>
					</div><br>
					 <form role="form" id="feedbackForm" class="text-center" action="confirm-appointment.php" method="POST">
				        	<select name="dateinfo" id="dateinfo" class="form-inline form-control input-group" style="width:210px;margin-left:15px;">
				               	<option value="Monday, March 2, 2015" class=""  selected="selected">Monday, March 2, 2015</option>
				                <option value="Tuesday, March 3, 2015" class="" >Tuesday, March 3, 2015</option>
				                <option value="Wednesday, March 4, 2015" class="">Wednesday, March 4, 2015</option>
				                <option value="Thursday, March 5, 2015" class="">Thursday, March 5, 2015</option>
				                <option value="Friday, March 6, 2015" class="">Friday, March 6, 2015</option>
		                    </select>
		                    <select name="timeinfo" id="timeinfo" class="form-inline form-control " style="width:130px; margin-top:-56px;">
			                    <option value="10 am" class="" selected="selected">10:00am</option>
			                    <option value="10:30 am" class="">10:30am</option>
			                    <option value="11 am" class="">11:00am</option>
			                    <option value="11:30 am" class="">11:30am</option>
			                    <option value="12 pm" class="">12:00pm</option>
			                    <option value="12:30 pm" class="">12:30pm</option>
			                    <option value="1 pm" class="">1:00pm</option>
			                    <option value="1:30 pm" class="">1:30pm</option>
			                    <option value="2 pm" class="">2:00pm</option>
			                    <option value="2:30 pm" class="">2:30pm</option>
			                    <option value="3 pm" class="">3:00pm</option>
			                    <option value="3:30 pm" class="">3:30pm</option>
			                    <option value="4 pm" class="">4:00pm</option>
			                    <option value="4:30 pm" class="">4:30pm</option>
			                </select> <br>
			                
					      	<br><div class="text-center col-12 col-lg-12">
							   
			      					<div class="form-group">
										<!-- <label for="name">Name</label> -->

										<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $_GET['n'];?>">
										<span class="help-block" style="display: none;">Please enter your name.</span>
					      			</div><br>
					      			<div class="form-group">
										<!-- <label for="name">Name</label> -->
										<input type="text" class="form-control" id="comapnay" name="company" placeholder="Company Name" value="<?php echo $_GET['c'];?>">
										<span class="help-block" style="display: none;">Please enter your company name.</span>
					      			</div><br>
			      					<div class="form-group">
										<!-- <label for="email">E-Mail</label> -->
										<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="<?php echo $_GET['e'];?>">
										<span class="help-block" style="display: none;">Please enter a valid e-mail address.</span>
					      			</div><br>
					      			<div class="form-group">
										<!-- <label for="email">E-Mail</label> -->
										<input type="contact" class="form-control" id="contact" name="Contact" placeholder="Contact No.">
										<span class="help-block" style="display: none;">Please enter a valid contact number.</span>
						      		</div><br>
			      				    <div class="form-group">
										<!--<label for="message">Comments</label> -->
										<textarea rows="6" cols="100" class="form-control" id="message" name="message" placeholder="Message"></textarea>
										<span class="help-block" style="display: none;">Please enter a message.</span>
					      		    </div> 
					      			<button type="submit" id="feedbackSubmit" class="btn btn-info btn-lg center-block " style=" margin-top: 10px;float: none;"> Book My Meeting</button>
					      		</form>	
					      		<div id="footer" class="container">
								    <nav class="navbar navbar-default navbar-fixed-bottom" style="background-color:#E0E4CC">
								        <div class="navbar-inner navbar-content-center" >
								            <br><p class="text-muted credit">&copy; 2015, Aavega Interactive,a @<a class="" target="_blank" 
								            href="http://suntechnologies.com/">Sun Technologies</a> Company, <sup> &reg;</sup> All Rights Reserved</p>
								        </div>
								    </nav>
								</div>
					   		</div>
						</div>
					</div>
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