<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include("head.php"); ?>

<body>
</body>

<script type="text/javascript">
var sendData = {
		message:"test message",
		email:"alex.vander.woude@gmail.com"
		}
	$.ajax({
		  type: "POST",
		  url: "/bin/notify.php",
		  data: sendData,
		  success: alert,
		  dataType: "json"
		});

</script>


