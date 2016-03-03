<!DOCTYPE html>
<html lang="en">
	<!-- Head -->
    <?php include("../head.php"); ?>
	
	
<body>

    <!-- Navigation -->
    <?php include("../nav.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Resources
                </h1>
            </div>
        </div>
        <!-- /.row -->
		

<?php

/*

PAGE 1
user comes to resource list
user clicks resource

RESOURCE PAGE
page checks for cookie
no cookie found
shows contact info form
user fills in form, ajax data to register php page

PAGE 3
php page gets data, sends email, sets cookie, responds with success

RESOURCE PAGE
page gets success, reloads. 
this time, cookie is set
ajax to notification php page
shows download link

*/

//DEBUG, remove later
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//on resource page itself:
//check for cookie
//if not present, show form


$cookie_name = "hasShared";
if(!isset($_COOKIE[$cookie_name])) {
	//if not present, show contact form
    //echo "Cookie named '" . $cookie_name . "' is not set!";
	?>
	
	<!-- Content Row -->
		<div id="resource-form">
			<h3>Download a Free Resource</h3>
			<p>To download this Free resource, please provide some information about yourself.</p>
			<p>This information will never be shared with a third party.</p>

			</h3>
			<form id="contact-submit" action="/bin/register.php">
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

			var $form = $( this ),
				form_name = $form.find( "input[name='name']" ).val(),
				form_org = $form.find( "input[name='org']" ).val(),
				form_title = $form.find( "input[name='title']" ).val(),
				form_email = $form.find( "input[name='email']" ).val(),
				form_phone = $form.find( "input[name='phone']" ).val(),
				url = $form.attr( "action" );

			// Send the data using post
			var register = $.post( url, { name: form_name, organization:form_org,
				title:form_title, email:form_email, phone:form_phone  } );

			register.done(function( data ) {
				window.location.reload();
			});
			register.fail(function( data ) {
				alert("Sorry about that, looks like there was an issue with your contact information. Try again, or contact support@iddataweb.com for assistance.");
			});
		});

		</script>
	
	<?php
} else {
	//if is present
	//send mail with name email documentName
	//TODO 
	
	//show their page content
    //echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Hello " . urldecode($_COOKIE[$cookie_name]);
	?>
	<!-- Content Row -->
		<div id="resource-list">
			<br><br><br>
			<!-- Person One -->
        <div class="row">
            <div class="col-md-4">
                    <img class="img-responsive img-hover" src="http://placehold.it/400x500" alt=""><br><br><br>
                
            </div>
            <div class="col-md-8">
                <h3>Document Title</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
				Laudantium veniam exercitationem expedita laborum at voluptate. 
				Labore, voluptates totam at aut nemo deserunt rem magni pariatur 
				quos perspiciatis atque eveniet unde. </p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
				Laudantium veniam exercitationem expedita laborum at voluptate. 
				Labore, voluptates totam at aut nemo deserunt rem magni pariatur 
				quos perspiciatis atque eveniet unde. </p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
				Laudantium veniam exercitationem expedita laborum at voluptate. 
				Labore, voluptates totam at aut nemo deserunt rem magni pariatur 
				quos perspiciatis atque eveniet unde. </p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
				Laudantium veniam exercitationem expedita laborum at voluptate. 
				Labore, voluptates totam at aut nemo deserunt rem magni pariatur 
				quos perspiciatis atque eveniet unde. </p>
				<br>
				<button id="download-link" class="btn btn-success">Download PDF</button>
                
            </div>
        </div>
		</div>
		
		<script>
		// Attach a submit handler to the form
		$( "#download-link" ).click(function( event ) {
			// Stop form from submitting normally

			event.preventDefault();
			// Get some values from elements on the page:

			var url = "/bin/notify.php";
			var notify_message = "<?php echo "Download from: " . urldecode($_COOKIE[$cookie_name]) . " For Document.pdf"; ?>";
			var notify_email = "alex.vander.woude@iddataweb.com";
			
			// Send the data using post
			var notify = $.post( url, { email:notify_email, message:notify_message  } );

			notify.done(function( data ) {
				//window.location.reload();
				console.log("successful notify");
			});
			notify.fail(function( data ) {
				console.log("Something went wrong with notify...");//alert("Sorry about that, looks like there was an issue with your contact information. Try again, or contact support@iddataweb.com for assistance.");
			});
		});
		</script>
		<?php
}
?>

		
    </div>
    <!-- /.container -->
   
	<!-- foot -->
    <?php include("../footer.php"); ?>

</body>

</html>

