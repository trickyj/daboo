<article class="registrationform">
	<h2>Registration form</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ratione unde consequatur consequuntur corporis sed voluptatum dolore eligendi incidunt dignissimos reiciendis necessitatibus odit quis quos, optio, itaque eaque suscipit. Minus?</p>

	<form action="" class="registration form-horizontal" action="#">
	<fieldset id="personalinfo">
		<legend>Personal Info</legend>
		<section class="row">
			<label class="col col-lg-4" for="myname">Name</label>
			<div class="controls">
			<input type="text" name="myname" id="myname" autofocus placeholder="Last, First" class="col col-lg-8" required>	
			</div><!-- controls -->
		</section><!-- row -->

		<section class="row">
			<label class="col col-lg-4" for="myname">Company</label>
			<div class="controls">
			<input type="text" name="companyname" id="companyname" class="col col-lg-8">
			</div><!-- controls -->
		</section><!-- row -->

		<section class="row">
			<label class="col col-lg-4" for="myname">Email</label>
			<div class="controls">
			<input type="text" name="email" id="myemail" class="col col-lg-8">
			</div><!-- controls -->
		</section><!-- row -->

	</fieldset><!-- Personal info -->

	<fieldset class="otherinfo">
		<legend>Other Info</legend>
			<section class="row">
				<label class="col col-lg-4">Request Type</label>
					<div class="control col col-lg-4">
					
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
