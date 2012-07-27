<? include("header.php"); ?>
    
    <div class="inner-hero">
    	
    	<div class="wrapper">
			<img src="img/signup.jpg" alt="signup" width="512" height="169" style="left:170px; top: 0px;" />
			
			<div class="heading-wrapper" style="left:550px; top: 50px;" >
				<h1>Register</h1>
				<h2>The fastest way to your dream job</h2>
			</div>
    	</div>
    </div>
   
   	<div id="main" class="inner">
   	
   		<div class="left">
   			<span class="title">Register</span>
   			<p>Please submit your details below. You will receive an email with your password to login. Please fill in all the fields below to make sure companies can find your details easily!</p>	
   		
	   		<form class="signup">
		   		<fieldset>
		   			<legend>Personal information</legend>
		   			<span>
		   				<label>Name</label>
		   				<input type="text" />
					</span>
		   			<span>
		   				<label>Email</label>
		   				<input type="text" />
					</span>
					<span>
		   				<label>Nationality</label>
		   				<select><option>Select your nationality</option></select>
		   			</span>
		   			<span>
		   				<label>Availability</label>
		   				<input type="text" />
		   			</span>
		   			<span>
		   				<label>Languages spoken</label>
		   				<input type="text" />
		   			</span>
		   			<span>
		   				<label>Languages written</label>
		   				<input type="text" />
		   			</span>
		   		</fieldset>
	   		
		   		<fieldset>
		   			<legend>Academic background</legend>
		   			<span>
		   				<textarea></textarea>
					</span>
		   		</fieldset>
	   		
		   		<fieldset>
		   			<legend>Computer literacy</legend>
		   			<span>
		   				<textarea></textarea>
					</span>
		   		</fieldset>

		   		<fieldset>
		   			<legend>Employment history</legend>
		   			<span>
		   				<textarea></textarea>
					</span>
		   		</fieldset>
	   		
		   		<fieldset>
		   			<legend>Renumeration</legend>
		   			<span>
		   				<label>Current</label>
		   				<input type="text" />
					</span>
		   			<span>
		   				<label>Expected</label>
		   				<input type="text" />
					</span>
		   		</fieldset>

		   		<fieldset>
		   			<legend>Set your password</legend>
		   			<span>
		   				<label>Password</label>
		   				<input type="password" />
					</span>
		   			<span>
		   				<label>Confirm password</label>
		   				<input type="password" />
					</span>
		   		</fieldset>
				
				<input type="submit" value="Submit" class="btn blue" />
	   		</form>
   		</div> <!-- end of left -->
   		
   		
   		<div class="right">
	   		<div class="job-search-box">
	   			<h2>Looking for a job?</h2>
	   			<form method="" action="job-results.php">
	   				<input type="text" id="role" name="role" placeholder="Type in your role, e.g. sales" />
	   				<select name="industry" id="industry">
	   					<option value="0">In any industry</option>
	   					<option>Finance</option>
	   					<option>Finance</option>
	   					<option>Finance</option>
	   					<option>Finance</option>
	   					<option>Finance</option>
	   				</select>
	   				<select name="location" id="location">
	   					<option value="0">In any location</option>
	   					<option>Hong Kong</option>
	   					<option>Hong Kong</option>
	   					<option>Hong Kong</option>
	   				</select>
	   				<select name="salary" id="salary">
	   					<option value="0">For any salary</option>
	   					<option></option>
	   					<option></option>
	   					<option></option>
	   				</select>
	   				<select name="contract_type" id="contract_type">
	   					<option value="0">Full time</option>
	   					<option>Part time</option>
	   				</select>
	   				
	   				<input type="submit" value="Find job" class="btn blue" />
					<a class="btn grey">Quick submit CV</a>
	   				
	   			
	   			</form>
	   		</div>
	   		
	   		<div class="box image">
	   			<img src="img/salary-guides.jpg" alt="salary-guides" width="285" height="148" />
	   			<div class="expand"></div>
	   		</div>
	   	</div><!-- end of right -->
	   	<div class="clearfix"></div>
   </div><!-- end of main -->
   
   

   
<? include("footer.php"); ?>