<? require 'includes/db.php'; ?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js <?=$lan?>" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>The Economist - Win a pair of Beats Solo HD headphones!</title>
  <meta name="description" content="Win a pair of Beats Solo HD headphones!">

  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="style/css/0.style.css">
  <link rel="stylesheet" href="style/css/colorbox.css">
  
  <script src="js/libs/modernizr-1.7.min.js"></script>

</head>

<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
    <div class="blue-strip"></div>
    <header>
    	<a href="/" class="logo"><img src="img/logo.jpg" alt="logo" width="218" height="108" /></a>
    	<a href="/" class="btn blue">Download the PAX Kit</a>
    	<div class="clearfix"></div>
    </header>
   
    <div id="container">

  		<div id="main" class="home">
  		
  			<div class="left">
   				<h1>Win a pair of Beats Solo HD headphones!</h1>
   				<p>The Economist recorded 24% growth in readers in the latest PAX survey – the highest among business publications last year.* To find out 
more, enter the quiz and be in the running to win 1 of 20 Beats Solo HD headphones.</p>
		
				<form method="post" action="quiz.php" class="personal">
					
					<fieldset>
						<label for="fullname">Full name *</label>
						<input type="text" id="fullname" name="fullname" class="required" />
					</fieldset>

					<fieldset>
						<label for="fullname">Email *</label>
						<input type="text" id="email" name="email" class="required email" />
					</fieldset>
					
					<fieldset>
						<label for="fullname">Company name *</label>
						<input type="text" id="companyname" name="companyname" class="required" />
					</fieldset>

					<fieldset>
						<label for="fullname">Job title *</label>
						<input type="text" id="job" name="job" class="required" />
					</fieldset>

					<fieldset>
						<label for="fullname">Contact number</label>
						<input type="text" id="contactnumber" name="contactnumber" />
					</fieldset>

					<fieldset>
						<label for="fullname">Company address</label>
						<input type="text" id="companyaddress" name="companyaddress" />
					</fieldset>
					
					<input type="submit" value="Start the quiz" class="btn blue">
					
				</form>
				
				<p class="small">Terms and Conditons Apply, <a class="popterms">click here to view</a></p>
				<p class="smaller">*As measured by PAX Q1 – Q4 2010 – 2011</p>
			</div>
			
			
			<div class="right">
			
				<img src="img/beats.jpg" alt="beats" width="568" height="680" />
			
			</div>
			<div class="clearfix"></div>
	   	</div>
   
    
    </div>
    
    <footer><div class="wrapper">&copy; The Economist 2012 | To find out more about advertising opportunities visit <a href="http://branding.economist.com/">branding.economist.com</a></div></footer>

   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/libs/jquery.validate.js"></script>
  <script src="js/script.js"></script>
  	
  <!-- end scripts-->

</body>
</html>