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

						<h4>ID Dataweb has integrated leading identity providers and attribute partners
						into the ecosystem.  Our network continues to grow.</h4>

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

				<form name="sentMessage" id="joinForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Company Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Company Phone:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Company Email:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>DUNS Number:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Address:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>City:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Postal Code:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Primary Contact:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Primary Phone Number:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Primary Email:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="checkbox">&nbsp;<label>Attribute Provider</label>
                            <input type="checkbox">&nbsp;<label>Identity Provider</label>
                            <input type="checkbox">&nbsp;<label>Both</label>
                        </div>
                    </div>
					
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Description of Business:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
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
   
	<!-- foot -->
    <?php include("footer.php"); ?>

</body>

</html>
