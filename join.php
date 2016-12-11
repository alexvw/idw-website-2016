<!DOCTYPE html>
<html lang="en">

	<!-- Head -->
    <?php include("head.php"); ?>

<body>

    <!-- Navigation -->
    <?php include("nav.php"); ?>
	
	
	<!-- Header Carousel -->
    <header id="leaderCarousel" class="carousel slide">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('/img/join.jpg');"></div>
                <div class="carousel-caption carousel-caption-detail dark">
                    
					<br><br><br>
					
                </div>
            </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12"><br>
					<br>
						<h2>Join our Attribute Exchange Network</h2>

						<h4>We have integrated leading identity providers and attribute partners into our 
						cloud broker service.  Our partner ecosystem continues to grow while supporting 
						clients worldwide.  Join our network and help us close security gaps within and between enterprises.</h4>

<!--

FIELDS:
Company Name                 
Company Phone                      
D-U-N-S Number
Address                                
Country                                     
Company E-Mail
City                                        
Postal Code
Primary Contact                
Phone Number                        
Primary Email Address

Identity Provider              
Attribute Provider                  
Both


Description of business:
(500 characters)			
-->

				<form name="sentMessage" id="joinForm">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Company Name:</label>
                            <input type="text" class="form-control" id="companyname" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Company Phone:</label>
                            <input type="text" class="form-control" id="companyphone" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Company Email:</label>
                            <input type="text" class="form-control" id="companyemail" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>DUNS Number:</label>
                            <input type="text" class="form-control" id="duns" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Address:</label>
                            <input type="text" class="form-control" id="address" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>City:</label>
                            <input type="text" class="form-control" id="city" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Postal Code:</label>
                            <input type="text" class="form-control" id="postalcode" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Primary Contact:</label>
                            <input type="text" class="form-control" id="primarycontact" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Primary Phone Number:</label>
                            <input type="text" class="form-control" id="primaryphone" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Primary Email:</label>
                            <input type="text" class="form-control" id="primaryemail" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					
                    <div class="control-group form-group">
                        <div class="controls">
                            <input id="isAP" type="checkbox">&nbsp;<label>Attribute Provider</label>
                            <input id="isIDP" type="checkbox">&nbsp;<label>Identity Provider</label>
                        </div>
                    </div>
					
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Description of Business:</label>
                            <textarea rows="10" cols="100" class="form-control" id="description" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" id="contactForm-submit" cclass="btn btn-primary">Send Message</button>
                </form><br><br>		

            </div>
        </div>
		
		<!-- Content Row -->
		<div class="">
			<br><br><br>
			<br><br><br>
			
			

		
		</div>
    </div>
    <!-- /.container -->
    <script type="text/javascript">
    // Attach a submit handler to the form
		$( "#joinForm" ).submit(function( event ) {
			// Stop form from submitting normally

				$('#contactForm-submit').attr('disabled','disabled');
				
			event.preventDefault();
			// Get some values from elements on the page:

			var successfulSend = function(data){
				//if data success
				if (data.status == "success"){
					//add cookie
					alert("Thank you for your application! A representative will contact you shortly.");
					window.location.href="/";
					}
			}
			var messageData = {
					type:"Join our Network Request",
					companyname:$('#companyname').val(),
					companyphone:$('#companyphone').val(),
					companyemail:$('#companyemail').val(),
					duns:$('#duns').val(),
					address:$('#address').val(),
					city:$('#city').val(),
					postalcode:$('#postalcode').val(),
					primarycontact:$('#primarycontact').val(),
					primaryphone:$('#primaryphone').val(),
					isAP:$('#isAP').val(),
					isIDP:$('#isIDP').val(),
					description:$('#description').val()
			}
			var sendData = {
					message:JSON.stringify(messageData),
					email:"sales@iddataweb.com",
					//email:"sales@iddataweb.com",
					subject:"New Join Our Network Request: " + messageData.companyname
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
   
	<!-- foot -->
    <?php include("footer.php"); ?>

</body>

</html>
