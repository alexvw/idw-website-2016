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
                <div class="fill" style="background-image:url('img/partners.jpg');"></div>
                
            </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Consulting Partners
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <p>  
				We are working with partners to enhance identity security and privacy 
				solutions across industry.  If you are interested in exploring partnership 
				opportunities with us, please complete the information below and we will be in touch shortly.
				</p>
            </div>
        </div>
		
		<br><br>

		<h4>Provide us your information and submit the form below, and we will contact you shortly</h4><br>
			<form name="sentMessage" id="contactForm">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="tel" class="form-control" id="email" required data-validation-required-message="Please enter your email.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Company:</label>
                            <input type="tel" class="form-control" id="company" required data-validation-required-message="Please enter your company information.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" id="contactForm-submit" class="btn btn-primary btn-idw">Submit</button>
                </form><br><br>

        <hr>
    </div>
    <!-- /.container -->
    
    <script type="text/javascript">
    // Attach a submit handler to the form
		$( "#contactForm" ).submit(function( event ) {
			// Stop form from submitting normally
			$('#contactForm-submit').attr('disabled','disabled');
			event.preventDefault();
			// Get some values from elements on the page:

			var successfulSend = function(data){
				//if data success
				if (data.status == "success"){
					//add cookie
					alert("Thank you! A representative will contact you shortly.");
					window.location.href="/";
					}
			}
			var messageData = {
					type:"Contact Request - Contact Us Page",
					name:$('#name').val(),
					phone:$('#phone').val(),
					email:$('#email').val(),
					company:$('#company').val(),
					message:$('#message').val()
			}
			var sendData = {
					message:JSON.stringify(messageData),
					//email:"sales@iddataweb.com",
					email:"alex.vander.woude@gmail.com",
					subject:"New Consulting Request: " + messageData.name
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
