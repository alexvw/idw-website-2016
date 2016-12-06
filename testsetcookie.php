<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include("head.php"); ?>

<body>
</body>

<script type="text/javascript">
var sendData = {
		name:"test name",
		email:"alex.vander.woude@gmail.com",
		cookiename:"IDWIsRegistered"
		}
	$.ajax({
		  type: "POST",
		  url: "/bin/setcookie.php",
		  data: sendData,
		  success: alert,
		  dataType: "json"
		});

</script>


