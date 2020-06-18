<article class="registrationform">
	<h2>Registration form</h2>
	<p>We are ready to take registration only for those customers who are located in Pune India. Please fill in the below given registration form before 27th Jan 2018</p>

	<form class="registration form-horizontal" action="#">

	<fieldset id="personalinfo">
		<legend>Personal Info</legend>

			<section class="row">
				<label class="col col-lg-4 control-label" for="myname">Name</label>
				<div class="controls">
					<input class="col col-lg-8" type="text" name="myname" id="myname" autofocus placeholder="Last, First" required>	
				</div><!-- controls -->
		</section><!-- row -->

		<section class="row">
			<label class="col col-lg-4 control-label" for="companyname">Company Name</label>
			<div class="controls">
			<input class="col col-lg-8" type="text" name="companyname" id="companyname" >
			</div><!-- controls -->
		</section><!-- row -->

		<section class="row">
			<label class="col col-lg-4 control-label" for="myname">Email</label>
			<div class="controls">
			<input type="text" name="email" id="myemail" class="col col-lg-8" required autocomplete="off" />
			</div><!-- controls -->
		</section><!-- row -->

	</fieldset><!-- Personal info -->

	<fieldset class="otherinfo">
		<legend>Other Info</legend>
			
			<section class="row">
				<label class="col col-lg-4 control-label">Request Type</label>
					<div class="control col col-lg-8">
					
						<label class="radio">
							<input type="radio" name="requesttype" value="question" /> Question 
						</label>
						
						<label class="radio">
							<input type="radio" name="requesttype" value="comment" /> Comment
						</label><!-- radio -->
					
					</div><!-- control -->
			</section><!-- row -->

			<section class="row">
				<label class="col col-lg-4 control-label">Subscribe</label>
				<div class="controls col col-lg-8">
				<label class="checkbox">
					<input type="checkbox" id="subscribe" name="subscribe" CHECKED value="yes" />
					Would you like to subscribe to our e-mail list?
				</label>
				</div><!-- controls -->
			</section><!-- row -->
		
			<section class="row">
		  		<label class="col col-lg-4 control-label" for="reference">How did you hear about the Roux Academy Conference?</label>
					<div class="controls col col-lg-8">
						<select   name="reference" id="reference">
							<option>Choose...</option>
							<option value="friend">A friend</option>
							<option value="facebook">Facebook</option>
							<option value="twitter">Twitter</option>
						</select>
					</div><!-- controls -->
				</section><!-- row -->

	  </fieldset>
	  <button class="btn" type="submit">Submit</button>
	</form>
</article>

<?php
$link = mysqli_connect("127.0.0.1", "root", "Trimtron@123", "testdb");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>
