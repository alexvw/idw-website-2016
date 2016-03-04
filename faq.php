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
			<div class="col-lg-12">				
				<article>
					<div class="entry-content">
						<h2><img src="/img/question.png" />&nbsp;&nbsp;ID DataWeb Attribute Exchange Network (AXN)</h2>
						<h3>Frequently Asked Questions:</h3>
						<br>
						<h3>How is the AXN deployed?</h3>

						<p>AXN is deployed as a managed service in the Amazon private cloud in multiple physical locations.</p>

						<h3>Does the AXN stop tracking and man-in-the-middle attacks?</h3>

						<p>Yes, the AXN intercepts the user session and initiates a new session which mitigates these risks.</p>

						<h3>What is involved in connecting to the AXN and invoking service?</h3>

						<p>After contract signature, the provisioning process for a Relying party takes less than a hour.  
						As an identity or attribute provider, there are a few configuration parameters and APIs</p>

						<h3>Who is part of AXN network?</h3>

						<p>Identity Providers, Attribute Providers, and Relying Party customers</p>

						<h3>What identity interfaces does the AXN support?</h3>

						<p>AXN supports SAML, OAuth, ADFS, and Open ID Connect</p>

						<h3>What attribute interfaces does the AXN support?</h3>

						<p>SOAP and REST</p>

						<h3>What are the primary use cases of the AXN?</h3>

						<p>Single signon, user preference management, attribute verification, identity proofing, 
						attribute based access control, trust framework-supply chain federation.</p>

						<h3>Will ID/DataWeb consider additional attribute or identity providers as part of the AXN network?</h3>

						<p>Yes,  ID/DataWeb provides a marketplace of identity and attribute providers and will 
						continue to add more based on customer requirements. </p>
						<br><br><br>

					</div>
				</article>
			</div>
		</div>
	</div>
    <!-- /.container -->
   
	<!-- foot -->
    <?php include("footer.php"); ?>

</body>

</html>
