	<footer>
		<!-- footer contant us  starts -->
		<div id="home_contactus" class="sectionpadding">
		<div class="container">
			<center> 
				<h1 class="sectionTitle"> Contact Us </h1>
				</center>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						 <div id="contactinfo">
			                <p class="contactInfoBox"> 
			                  <i class="fa fa-map-marker facustom" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; Address : Butwal 15, belbas 
			                </p>
			                <p class="contactInfoBox">
			                  <i class="fa fa-phone facustom" aria-hidden="true"></i>&nbsp;&nbsp; Phone Number : 64553225656 <br/>
			                </p>
			                <p class="contactInfoBox">
			                  <i class="fa fa-mobile facustom" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp; Mobile Number : 44321564  <br/>
			                </p>
			                <p class="contactInfoBox">
			                 <i class="fa fa-envelope facustom" aria-hidden="true"></i> &nbsp;doctorapp@gmail.com<br/>
			                </p>

			              </div>
					</div>
					

					<div class="col-md-8 col-sm-12">
						<div id="mail_us">

							<form role="form">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										  <label for="name">Name:</label>
										  <input type="text" class="form-control" id="name" name="name" required="">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
										  <label for="email">Email:</label>
										  <input type="email" class="form-control" id="email" required="">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
										    <label for="email">Message:</label>
										    <textarea id="message" name="message" rows="5" style="width: 100%;"></textarea>
										</div>
									</div>
								</div>
							  
							 
							  
							  <div class="form-group pull-right">
							  	<button type="submit" class="btn btn-primary">Submit</button>
							  </div>
							</form>
						</div>
						
					</div>
				</div>
			</div>
		</div>	
		<!-- footer contant us   ends -->

		<!-- footer copyright starts -->
		<div id="footer_copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div id="copyright_contents" class=" pull-left">
							<p> Copyright &copy; All reserved - 2017</p>
						</div>
					</div>

					<div class="col-md-6 ">
						<div id="copyright_contents" class="pull-right">
							<p> Developed by <a href="" target="_blank"> AIM Group</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- footer copyright ends -->
	</footer>

</div>

<!-- signup Modal starts -->
<div id="signupModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">
        	<center> <h4 class="modal-title"> Sign up</h4></center>
        </h4>
      </div>
      <div class="modal-body">
      		<div id="signup_modal_contents">
      				<form  method="post"> <br>
		 				<div class="form-group">
		 				  <label for="email">Email</label>
		 				  <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required="">
		 				</div>
		 				<div class="form-group">
		 				  <label for="username">Username</label>
		 				  <input type="text" class="form-control" name="username" id="username" required="" placeholder="Enter Username">
		 				</div>
		 				<div class="form-group">
		 				  <label for="password">Password:</label>
		 				  <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required="">
		 				</div>
		 				<div class="form-group">
		 				  <button type="submit" class="btn btn-primary pull-right"  id="signupSubmitBtn" >Sign up</button>
		 				</div>
		 				<div class="clearfix"></div>
		 			</form>

      		</div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<!-- Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">
        	<center> <h4 class="modal-title"> Login</h4></center>
        </h4>
      </div>
      <div class="modal-body">
      		<div id="login_modal_contents">
      					<form  method="post"> <br>
    		 			  <div class="form-group">
    		 			    <label for="username">Username</label>
    		 			    <input type="text" class="form-control" name="username" id="username" required="" placeholder="Enter Username">
    		 			  </div>
    		 			  <div class="form-group">
    		 			    <label for="password">Password:</label>
    		 			    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required="">
    		 			  </div>
    		 			  <div class="form-group">
    		 			    <label> Forget Password? <a href="forgetpassword.php" > Click here </a> </label>
    		 			  </div>
    		 			  <div class="form-group">
    		 			    <button type="submit"  class="btn btn-primary pull-right"  id="loginSubmitBtn" >Log in</button>
    		 			  </div>
    		 			  <div class="clearfix"></div>
    		 			</form>	
      		</div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->


<script>
       $(document).ready(function(){
           $(".navlink").on('click', function(event) {
	           event.preventDefault();
	           var hash = this.hash;
	           $('html, body').animate({
	           		scrollTop: $(hash).offset().top
	           }, 1600, function(){
	           		window.location.hash = hash;
	           });
           });
         })
   </script>
</body>
</html>