<!DOCTYPE html>
<html lang="en">

	<!-- Head -->
    <?php include("head.php"); ?>

<body>

    <!-- Navigation -->
    <?php include("nav.php"); ?>

    
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact ID/DataWeb
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-6">
				<div class="row">
					<div class="col-sm-12">
						<!-- Embedded Google Map -->
					<iframe id="office-map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" height="400" src="https://maps.google.com/maps?hl=en&q=8330 boone blcd&ie=UTF8&t=satellite&z=15&iwloc=B&output=embed"></iframe>
					<br><hr>
					<h3>Contact Details</h3>
                <p>
                    8330 Boone Blvd 
					<br>Suite 400<br>
					Vienna, Virginia<br>
                </p><br>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Phone</abbr>: (123) 456-7890</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">Email</abbr>: <a href="mailto:name@example.com">name@example.com</a>
                </p>
                <!--<ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>-->
				<!-- Currently just a mailto, but at some point should be a chat or managed ticket system -->
				<h4>Looking for Technical Support with an IDW product?<br>
				<a href="mailto:support@iddataweb.com">Contact support@iddataweb.com</a>
				</h4>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h3>Interested in how ID/DataWeb can solve your problems? Send us a message and we will get in contact shortly.</h3>
                <form name="sentMessage" id="contactForm" novalidate>
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
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Company:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
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
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form><br><br>
			</div>
        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->

   
	<!-- foot -->
    <?php include("footer.php"); ?>

</body>

</html>