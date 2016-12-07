<?php if(
		empty($_GET['redir']) 
	)
   {
   	$result_json = array('status' => 'fail', 'reason' => 'insufficient parameters');
   	echo json_encode($result_json);
	return false;
   }
   
   $redir = $_GET['redir'];

   $base_url = "https://s3.amazonaws.com/docs.iddw/";
   
   ?>

<!DOCTYPE html>
<html lang="en">

	<!-- Head -->
    <?php include("head.php"); ?>

<body>

    <!-- Navigation -->
    <?php include("nav.php"); ?>
	
    <!-- Page Content -->
    <div class="container">
		<div class="row"><!-- second row -->
			<div class="col col-lg-10 col-sm-12">
				<div id="resource-form">
			<h3>Download - <?php echo $redir ?></h3>
			<p>To download this free resource, please provide some information about yourself.</p>
			<p>This information will never be shared with a third party.</p>
			<form id="contact-submit">
			<br><br><br>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="name">Full Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="org">Organization:</label>
                            <input type="text" class="form-control" id="org" name="org" required data-validation-required-message="Please enter your organization.">
                        </div>
                        <div class="controls">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" required data-validation-required-message="Please enter your title.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="email">Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                        <div class="controls">
                            <label for="phone">Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
					<div id="status"></div>
                    <button id="submit-data" class="btn btn-primary">Submit and continue to your download</button>
			</form><br>
		</div><br>
		<script>
			// Attach a submit handler to the form
			$( "#contact-submit" ).submit(function( event ) {
				// Stop form from submitting normally
	
				event.preventDefault();
				// Get some values from elements on the page:
				var userEmail = $('#email').val();
				var userName = $('#name').val();
				var successfulCookie = function(data){
					if (data.status == "success"){
						window.location.href = "<?php echo $base_url.$redir; ?>"
						}
					}
				var successfulSend = function(data){
					//if data success
					if (data.status == "success"){
						//add cookie
						var sendData = {
								name:userName,
								email:userEmail,
								cookiename:"IDWIsRegistered"
								}
							$.ajax({
								  type: "POST",
								  url: "/bin/setcookie.php",
								  data: sendData,
								  success: successfulCookie,
								  dataType: "json"
								});
							//if cookie success
								//redirect to resource
						}
				}
				
				var sendData = {
						message:"email: " + userEmail + "<?php echo $redir; ?>",
						email:"sales@iddataweb.com",
						subject:"Thank you for downloading from ID DataWeb"
						}
					$.ajax({
						  type: "POST",
						  url: "/bin/notify.php",
						  data: sendData,
						  success: successfulSend,
						  dataType: "json"
						});
			});
	
			</script>
			</div>
		</div>
	</div>
    <!-- /.container -->
   
	<!-- foot -->
    <?php include("footer.php"); ?>

</body>

</html>
